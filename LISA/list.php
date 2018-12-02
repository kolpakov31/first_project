<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<?php require_once "functions.php"; ?>
<div>
    <a href="edit.php">Добавить клиента</a> <a href="list_zapch.php">Вернуться к запчасти</a>
    <br>
    &nbsp;
</div>
<table class="main">
    <tr>
        <th>Ид</th>
        <th>Фото</th>
        <th>Тип</th>
        <th>ФИО</th>
        <th>Город</th>
        <th>Дополнительно</th>
        <th>Дата рождения</th>
        <th>Телефоны</th>
        <th>Комент</th>
        <th>Исправить</th>
    </tr>
    <?php foreach (get_client_list() as $client): ?>
    <tr>
        <td><?= $client["id"] ?></td>
        <td>
            <?php foreach (get_foto_list($client["id"]) as $foto): ?>

                <img src="<?= $foto["imag"] ?>" alt="">

            <?php endforeach; ?>
        </td>
        <td><?= $client["tip"] ?></td>
        <td><?= $client["surname"] . '  ' . $client["nam"] . '  ' . $client["patr"] ?></td>
        <td><?= $client["city"] ?></td>
        <td><?= $client["dop"] ?></td>
        <td><?= $client["dat"] ?></td>
        <td>
            <?php foreach (get_phone_list($client["id"]) as $phone): ?>
                <?= $phone["nomber"] ?><br>
            <?php endforeach; ?>
        </td>
        <td>
            <?php foreach (get_phone_list($client["id"]) as $phone): ?>
                <?= $phone["comment"] ?> <br>
            <?php endforeach; ?>
        </td>
        <td>
            <a class="operation" href="edit.php?id=<?= $client["id"] ?>">Редактировать данные</a>
            <a class="operation" href="delete.php?id=<?= $client["id"] ?>">Удалить</a>
            <a class="operation" href="phone_list.php?client_id=<?= $client["id"]?>">Редактировать телефоны</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>