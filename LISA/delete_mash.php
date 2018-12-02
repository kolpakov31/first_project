<?php
require_once "functions.php";

$m_id = $_REQUEST["m_id"];

delete_mash_by_id($m_id);

header('Location:list_zapch.php');

