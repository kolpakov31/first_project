<?php
require_once "functions.php";

$z_id = $_REQUEST["z_id"];

delete_zapch_by_id($z_id);

header('Location:list_zapch.php');

