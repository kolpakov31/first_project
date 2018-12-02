<?php
require_once "functions.php";

$fonq = array (

    "ludiq_id" => $_REQUEST["ludiq_id"],
    "nom" => $_REQUEST["nom"],
    "com" => $_REQUEST["com"],
);
if (!$_REQUEST["edit"] === 'yes') {
    insert_fonq($fonq);
}

header("Location:list_fonq.php?ludiq_id=" . $_REQUEST["ludiq_id"]);

?>