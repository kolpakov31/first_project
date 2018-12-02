<html>
<head>
</head>
<body>
<?php require_once "functions.php";
$surname = '';
$name = '';
$patr = '';
$age = '';
$id = $_REQUEST["id"];
if ($id) {
    $ludi = get_client_by_id($id);
    $surname = $ludi["surname"];
    $name = $ludi["name"];
    $patr = $ludi["patr"];
    $age = $ludi["age"];
}
?>

<form method="post" action="save.php">
      <?php if ($id):?>
      <input type="hidden"name="f_id"value="<?=$id?>">
      <?php endif ?>

    <div>
    Фамилия: <input  type="text"
                     name="f_surname"
                     value="<?=$surname?>"
                     placeholder="Введите сюда фамилию">
    <div/>
    <div>
    Имя: <input type="text"
                name="f_name"
                value="<?=$name?>"
                placeholder="Введите имя">
    <div/>
    <div>
    Отчество: <input type="text"
                     name="f_patr"
                     value="<?=$patr?>"
                     placeholder="Введите сюда отчество">
    </div>
    <div>
    Возраст: <input type="text"
                    name="f_age"
                    value="<?=$age?>"
                    placeholder="Введите Ваш возраст">
    </div>
    <div>
        Из Алматы: <input type ="checkbox" name ="f_form">
    </div>
    <div>
        Лицо: <input type="file" name="f_face">
    </div>
    <input type="submit" value="Сохранить">
 </form>
</body>
</html>