
<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">S
</head>
<body>
<?php

require_once 'functions.php';

 if (isset($_POST['nai_zap'])
 && (isset($_POST['xar_zap'])
 && (isset($_POST['xar_zap'])
 && (isset($_POST['xar_zap'])
 && (isset($_POST['xar_zap'])
 && (isset($_POST['xar_zap'])
 && isset($_POST['firm_pr']))) {

// экранирования символов для sql

   $nai_zap = html_entity_decode(pg_escape_string($dbconn, $_POST['nai_zap']));
   $xar_zap = html_entity_decode(pg_escape_string($dbconn, $_POST['xar_zap']));
   $firm_pr = html_entity_decode(pg_escape_string($dbconn, $_POST['firm_pr']));
   $mark_ma = html_entity_decode(pg_escape_string($dbconn, $_POST['mark_ma']));
   $ob_dv = html_entity_decode(pg_escape_string($dbconn, $_POST['ob_dv']));
   $god_v_s = html_entity_decode(pg_escape_string($dbconn, $_POST['god_v_s']));
   $god_v_po = html_entity_decode(pg_escape_string($dbconn, $_POST['god_v_po']));


// создание строки запроса

    $query = "INSERT INTO za VALUES( )";

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



