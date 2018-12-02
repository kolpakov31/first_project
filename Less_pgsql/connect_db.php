<?php
$db_connect = pg_connect("host=localhost dbname=postgres user=postgres password=111")
or die("Ошибка подключения :" . pg_last_error($db_connect));
?>
//-----------------------------------------------------------------