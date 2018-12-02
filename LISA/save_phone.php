<?php
require_once "functions.php";

$phone = array(
    "client_id" => $_REQUEST["client_id"],
    "nomber" => $_REQUEST["nomber"],
    "comment" => $_REQUEST["comment"],
);

if ($_REQUEST["edit"] === 'yes') {
    update_phone($phone);
} else {
    insert_phone($phone);
}
header("Location:phone_list.php?client_id=" . $_REQUEST["client_id"]);
