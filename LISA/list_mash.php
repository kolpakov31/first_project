<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<?php require_once "functions.php"; ?>
<div>
    <a href="edit_mash.php">Добавить</a> <a href="list_zapch.php">Вернуться к запчасти</a>
    <br>
    &nbsp;
</div>
<table class="main">
    <tr>
        <th>Айди</th>
        <th>Фирма произв</th>
        <th>Марка машины</th>
        <th>Год выпуска</th>
        <th>Объем двиг</th>
        <th>Тип двиг</th>
        <th>Какая кпп</th>
        <th>Сборка кпп</th>
        <th>Марка кпп</th>
        <th>Раздатка</th>
        <th>Сборка машины</th>
        <th>Доп инф</th>
        <th>Исправить</th>
    </tr>
    <?php foreach (get_mash_list() as $mash): ?>
        <tr>
            <td><?= $mash["m_id"] ?></td>
            <td><?= $mash["firm_proiz"] ?></td>
            <td><?= $mash["mark_mash"] ?></td>
            <td><?= $mash["god_v"] ?></td>
            <td><?= $mash["ob_dv"] ?></td>
            <td><?= $mash["tip_dv"] ?></td>
            <td><?= $mash["kpp"] ?></td>
            <td><?= $mash["sb_kpp"] ?></td>
            <td><?= $mash["mark_kpp"] ?></td>
            <td><?= $mash["razd"] ?></td>
            <td><?= $mash["sbor_mash"] ?></td>
            <td><?= $mash["dop_inf"] ?></td>
            <td>
                <a class="operation" href="delete_mash.php?m_id=<?= $mash["m_id"] ?>">Удалить машину</a>
                <a class="operation" href="edit_mash.php?m_id=<?= $mash["m_id"] ?>">Редактировать машину</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>