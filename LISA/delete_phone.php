<?php

require_once "functions.php";

$phone = [];

$phone["client_id"] = $_REQUEST["client_id"];

$phone["nomber"] = $_REQUEST["nomber"];

delete_phone($phone);

header("Location:phone_list.php?client_id=" . $_REQUEST["client_id"]);

