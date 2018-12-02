
<?php

require_once"functions.php";

$ludi = array (
    "u_id" => $_REQUEST["f_id"],
    "u_surname" => $_REQUEST["f_surname"],
    "u_name" => $_REQUEST["f_name"],
    "u_patr" => $_REQUEST["f_patr"],
    "u_age" => $_REQUEST["f_age"],
);


if ($ludi["u_id"]) {
    update_client($ludi);
} else {
    $ludi["u_id"] = new_id();
    insert_new_client($ludi);
}

header('Location:index3.php');

