<?php

require_once 'connectdb.php'; // подключаем скрипт

$dbconn = pg_connect("host=$host  dbname=$dbname user=$user password=$password")

or die("Could not connect:" .pg_last_error($dbconn));

$q =pg_query("SELECT * FROM  test_table");

$res = pg_fetch_assoc($q);

echo json_encode($res);





