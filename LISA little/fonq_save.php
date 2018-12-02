<?php
require_once "functions.php";

$fonq = array (

    "ludiq_id" => $_REQUEST["ludiq_id"],
    "nom" => $_REQUEST["nom"],
    "com" => $_REQUEST["com"],
);
if ($_REQUEST["edit"] === 'yes') {
    update_fonq($fonq);
} else {
    insert_fonq($fonq);
}

header("Location:fonq_list.php?ludiq_id= " . $_REQUEST["ludiq_id"]);
