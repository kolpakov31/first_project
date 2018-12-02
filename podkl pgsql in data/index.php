<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<?php

require_once 'connection.php';

if (isset($_POST['id']) && (isset($_POST['har']) && isset($_POST['nazv']))) {

    $dbconn = pg_connect("host=$host dbname=$dbname user=$user password=$password")

    or die('Could not connect:' . pg_last_error($dbconn));
// экранирования символов для sql
    $id = html_entity_decode(pg_escape_string($dbconn, $_POST['id']));
    $har = html_entity_decode(pg_escape_string($dbconn, $_POST['har']));
    $nazv = html_entity_decode(pg_escape_string($dbconn, $_POST['nazv']));

// создание строки запроса
    $query = "INSERT INTO kol VALUES( '$id','$har','$nazv')";

// выполняем запрос
    $result = pg_query(pg_query($dbconn, $query) or die ("Ошибка" . pg_last_error($dbconn)));

    if($result == $result)
    {
        echo "<span style='color:blue;'>Данные добавлены</span>";
    }

// Очистка результата
    pg_free_result($result);
// Закрытие соединения
    pg_close($dbconn);
}
?>
<h2>Добавить новую модель</h2>
<form method="POST">
    <p>Айди:<br>
        <input type="text" name="id"/></p>
    <p>Характеристика:<br>
        <input type="text" name="har"/></p>
    <p>Название: <br>
        <input type="text" name="nazv"/></p>
    <input type="submit" value="Добавить">
</form>
</body>
</html>



