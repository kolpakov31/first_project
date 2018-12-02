<html>
<head>
</head>
<body>
<?php require_once "functions.php";

$chelovec ='';
$most = '';
$razd = '';
$mashina = '';
$nasv_zap = '';
$har_zap = '';
$teh_har = '';
$ind_n_zap = '';
$coli = '';
$cena_star = '';
$cena_nov = '';
$sost = '';

$z_id = $_REQUEST["z_id"];

if ($z_id) {
    $zapch = get_zapch_by_id($z_id);
    $chelovec = $zapch["chelovec"];
    $most = $zapch["most"];
    $razd = $zapch["razd"];
    $mashina = $zapch["mashina"];
    $nasv_zap = $zapch["nasv_zap"];
    $har_zap = $zapch["har_zap"];
    $teh_har = $zapch["teh_har"];
    $ind_n_zap = $zapch["ind_n_zap"];
    $coli = $zapch["coli"];
    $cena_star = $zapch["cena_star"];
    $cena_nov = $zapch["cena_nov"];
    $sost = $zapch["sost"];
}
?>

<form method="post" action="save_zapch.php">
    <?php if ($z_id): ?>
        <input type="hidden" name="f_z_id" value="<?= $z_id ?>">
    <?php endif ?>
    <div>
    Человек: <input type="text"
                 name="f_chelovec"
                 value="<?= $chelovec ?>"
                 placeholder="Введите человека">
    </div>
    <div>
        Мост: <input type="text"
                        name="f_most"
                        value="<?= $most ?>"
                        placeholder="Введите какой мост">
    </div>
    <div>
        Раздатка : <input type="text"
                     name="f_razd"
                     value="<?= $razd?>"
                     placeholder="Введите какая раздатка">
    </div>
    <div>
        Машина: <input type="text"
                    name="f_mashina"
                    value="<?= $mashina ?>"
                    placeholder="Введите машину">
    </div>
    <div>
        Название запчасти: <input type="text"
                         name="f_nasv_zap"
                         value="<?= $nasv_zap ?>"
                         placeholder="Введите название запчасти">
    </div>
    <div>
        Характеристика запчасти: <input type="text"
                      name="f_har_zap"
                      value="<?= $har_zap ?>"
                      placeholder="Введите характеристику запчасти">
    </div>
    <div>
        Техническая характеристика: <input type="text"
                              name="f_teh_har"
                              value="<?= $teh_har ?>"
                              placeholder="Введите техническую характеристику">
    </div>
    <div>
        Индиф номер запчасти: <input type="text"
                              name="f_ind_n_zap"
                              value="<?= $ind_n_zap ?>"
                              placeholder="Введите индиф номер запчасти">
    </div>
    <div>
        Количество: <input type="text"
                        name="f_coli"
                        value="<?= $coli ?>"
                        placeholder="Введите количество ">
    </div>
    <div>
        Старая цена: <input type="text"
                     name="f_cena_star"
                     value="<?= $cena_star ?>"
                     placeholder="Введите старую цену">
    </div>
    <div>
        Новая цена: <input type="text"
                       name="f_cena_nov"
                       value="<?= $cena_nov ?>"
                       placeholder="Введите новую цену">
    </div>
    <div>
        Состояние: <input type="text"
                                  name="f_sost"
                                  value="<?= $sost ?>"
                                  placeholder="Введите состояние запчасти">
    </div>
    <div>
        У меня: <input type="checkbox" name="f_form">
    </div>
    <div>
        Фото: <input type="file" name="f_face">
    </div>
    <div>
        <input type="submit" value="Сохранить">
    </div>
</form>
</body>
</html>