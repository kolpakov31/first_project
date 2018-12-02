
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Мой сайт DVS</title>
    <link rel="stylesheet" type="text/css" href="styl.css">
    <link rel="stylesheet" type="text/css" href="styl1.css">
    <link rel="stylesheet" type="text/css" href="styl2.css">
    <script src="jquery.min.js"></script>
    <script src="script2.js"></script>
</head>
<body>
<header>
    <div class="title">
        <a href="http://dvs.kz" class="btn">DVS.KZ</a>
        <h1>Сайт по ремонту JEEP GMC Ford</h1>
    </div>
    <br/>
</header>
<div class="container">
    <div class="fot">
        <img src="foto/wrangler.jpg">
        <img src="foto/ford_explorer.jpeg">
        <img src="foto/cherokee.jpg">
        <img src="foto/chevrolet_blazer.jpg">
        <img src="foto/grand_cherokee.jpg">
        <img src="foto/ford_tempo.jpg">
        <img src="foto/voyadger.jpeg">
        <img src="foto/pt_cruiser.jpg">
    </div>
    <br/><br/>
</div>
<div class="poisk">
    <a>Введите запрос интересующей Вас запчасти</a>
</div>
<?php
$nai_zap = '';
$xar_zap = '';
$firm_pr = '';
$mark_ma = '';
$ob_dv = '';
$god_v_s = '';
$god_v_po = '';

$nai_zap = $_REQUEST["nai_zap"];
$xar_zap = $_REQUEST["xar_zap"];
$firm_pr = $_REQUEST["firm_pr"];
$mark_ma = $_REQUEST["mark_ma"];
$ob_dv = $_REQUEST["ob_dv"];
$god_v_s = $_REQUEST["god_v_s"];
$god_v_po = $_REQUEST["god_v_po"];
?>
<div class="container">
    <table>
        <tr>
            <td><form method="get" action="index2.php">
                    <?php
                    if($nai_zap and $xar_zap and $firm_pr and $mark_ma and $ob_dv and $god_v_s and $god_v_po):?>
                        <input type="hidden" name="nai_zap" value="<?= $nai_zap ?>">
                        <input type="hidden" name="xar_zap" value="<?= $xar_zap ?>">
                        <input type="hidden" name="firm_pr" value="<?= $firm_pr ?>">
                        <input type="hidden" name="mark_ma" value="<?= $mark_ma ?>">
                        <input type="text" name= ob_dv value="<?= $ob_dv ?>">
                        <input type="number" name= god_v_s value="<?= $god_v_s ?>">
                        <input type="number" name= god_v_po value="<?= $god_v_po ?>">
                    <?php endif ?>
                    <div class="poisk1">
                        Наименование запчасти: <input type="text"
                                                      name="nai_zap"
                                                      value="<?= $nai_zap ?>"
                                                      placeholder="Введите наименование запчасти">
                    </div>
                    <div class="poisk1">
                        Введите характеристику запчасти: <input type="text"
                                                                name="xar_zap"
                                                                value="<?= $xar_zap ?>"
                                                                placeholder="Введите сюда характеристику запчасти">
                    </div>
                    <div class="poisk1">
                        Введите фирму производителя: <input type="text"
                                                            name="firm_pr"
                                                            value="<?= $firm_pr ?>"
                                                            placeholder="Введите фирму производителя">
                    </div>
                    <div class="poisk1">
                        Введите марку машины: <input type="text"
                                                     name="mark_ma"
                                                     value="<?= $mark_ma ?>"
                                                     placeholder="Введите марку машины">
                    </div>
                    <div class="poisk1">
                        Объем двигателя: <input type="text"
                                                name = ob_dv
                                                value="<?= $ob_dv ?>"
                                                placeholder="Введите сюда объем двигателя">
                    </div>
                    <div class="poisk1">
                        Год выпуска машины с: <input type="number"
                                                     name = god_v_s
                                                     value="<?= $god_v_s ?>"
                                                     placeholder="Введите год выпуска машины с">
                    </div>
                    <div class="poisk1">
                        Год выпуска машины по: <input type="number"
                                                      name = god_v_po
                                                      value="<?= $god_v_po ?>"
                                                      placeholder="Введите год выпуска машины по">
                    </div>
                    <div class="btn1">
                        <input type="submit" value="Искать">

                    </div>
                </form></td>
            <td valign="top">
                <div id="search_s_plat"></div></td>
            <td valign="top">
                <div id="search_phone"></div></td>
            <td valign="top">
                <div id="search_a12"></div></td>
            </tr>
    </table>

   </div>

<?php
if(empty($nai_zap)){

    echo '';

}else{

    require_once "functions.php";

    $query = "select * from a12 WHERE 1 = 1 ";

    if (!empty($nai_zap)) {
        $query = $query . "and x1 ilike '%" . $nai_zap . "%'";
    }
    if (!empty($xar_zap)) {
        $query = $query . "and x2 ilike '%" . $xar_zap . "%'";
    }
    if (!empty($firm_pr)) {
        $query = $query . "and x8 ilike '%" . $firm_pr . "%'";
    }
    if (!empty($mark_ma)) {
        $query = $query . "and x9 ilike '%" . $mark_ma . "%'";
    }
    if (!empty($ob_dv)) {
        $query = $query . "and x10 = $ob_dv";
    }
    if (!empty($god_v_s)) {
        $query = $query . "and x12 >= $god_v_s";
    }
    if (!empty($god_v_po)) {
        $query = $query . "and x13 <= $god_v_po";
    }

    $result = pg_query($dbconn, $query) or die("Ошибка".pg_last_error($dbconn));
    if ($result)
        $rows = pg_num_rows($result); // количество полученных строк
    echo "<table class='main' id='data'>
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
        <th>Тип двигателя</th>
        <th>Год выпуска с</th>
        <th>Год выпуска по</th>
        <th>Коробка</th>
        <th>Раздатка</th>
    </tr>";

    for ($i = 0; $i < $rows; ++$i) {
        $row = pg_fetch_row($result);
        echo "<tr tabindex='-1' data-rnn='$row[1]' data-n_nakl = '$row[0]'>";
        for ($j = 0; $j < 17; ++$j) {
            echo "<td>$row[$j]</td>";
        }
        echo "</tr>\n";
    }
    echo "</table>";
// очищаем результат
    pg_free_result($result);
    pg_close($dbconn);
}
?>


<h1 class="naz">Поиск запчастей</h1>
<table border='1' width='100%'>
    <tr>
        <td rowspan="3" class="qqq">
            <div class="tab">
                <div>
                    <table >
                        <tr class="naz">
                            <td class='head_row'>Машина</td>
                            <td class='head_row'>Запчасть</td>
                            <td class='head_row'>Тех. хар.</td>
                            <td class='head_row'>Дата добавления</td>
                        </tr>
                        <tr data-rnn="" data-n_nakl="">

                            <td>
                                1
                            </td>
                            <td>
                                2
                            </td>
                            <td>
                                3
                            </td>
                            <td>
                                4
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </td>
        <td>
            5
        </td>
    </tr>
    <tr>
        <td>
            6
        </td>
    </tr>
    <tr>
        <td>
            7
        </td>
    </tr>
</table>

</body>
</html>
