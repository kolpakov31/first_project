<?php

$db_con = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=111")

or die('Could not connect:' . pg_last_error($db_con));



