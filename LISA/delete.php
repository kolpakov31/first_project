<?php

require_once "functions.php";

$id = $_REQUEST["id"];

delete_client_by_id($id);

header('Location:index3.php');

