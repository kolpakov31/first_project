<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<?php require_once "functions.php"; ?>
<div>
    <a href="edit_zapch.php">Добавить</a>
    <br>
    &nbsp;
</div>
<table class="main">
    <tr>
        <th>айди</th>
        <th>Человек</th>
        <th>Мост</th>
        <th>Раздатка</th>
        <th>Машина</th>
        <th>Наим запч</th>
        <th>Характ запч</th>
        <th>Тех характ</th>
        <th>Индиф номер запч</th>
        <th>Кол-во</th>
        <th>Старая цена</th>
        <th>Новая цена</th>
        <th>Сост запч</th>
        <th>Исправить</th>
    </tr>

    <?php foreach (get_zapch_list() as $zapch): ?>

        <tr>
            <td>
                <?= $zapch["z_id"] ?>
            </td>
            <td>
                <?= $zapch["chelovec"]?>
            </td>
            <td>
                <?= $zapch["most"] ?>
            </td>
            <td>
                <?= $zapch["razd"] ?>
            </td>
            <td>
                <?= $zapch["mashina"] ?>
            </td>
            <td><?= $zapch["nasv_zap"] ?></td>
            <td><?= $zapch["har_zap"] ?></td>
            <td><?= $zapch["teh_har"] ?></td>
            <td><?= $zapch["ind_n_zap"] ?></td>
            <td><?= $zapch["coli"] ?></td>
            <td><?= $zapch["cena_star"] ?></td>
            <td><?= $zapch["cena_nov"] ?></td>
            <td><?= $zapch["sost"] ?></td>
            <td>
                <a class="operation" href="delete_zapch.php?z_id=<?= $zapch["z_id"] ?>">Удалить запчасть</a>
                <a class="operation" href="edit_zapch.php?z_id=<?= $zapch["z_id"] ?>">Редактировать запчасть</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>