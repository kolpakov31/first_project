
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<?php
require_once 'connection.php'; // подключаем скрипт

$dbconn = pg_connect("host=$host  dbname=$dbname user=$user password=$password")

or die("Could not connect:" . pg_last_error($dbconn));

$query ="SELECT * FROM kol";

$result = pg_query($dbconn, $query) or die("Ошибка" .pg_last_error($dbconn));

if($result)
{
    $rows = pg_num_rows($result); // количество полученных строк

    echo "<table><tr><th>Айди</th><th>Характеристика</th><th>Название</th></tr>";
    for ($i = 0 ; $i < $rows ; ++$i)
    {
        $row = pg_fetch_row($result);
        echo "<tr>";
        for ($j = 0 ; $j < 3 ; ++$j) echo "<td>$row[$j]</td>";
        echo "</tr>";
    }
    echo "</table>";

    // очищаем результат
    pg_free_result($result);
}

    pg_close($dbconn);
?>
</body>
</html>
