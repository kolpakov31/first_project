<?php

require_once "functions.php";

$r_id = $_REQUEST["r_id"];

delete_razd_by_id($r_id);

header('Location:list_razd.php');

