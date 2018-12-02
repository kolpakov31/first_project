<?php

require_once "functions.php";

$mt_id = $_REQUEST["mt_id"];

delete_most_by_id($mt_id);

header('Location:list_most.php');

