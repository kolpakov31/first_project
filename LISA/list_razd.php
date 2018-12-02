<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<?php require_once "functions.php"; ?>
<div>
    <a href="edit_razd.php">Добавить</a> <a href="list_zapch.php">Вернуться к запчасти</a>
    <br>
    &nbsp;
</div>
<table class="main">
    <tr>
        <th>Айди</th>
        <th>Фирма производитель</th>
        <th>Марка раздатки</th>
        <th>Описание раздатки</th>
        <th>Изменить</th>
    </tr>
    <?php foreach (get_razd_list() as $razd): ?>
        <tr>
            <td><?= $razd["r_id"] ?></td>
            <td><?= $razd["firm_proiz"] ?></td>
            <td><?= $razd["mark_razd"] ?></td>
            <td><?= $razd["opis_razd"] ?></td>
            <td>
                <a class="operation" href="delete_razd.php?r_id=<?= $razd["r_id"] ?>">Удалить раздатку</a>
                <a class="operation" href="edit_razd.php?r_id=<?= $razd["r_id"] ?>">Редактировать раздатку</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>