<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<?php require_once "functions.php"; ?>
<a href="list.php">&lt;Назад</a>
<br>
<a href="phone_edit.php?client_id=<?= $_REQUEST["client_id"] ?>">Добавить</a>
<table class="main">
    <tr>
        <th>Номер</th>
        <th>Коментарий</th>
        <th>Кнопка</th>
    </tr>
    <?php foreach (get_phone_list($_REQUEST["client_id"]) as $phone):?>
        <tr>
            <td><?= $phone["nomber"] ?></td>
            <td><?= $phone["comment"] ?></td>
            <td>
                <a class="operation"
                   href="delete_phone.php?client_id=<?=$_REQUEST["client_id"]?>&nomber=<?=$phone["nomber"]?>">Удалить</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>