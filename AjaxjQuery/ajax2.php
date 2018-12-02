<?php

if (isset($_POST["key"]))$key = $_POST["key"];

require_once 'connectdb.php'; // подключаем скрипт

$dbconn = pg_connect("host=$host  dbname=$dbname user=$user password=$password")

or die("Could not connect:" .pg_last_error($dbconn));

$q =pg_query("select * from test_table ");

$res = pg_fetch_assoc($q);

$res['key'] = $key;

echo json_encode($res);


