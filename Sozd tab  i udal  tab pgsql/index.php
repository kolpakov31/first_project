 <?php
require_once 'connection.php';
$dbconn = pg_connect("host=$host dbname=$dbname user=$user password=$password")
or die("Ошибка :" . pg_last_error($dbconn));
$query = "CREATE Table tovars3
(
    id serial primary key,
    name char(64),
    company char(56)
)";
$result = pg_query($dbconn, $query) or die("Ошибка " . pg_last_error($dbconn));

if ($result == $result) {
    echo "Создание таблицы прошло успешно";
}
pg_close($dbconn);
?> 
<?php
require_once 'connection.php';
$dbconn = pg_connect("host=$host dbname=$dbname user=$user password=$password")
or die(" Ошибка :" . pg_last_error($dbconn));
$query = "drop table tovars3";
$result = pg_query($dbconn, $query) or die(" Ошибка " . pg_last_error($dbconn));
if ($result = $result) {
    echo "Удаление таблицы прошло успешно";
}
pg_close($dbconn);
?>  
