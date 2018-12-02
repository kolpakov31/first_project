
<?php

require_once "functions.php";

switch($_POST['act']) {
    case 'phone':
        $query = "select rnn,ttype,phone,d_modi,descr from phones WHERE  rnn = '" . $_POST['rnn'] . "'";

        $result = pg_query($dbconn, $query) or die("Ошибка" . pg_last_error($dbconn));
        if ($result)
            $rows = pg_num_rows($result); // количество полученных строк
        echo "<table class='main'>
     <tr>  
        <th>Телефон</th>
        <th>Дата регистрации</th>
        <th>Дополнительно</th>
     </tr>";
        for ($i = 0; $i < $rows; ++$i) {
            $row = pg_fetch_row($result);
            echo "<tr>";

            echo "<td>$row[2]</td>";
            echo "<td>$row[3]</td>";
            echo "<td>$row[4]</td>";

            echo "</tr>";
        }
        echo "</table>";
        break;

    case 's_plat':
        $query = "select rnn,fam,pref,im,ot,birth,d_modi,addr,descr,cto_addr,job,cto_nai,is_master,has_car,is_zakaz,is_red 
        from s_plat 
        WHERE  rnn = '" . $_POST['rnn'] . "'";

        $result = pg_query($dbconn, $query) or die("Ошибка" . pg_last_error($dbconn));
        if ($result)
            $rows = pg_num_rows($result); // количество полученных строк
        echo "<table class='main'>
 <tr>    
        <th>Фамилия Имя Отчество</th>
        <th>Дата рождения</th>
        <th>Дата регистрации</th>
        <th>Адрес</th>
        <th>Дополнительная информация</th>
                     
 </tr>";
        for ($i = 0; $i < $rows; ++$i) {
            $row = pg_fetch_row($result);
            echo "<tr>";
            //for ($j = 0; $j < 16; ++$j) echo "<td>$row[$j]</td>";

            echo "<td>$row[1] $row[3] $row[4] </td>";
            echo "<td>$row[5]</td>";
            echo "<td>$row[6]</td>";
            echo "<td>$row[7]</td>";
            echo "<td>$row[9]</td>";

            echo "</tr>";
        }
        echo "</table>";
        break;

    case 'a12':
        $query = "select * from a12 WHERE  x = '" . $_POST['n_nakl'] . "'";

        $result = pg_query($dbconn, $query) or die("Ошибка" . pg_last_error($dbconn));
        if ($result)
            $rows = pg_num_rows($result); // количество полученных строк
        echo "<table class='main'>
    <tr> 
      
        <th>Наименование Характеристика</th>
        <th>Дата регистрации</th>        
        <th>Состояние запчасти</th>
        <th>Количество</th>
        <th>Цена продажи</th>
    
    </tr>";
        for ($i = 0; $i < $rows; ++$i) {
            $row = pg_fetch_row($result);
            echo "<tr>";

            // for ($j = 0; $j < 17; ++$j) echo "<td>$row[$j]</td>";

            echo "<td>$row[2] $row[3]</td>";
            echo "<td>$row[7]</td>";
            echo "<td>$row[5]</td>";
            echo "<td>$row[6](шт)</td>";
            echo "<td>$row[8]</td>";

            echo "</tr>";
        }
        echo "</table>";
        break;
}
// очищаем результат
pg_free_result($result);
pg_close($dbconn);

?>




