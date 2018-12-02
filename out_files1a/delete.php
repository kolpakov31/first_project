<?php

require_once "u_functions.php";

$id = $_REQUEST["id"];

delete_client_by_id($id);

header('Location: index3.php');