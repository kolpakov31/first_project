<html>
<head>
</head>
<body>
<?php require_once "functions.php";

$firm_proiz = '';
$mark_razd = '';
$opis_razd = '';
$r_id = $_REQUEST["r_id"];
if ($r_id) {
    $razd = get_razd_by_id($r_id);
    $firm_proiz = $razd["firm_proiz"];
    $mark_razd = $razd["mark_razd"];
    $opis_razd = $razd["opis_razd"];
}
?>
<form method="post" action="save_razd.php">
    <?php if ($r_id): ?>
        <input type="hidden" name="f_r_id" value="<?= $r_id ?>">
    <?php endif ?>
    <div>
        Фирма производитель: <input type="text"
                                    name="f_firm_proiz"
                                    value="<?= $firm_proiz ?>"
                                    placeholder="Введите фирму производителя">
    </div>
    <div>
        Марка раздатки : <input type="text"
                                  name="f_mark_razd"
                                  value="<?= $mark_razd?>"
                                  placeholder="Введите марку раздатки">
    </div>
    <div>
        Описание раздатки: <input type="text"
                            name="f_opis_razd"
                            value="<?= $opis_razd ?>"
                            placeholder="Введите описание раздатки">
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