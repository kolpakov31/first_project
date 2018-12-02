<html>
<head>
</head>
<body>

<?php
require_once "u_functions.php";

$surname = '';
$name = '';
$age = '';
$id = $_REQUEST["id"];

if ($id) {//Если id есть
    $client = get_client_by_id($id);
    $surname = $client["surname"];
    $name = $client["name"];
    $age = $client["age"];
}

?>

<form method="post" action="save.php">

    <?php if ($id):?>
    <input type="hidden" name="f_id" value="<?=$id?>">
    <?php endif ?>

    <div>
        Фамилия: <input type="text"
                        name="f_surname"
                        value="<?=$surname?>"
                        placeholder="Введите сюда фамилию">
    </div>
    <div>
        Имя: <input type="text"
                    name="f_name"
                    value="<?=$name?>"
                    placeholder="Введите сюда имя">
    </div>
    <div>
        Возраст: <input type="text"
                    name="f_age"
                    value="<?=$age?>"
                    placeholder="Возраст">
    </div>
    <div>
        Из алматы: <input type="checkbox" name="f_from">
    </div>
    <div>
        Лицо: <input type="file" name="f_face">
    </div>

    <input type="submit" value="Сохранить">

</form>

</body>
</html>