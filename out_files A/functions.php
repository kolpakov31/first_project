<?php
include_once "connect_k_db.php";
//----------------------------------------------------------------------------------

function get_clients() {

   global  $link_1;

    $result = mysqli_query($link_1, "select * from ludi");

    $clients = mysqli_fetch_all($result,MYSQLI_ASSOC);

    return $clients;

}
//------------------------_---------------------------------------
function get_client_by_id($id) {

    global  $link_1;

    $query = "select * from ludi where id = '$id'";

    $result = mysqli_query($link_1,$query);

    $client = mysqli_fetch_all($result,MYSQLI_ASSOC);

    if (count($client) === 1) return $client[0];

    throw new Exception("Нет клиента с id = $id");
}
//---------------------------------------------------------------
function update_client($ludi)
   {
    global $link_1;

    $id = $ludi["u_id"];
    $surname = $ludi["u_surname"];
    $name = $ludi["u_name"];
    $patr = $ludi["u_patr"];
    $age = $ludi["u_age"];

    $query = "update ludi set
        surname = '$surname',
        name = '$name',
        patr = '$patr',
        age = '$age'
        where id = '$id'";

    if (!mysqli_query($link_1,$query )) {
        throw new Exception ("Update error : " . mysqli_error($link_1));
    }
}
//--------------------------------------------------------------------------

$letters1 = 'abcdefghijklmnopqrstuvwxyz';
$letters2 = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
$letters3 = '0123456789';
$lettersAll = $letters1.$letters2.$letters3;
function new_id() {
    global $lettersAll;
    $ret = '';
    for($i = 0; $i < 10; $i++) {
        $rndIndex = rand(0, strlen($lettersAll) - 1);
        $c = substr($lettersAll, $rndIndex, 1);
        $ret = $ret . $c;
    }
    return $ret;
}
//-------------------------------------------------------------------------
function insert_new_client($ludi) {

    global  $link_1;

    $id = $ludi["u_id"];
    $surname = $ludi["u_surname"];
    $name = $ludi["u_name"];
    $patr = $ludi["u_patr"];
    $age = $ludi["u_age"];

    $query = "insert into ludi (id, surname, name, patr, age) values ('$id','$surname','$name','$patr','$age')";

    if (!mysqli_query($link_1, $query)) {
        throw new Exception ("Insert error : " . mysqli_error($link_1));
    }
}
//--------------------------------------------------------------------------
function delete_client_by_id($id) {

    global  $link_1;

    $query = "delete from ludi where id = '$id'";

    if (!mysqli_query($link_1, $query)) {
        throw new Exception ("Delete error : " . mysqli_error($link_1));
    }
}
//------------------------------------------------------------------------------