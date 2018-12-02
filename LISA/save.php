<?php

require_once"functions.php";

$client = array (

    "u_id" => $_REQUEST["f_id"],
    "u_tip" => $_REQUEST["f_tip"],
    "u_surname" => $_REQUEST["f_surname"],
    "u_nam" => $_REQUEST["f_nam"],
    "u_patr" => $_REQUEST["f_patr"],
    "u_city" => $_REQUEST["f_city"],
    "u_dop" => $_REQUEST["f_dop"],
    "u_dat" => $_REQUEST["f_dat"],
);
if ($client["u_id"]) {
    update_client($client);
} else {
    $client["u_id"] = new_id();
    insert_new_client($client);
}

header('Location:index3.php');

//----------------------------------------------------------------------

