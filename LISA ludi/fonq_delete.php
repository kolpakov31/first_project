<?php

require_once "functions.php";

$fonq = [];

$fonq["ludiq_id"] = $_REQUEST["ludiq_id"];

$fonq["nom"] = $_REQUEST["nom"];

delete_fonq($fonq);

header("Location:list_fonq.php?ludiq_id=" . $_REQUEST["ludiq_id"]);
