<html>
<head>
</head>
<body>
<?php require_once "functions.php";

$firm_proiz = '';
$locat = '';
$mark_most = '';
$zyb = '';
$metall = '';
$har_most = '';
$mt_id = $_REQUEST["mt_id"];
if ($mt_id) {
    $most = get_most_by_id($mt_id);
    $firm_proiz = $most["firm_proiz"];
    $locat = $most["locat"];
    $mark_most = $most["mark_most"];
    $zyb = $most["zyb"];
    $metall = $most["metall"];
    $har_most = $most["har_most"];
}
?>
<form method="post" action="save_most.php">
    <?php if ($mt_id): ?>
        <input type="hidden" name="f_mt_id" value="<?= $mt_id ?>">
    <?php endif ?>
    <div>
        Фирма производитель: <input type="text"
                                    name="f_firm_proiz"
                                    value="<?= $firm_proiz ?>"
                                    placeholder="Введите фирму производителя">
    </div>
    <div>
        Место нахождения : <input type="text"
                                  name="f_locat"
                                  value="<?= $locat ?>"
                                  placeholder="Введите место нахождения">
    </div>
    <div>
        Марка моста: <input type="text"
                            name="f_mark_most"
                            value="<?= $mark_most ?>"
                            placeholder="Введите марку моста">
    </div>
    <div>
        Передаточное число: <input type="text"
                                   name="f_zyb"
                                   value="<?= $zyb ?>"
                                   placeholder="Введите передаточное число моста">
    </div>
    <div>
        Из какого металла мост: <input type="text"
                                       name="f_metall"
                                       value="<?= $metall ?>"
                                       placeholder="Введите из какого металла мост">
    </div>
    <div>
        Тех характеристика моста: <input type="text"
                                         name="f_har_most"
                                         value="<?= $har_most ?>"
                                         placeholder="Введите техническую характеристику моста">
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