<html>
<head>
</head>
<body>
<?php require_once "functions.php";
$tip = '';
$surname = '';
$nam = '';
$patr = '';
$city = '';
$dop = '';
$dat = '';
$id = $_REQUEST["id"];
if ($id) {
    $client = get_client_by_id($id);
    $tip = $client["tip"];
    $surname = $client["surname"];
    $nam = $client["nam"];
    $patr = $client["patr"];
    $city = $client["city"];
    $dop = $client["dop"];
    $dat = $client["dat"];
}
?>
<form method="post" action="save.php">
    <?php if ($id): ?>
        <input type="hidden" name="f_id" value="<?= $id ?>">
    <?php endif ?>
    <div>
        Тип: <input type="text"
                    name="f_tip"
                    value="<?= $tip ?>"
                    placeholder="Введите тип человека">
    </div>
    <div>
        Фамилия: <input type="text"
                        name="f_surname"
                        value="<?= $surname ?>"
                        placeholder="Введите сюда фамилию">
    </div>
    <div>
        Имя: <input type="text"
                    name="f_nam"
                    value="<?= $nam ?>"
                    placeholder="Введите имя">
    </div>
    <div>
        Отчество: <input type="text"
                         name="f_patr"
                         value="<?= $patr ?>"
                         placeholder="Введите сюда отчество">
    </div>
    <div>
        Город: <input type="text"
                      name="f_city"
                      value="<?= $city ?>"
                      placeholder="Введите с какого города">
    </div>
    <div>
        Дополнительно: <input type="text"
                              name="f_dop"
                              value="<?= $dop ?>"
                              placeholder="Введите дополнительную информацию">
    </div>
    <div>
        Дата рождения: <input type="text"
                              name="f_dat"
                              value="<?= $dat ?>"
                              placeholder="Введите дату рождения">
    </div>
    <div>
        Из Алматы: <input type="checkbox" name="f_form">
    </div>
    <div>
        Лицо: <input type="file" name="f_face">
    </div>
    <div>
        <input type="submit" value="Сохранить">
    </div>
</form>
</body>
</html>