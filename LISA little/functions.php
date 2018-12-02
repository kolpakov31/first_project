<?php
include_once "conn_db.php";
//---------------------------------------------------------------
function get_ludiq_list()
{
    global $db_conn;
    $query = pg_query($db_conn, "select * from ludiq");
    $clients = pg_fetch_all($query, MYSQLI_ASSOC);
    return $clients;
}
//-------------------------------------------------------------
function get_client_by_id($id)
{
    global $db_conn;
    $query = "select * from ludiq where id = '$id'";
    $result = pg_query($db_conn, $query);
    $client = pg_fetch_all($result, MYSQLI_ASSOC);
    if (count($client) === 1) return $client[0];
    throw new Exception("Нет клиента с id = '$id'");
}
//-----------------------------------------------------------------
function update_client($ludiq)
{
    global $db_conn;
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
    if (!pg_query($db_conn, $query)) {
        throw new Exception ("Update error : " . pg_last_error($db_conn));
    }
}
//--------------------------------------------------------------------------
function insert_new_client($ludiq)
{
    global $db_conn;
    $id = $ludiq["u_id"];
    $tip = $ludiq["u_tip"];
    $surname = $ludiq["u_surname"];
    $nam = $ludiq["u_nam"];
    $patr = $ludiq["u_patr"];
    $city = $ludiq["u_city"];
    $dop = $ludiq["u_dop"];
    $dr = $ludiq["u_dr"];
    $query = "insert into ludiq (id,tip,surname,nam,patr,city,dop,dr) values ('$id','$tip','$surname','$nam','$patr','$city','$dop','$dr')";
    if (!pg_query($db_conn, $query)) {
        throw new Exception ("Insert error : " . pg_last_error($db_conn));
    }
}
//----------------------------------------------------------------------------
function delete_client_by_id($id)
{
    global $db_conn;

    $query = "delete from ludiq where id = '$id'";

    if (!pg_query($db_conn, $query)) {
        throw new Exception ("Delete error : " . pg_last_error($db_conn));
    }
}
//--------------------------------------------------------------------------------
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
//---------------------------------------------------------------------------------------
function get_fonq_list($ludiq_id)
{
    global $db_conn;
    $result = pg_query($db_conn, "select * from fonq where zic = '$ludiq_id'");
    $fonqs = pg_fetch_all($result, MYSQLI_ASSOC);
    return $fonqs;
}
//----------------------------------------------------------------
function insert_fonq($fonq)
{
    global $db_conn;

    $zic = $fonq["ludiq_id"];
    $nom = $fonq["nom"];
    $com = $fonq["com"];
    $sql = "insert into fonq
      (ludiq_id, nom, com) values
      ('$zic','$nom','$com')
    ";
    if (!pg_query($db_conn, $sql)) {
        throw new Exception ("Update error : " . pg_last_error($db_conn));
    }
}

//-----------------------------------------------------------------