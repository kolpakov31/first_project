<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<?php require_once "functions.php"; ?>
<div>
    <a href="edit_most.php">Добавить</a> <a href="list_zapch.php">Вернуться к запчасти</a>
    <br>
    &nbsp;
</div>
<table class="main">
    <tr>
        <th>Айди</th>
        <th>Фирма производитель</th>
        <th>Место нахождения</th>
        <th>Марка моста</th>
        <th>Передаточное отношение</th>
        <th>Металл</th>
        <th>Характеристика моста</th>
        <th>Изменить</th>
    </tr>
    <?php foreach (get_most_list() as $most): ?>
        <tr>
            <td><?= $most["mt_id"] ?></td>
            <td><?= $most["firm_proiz"] ?></td>
            <td><?= $most["locat"] ?></td>
            <td><?= $most["mark_most"] ?></td>
            <td><?= $most["zyb"] ?></td>
            <td><?= $most["metall"] ?></td>
            <td><?= $most["har_most"] ?></td>
            <td>
                <a class="operation" href="delete_most.php?mt_id=<?= $most["mt_id"] ?>">Удалить мост</a>
                <a class="operation" href="edit_most.php?mt_id=<?= $most["mt_id"] ?>">Редактировать мост</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>