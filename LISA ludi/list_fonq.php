    <html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<?php require_once "functions.php"; ?>
<a href="list.php">&lt; Назад</a>
<br>
<a href="fonq_edit.php?ludiq_id=<?=$_REQUEST["ludiq_id"]?>">Добавить</a>
<table class="main">
    <tr>
        <th>Номер</th>
        <th>Коментарий</th>
        <th>Кнопка</th>
    </tr>
    <?php foreach (get_fonq_list($_REQUEST["ludiq_id"]) as $fonq): ?>
        <tr>
            <td><?= $fonq["nom"] ?></td>
            <td><?= $fonq["com"] ?></td>
            <td>
                <a class="operation"
                   href="fonq_edit.php?ludiq_id=<?=$_REQUEST["ludiq_id"]?>&nom=<?=$fonq["nom"]?>">
                    Редактировать
                </a>
                <a class="operation"
                   href="fonq_delete.php?ludiq_id=<?=$_REQUEST["ludiq_id"]?>&nom=<?=$fonq["nom"]?>">
                    Удалить
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>
