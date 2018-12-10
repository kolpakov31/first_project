
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Мой сайт DVS</title>
    <link rel="stylesheet" type="text/css" href="styl.css">
    <link rel="stylesheet" type="text/css" href="styl1.css">
    <link rel="stylesheet" type="text/css" href="styl2.css">
    <script src="jquery.min.js"></script>
    <script src="script.js"></script>
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
    <h1>Введите запрос интересующей запчасти</h1>
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
            <td><form method="get" action="index.php">
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
         </tr>
    </table>
</div>

<?php
if(empty($nai_zap)){

    echo '';

}else{

    require_once "functions.php";

    $query = "select x,x0,x8||' '||x9||' '||x11||' '||x12||'-'||x13||'г.в'||' '||x10||'L'||' '||v14,x1,x2||' '||x3,x6 from a12 WHERE 1 = 1 ";

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

    echo "<table border='1' width='100%' class='main' id='data'>
      <tr>
        <td rowspan='4' class='shir'>
              <div>
                <div class='test'>
                  <table>
                      <tr class='naz'>                                                              
                          <th class='head_row'>Машина</th>
                          <th class='head_row'>Запчасть</th>
                          <th class='head_row'>Тех  хар</th>
                          <th class='head_row'>Дата добавления</th>
                      </tr>";
    for ($i = 0; $i < $rows; ++$i) {
        $row = pg_fetch_row($result);
    echo "<tr tabindex='-1' data-rnn ='$row[1]' data-n_nakl ='$row[0]'>";
    for ($j = 0; $j < 6; ++$j) {
        echo "<td class='head_row2'>$row[$j]</td>";
    }
    }
    echo "</tr>\n";
    echo "</table>";
    echo "</div>";
    echo "</div>";
    echo "</td>";
    echo "<tr>
        <td valign = 'top'>
          <div id = 'search_s_plat' ></div ></td>
      </tr >";
    echo "<tr >
      <td valign = 'top'>
          <div id = 'search_phone' ></div ></td>
    </tr >";
    echo "<tr >
      <td valign = 'top'>
          <div id = 'search_a12' ></div ></td>
    </tr >";
    echo "</table>";
// очищаем результат
pg_free_result($result);
pg_close($dbconn);
}
?>
</body>
</html>
