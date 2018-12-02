<html>
<head>
</head>
<body>
<?php require_once "functions.php";

$firm_proiz = '';
$mark_mash = '';
$god_v = '';
$ob_dv = '';
$tip_dv = '';
$kpp = '';
$sb_kpp = '';
$mark_kpp = '';
$razd = '';
$sbor_mash = '';
$dop_inf = '';
$m_id = $_REQUEST["m_id"];
if ($m_id) {
    $mash = get_mash_by_id($m_id);
    $firm_proiz = $mash["firm_proiz"];
    $mark_mash = $mash["mark_mash"];
    $god_v = $mash["god_v"];
    $ob_dv = $mash["ob_dv"];
    $tip_dv = $mash["tip_dv"];
    $kpp = $mash["kpp"];
    $sb_kpp = $mash["sb_kpp"];
    $mark_kpp = $mash["mark_kpp"];
    $razd = $mash["razd"];
    $sbor_mash = $mash["sbor_mash"];
    $dop_inf = $mash["dop_inf"];
}
?>

<form method="post" action="save_mash.php">
    <?php if ($m_id): ?>
        <input type="hidden" name="f_m_id" value="<?= $m_id ?>">
    <?php endif ?>
    <div>
        Фирма производитель: <input type="text"
                                    name="f_firm_proiz"
                                    value="<?= $firm_proiz ?>"
                                    placeholder="Введите фирму производителя">
    </div>
    <div>
        Марка машины: <input type="text"
                             name="f_mark_mash"
                             value="<?= $mark_mash ?>"
                             placeholder="Введите марку машины">
    </div>
    <div>
        Год выпуска: <input type="text"
                            name="f_god_v"
                            value="<?= $god_v ?>"
                            placeholder="Введите год выпуска">
    </div>
    <div>
        Объем двигателя: <input type="text"
                                name="f_ob_dv"
                                value="<?= $ob_dv ?>"
                                placeholder="Введите объем двигателя">
    </div>
    <div>
        Тип двигателя: <input type="text"
                              name="f_tip_dv"
                              value="<?= $tip_dv ?>"
                              placeholder="Введите тип двигателя">
    </div>
    <div>
        Коробка: <input type="text"
                        name="f_kpp"
                        value="<?= $kpp ?>"
                        placeholder="Введите какая коробка">
    </div>
    <div>
        Сборка коробки: <input type="text"
                               name="f_sb_kpp"
                               value="<?= $sb_kpp ?>"
                               placeholder="Введите сборку коробки ">
    </div>
    <div>
        Марка коробки: <input type="text"
                            name="f_mark_kpp"
                            value="<?= $mark_kpp ?>"
                            placeholder="Введите марку коробки">
    </div>
    <div>
        Раздатка: <input type="text"
                           name="f_razd"
                           value="<?= $razd ?>"
                           placeholder="Введите марку раздатки">
    </div>
    <div>
        Сборка машины: <input type="text"
                          name="f_sbor_mash"
                          value="<?= $sbor_mash ?>"
                          placeholder="Введите сборку машины">
    </div>
    <div>
        Дополнительная информация: <input type="text"
                         name="f_dop_inf"
                         value="<?= $dop_inf ?>"
                         placeholder="Введите дополнительную информацию">
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