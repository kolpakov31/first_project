<?php

require_once "u_functions.php";

$client = array(
    "u_id" => $_REQUEST["f_id"],
    "u_surname" => $_REQUEST["f_surname"],
    "u_name" => $_REQUEST["f_name"],
    "u_age" => $_REQUEST["f_age"],
);

if ($client["u_id"]) {
    update_client($client);
} else {
    $client["u_id"] = new_id();
    insert_new_client($client);
}


  header('Location:index3.php');
