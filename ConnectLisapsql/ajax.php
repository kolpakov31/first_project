
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
        
        <th>ttype</th>   
        <th>Телефон</th>
        <th>Дата регистрации</th>
        <th>Дополнительно</th>
 </tr>";
        for ($i = 0; $i < $rows; ++$i) {
            $row = pg_fetch_row($result);
            echo "<tr>";
            echo "<td>$row[1]</td>";
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
        <th>Рэнн</th>
        <th>Фамилия</th>
        <th>pref</th>
        <th>Имя</th>
        <th>Отчество</th>
        <th>Дата рождения</th>
        <th>Дата регистрации</th>
        <th>Адрес</th>
        <th>Дополнительная информация</th>
        <th>Адрес СТО</th> 
        <th>Работа</th> 
        <th>СТО наименование</th>$j
        <th>is_master</th>
        <th>has_car</th> 
        <th>is_zakaz</th> 
        <th>is_red</th>           
 </tr>";
        for ($i = 0; $i < $rows; ++$i) {
            $row = pg_fetch_row($result);
            echo "<tr>";
            for ($j = 0; $j < 16; ++$j) echo "<td>$row[$j]</td>";
            echo "</tr>";
        }
        echo "</table>";
        break;




    case 'a12':
        $query = "select x from a12 WHERE  x = '" . $_POST['n_nakl'] . "'";

        $result = pg_query($dbconn, $query) or die("Ошибка" . pg_last_error($dbconn));
        if ($result)
            $rows = pg_num_rows($result); // количество полученных строк
        echo "<table class='main'>
 <tr> 
       <th>Ннакл</th>
        <th>Рэнн</th>
        <th>Наименование</th>
        <th>Характеристика</th>
        <th>Технич Характ</th>
        <th>Состояние запчасти</th>
        <th>Количество</th>
        <th>Дата регистрации</th>
        <th>Цена продажи</th>
        <th>Фирма произв</th>
        <th>Марка машины</th>
        <th>Объем двигателя </th>
        <th>Характеристика</th>
        <th>Технич Характ</th>
        <th>Состояние запчасти</th>
        <th>Количество</th>
        <th>Дата регистрации</th>
        <th>Цена продажи</th>
        <th>Фирма произв</th>
        <th>Марка машины</th>
        <th>Объем двигателя </th>
        <th>Тип двигателя</th>
        <th>Год выпуска с</th>
        <th>Год выпуска по</th>
        <th>Коробка</th>
        <th>Раздатка</th>    
        <th>Тип двигателя</th>
        <th>Год выпуска с</th>
        <th>Год выпуска по</th>
        <th>Коробка</th>
        <th>Раздатка</th>    
 </tr>";
        for ($i = 0; $i < $rows; ++$i) {
            $row = pg_fetch_row($result);
            echo "<tr>";
            for ($j = 0; $j < 17; ++$j) echo "<td>$row[$j]</td>";
            echo "</tr>";
        }
        echo "</table>";
        break;

}
// очищаем результат
pg_free_result($result);
pg_close($dbconn);

?>




