<?php
require_once "connectLisa.php";

$dbconn = pg_connect("host=$host  dbname=$dbname user=$user password=$password")

or die("Could not connect:" . pg_last_error($dbconn));
