<?php
include_once "connect_db.php";
//--------------------------------------------------------------
function get_ludiq_list()
{
    global $db_con;
    $query = pg_query($db_con, "select * from ludiq");
    $clients = pg_fetch_all($query, PGSQL_ASSOC);
    return $clients;
}

//-------------------------------------------------------------
function get_fonq_list($ludiq_id)
{
    global $db_con;
    $result = pg_query($db_con, "select * from fonq where client_id = '$ludiq_id'");
    $fonqs = pg_fetch_all($result, PGSQL_ASSOC);
    return $fonqs;
}

//-----------------------------------------------------------------
function get_client_by_id($id)
{
    global $db_con;
    $query = "select * from ludiq where id = '$id'";
    $result = pg_query($db_con, $query);
    $client = pg_fetch_all($result, PGSQL_ASSOC);
    if (count($client) === 1) return $client[0];
    throw new Exception("Нет клиента с id = '$id'");
}

//-----------------------------------------------------------------
function insert_fonq($fonq)
{
    global $db_con;

    $ludiq_id = $fonq["ludiq_id"];
    $nom = $fonq["nom"];
    $com = $fonq["com"];
    $sql = "insert into fonq
      (ludiq_id, nom, com) values
      ('$ludiq_id','$nom','$com')
    ";
    if (!pg_query($db_con, $sql)) {
        throw new Exception ("Update error : " . pg_last_error($db_con));
    }
}

//-----------------------------------------------------------------
function delete_fonq($fonq)
{
    global $db_con;
    $ludiq_id = $fonq["ludiq_id"];
    $nom = $fonq["nom"];
    $sql = "delete from fonq
    where client_id = '$ludiq_id'
    and nom = '$nom'
    ";
    if (!pg_query($db_con, $sql)) {
        throw new Exception ("Update error : " . pg_last_error($db_con));
    }
}

//-----------------------------------------------------------------
function update_client($ludiq)
{
    global $db_con;
    $id = $ludiq["u_id"];
    $tip = $ludiq["u_tip"];
    $surname = $ludiq["u_surname"];
    $nam = $ludiq["u_nam"];
    $patr = $ludiq["u_patr"];
    $city = $ludiq["u_city"];
    $dop = $ludiq["u_dop"];
    $dr = $ludiq["u_dr"];
    $query = "update ludiq set
        tip = '$tip',
        surname = '$surname',
        nam = '$nam',
        patr = '$patr',
        city = '$city',
        dop = '$dop',
        dr = '$dr'
        where id = '$id'";
    if (!pg_query($db_con, $query)) {
        throw new Exception ("Update error : " . pg_last_error($db_con));
    }
}

//--------------------------------------------------------------------------
$letters1 = 'abcdefghijklmnopqrstuvwxyz';
$letters2 = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
$letters3 = '0123456789';
$lettersAll = $letters1 . $letters2 . $letters3;
function new_id()
{
    global $lettersAll;
    $ret = '';
    for ($i = 0; $i < 10; $i++) {
        $rndIndex = rand(0, strlen($lettersAll) - 1);
        $c = substr($lettersAll, $rndIndex, 1);
        $ret = $ret . $c;
    }
    return $ret;
}

//-------------------------------------------------------------------------
function insert_new_client($ludiq)
{
    global $db_con;
    $id = $ludiq["u_id"];
    $tip = $ludiq["u_tip"];
    $surname = $ludiq["u_surname"];
    $nam = $ludiq["u_nam"];
    $patr = $ludiq["u_patr"];
    $city = $ludiq["u_city"];
    $dop = $ludiq["u_dop"];
    $dr = $ludiq["u_dr"];
    $query = "insert into ludiq (id,tip,surname,nam,patr,city,dop,dr) values ('$id','$tip','$surname','$nam','$patr','$city','$dop','$dr')";
    if (!pg_query($db_con, $query)) {
        throw new Exception ("Insert error : " . pg_last_error($db_con));
    }
}


//------------------------------------------------------------------------------------------
function delete_client_by_id($id)
{
    global $db_con;

    $query = "delete from ludiq where id = '$id'";

    if (!pg_query($db_con, $query)) {
        throw new Exception ("Delete error : " . pg_last_error($db_con));
    }
}

//-------------------------------------------------------------------------------------------
function load_fonq($ludiq_id, $nom)
{
    global $db_con;
    $sql = "select * from fonq where client_id = '$ludiq_id' and nom = '$nom'";

    $query = pg_query($db_con, $sql);
    $fonq_list = pg_fetch_all($query, PGSQL_ASSOC);

    if (count($fonq_list) === 0) {
        throw new Exception ("No such fonq: ludiq_id = $ludiq_id, nom = $nom");
    }

    return $fonq_list[0];
}
?>
//------------------------------------------------------------------------------------------