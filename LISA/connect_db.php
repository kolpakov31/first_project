<?php

$link_lisa = pg_connect("host=localhost dbname=postgres user=postgres password=111")

or die('Could not connect:' . pg_last_error($link_lisa));

?>

// Подключено