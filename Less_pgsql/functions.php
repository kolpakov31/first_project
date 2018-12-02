<?php
include_once "connect_db.php";
//---------------------------------------------------------------
function get_god_list()
{
    global $db_connect;
    $query = pg_query($db_connect, "select * from god");
    $clients = pg_fetch_all($query, MYSQLI_ASSOC);
    return $clients;
}
?>
//-------------------------------------------------------------
