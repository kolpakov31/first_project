<?php
include_once "connect_db.php";
//----------------------------------------------------------------------------------
function get_clients() {

    global  $link_to_db;

    $result = mysqli_query($link_to_db, "select * from client");

    $clients = mysqli_fetch_all($result,MYSQLI_ASSOC);

    return $clients;
}
//----------------------------------------------------------------------------------
function get_client_by_id($id) {

    global  $link_to_db;

    $query = "select * from client where id = '$id'";

    $result = mysqli_query($link_to_db, $query);

    $clients = mysqli_fetch_all($result,MYSQLI_ASSOC);

    if (count($clients) === 1) return $clients[0];

    throw new Exception("Нет клиента с id = $id");
}
//----------------------------------------------------------------------------------
function update_client($client)
{
    global $link_to_db;

    $id = $client["u_id"];
    $surname = $client["u_surname"];
    $name = $client["u_name"];
    $age = $client["u_age"];

    $query = "update client set
        surname = '$surname',
        name = '$name',
        age = '$age'
        where id = '$id'";

    if (!mysqli_query($link_to_db, $query)) {
        throw new Exception ("Update error : " . mysqli_error($link_to_db));
    }
}
//----------------------------------------------------------------------------------
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
//----------------------------------------------------------------------------------
function insert_new_client($client) {
    global  $link_to_db;

    $id = $client["u_id"];
    $surname = $client["u_surname"];
    $name = $client["u_name"];
    $age = $client["u_age"];

    $query = "insert into client (id, surname, name, age) values ('$id', '$surname', '$name', '$age')";

    if (!mysqli_query($link_to_db, $query)) {
        throw new Exception ("Insert error : " . mysqli_error($link_to_db));
    }
}
//----------------------------------------------------------------------------------
function delete_client_by_id($id) {
    global  $link_to_db;

    $query = "delete from client where id = '$id'";

    if (!mysqli_query($link_to_db, $query)) {
        throw new Exception ("Delete error : " . mysqli_error($link_to_db));
    }
}
//----------------------------------------------------------------------------------
