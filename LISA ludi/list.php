
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<?php require_once "functions.php"; ?>
<div>
    <a href="edit.php">Добавить клиента</a>
    <br>
    &nbsp;
</div>
<table class="main">
    <tr>
        <th>Идентификатор человека</th>
        <th>Тип</th>
        <th>ФИО</th>
        <th>Город</th>
        <th>Дополнительно</th>
        <th>Дата рождения</th>
        <th>Телефоны</th>
        <th>Исправить</th>

    </tr>
    <?php foreach (get_ludiq_list() as $ludiq): ?>
        <tr>
            <td><?= $ludiq["id"] ?></td>
            <td><?= $ludiq["tip"] ?></td>
            <td><?= $ludiq["surname"] . '  ' . $ludiq["nam"] . '  ' . $ludiq["patr"] ?></td>
            <td><?= $ludiq["city"] ?></td>
            <td><?= $ludiq["dop"] ?></td>
            <td><?= $ludiq["dr"] ?></td>
            <td>
                <?php foreach (get_fonq_list($ludiq["id"]) as $fonq): ?>
                    <?= $fonq["nom"] ?><br>
                <?php endforeach; ?>
            </td>
            <td>
                <a class="operation" href="edit.php?id=<?= $ludiq["id"] ?>">Редактировать данные</a>
                <a class="operation" href="delete.php?id=<?= $ludiq["id"] ?>">Удалить</a>
                <a class="operation" href="list_fonq.php?ludiq_id=<?= $ludiq["id"] ?>">Редактировать телефоны</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>
