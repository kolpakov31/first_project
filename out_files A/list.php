<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<?php require_once "functions.php"; ?>
<div>
    <a href="edit.php">Добавить</a>
    <br>
    &nbsp;
</div>
<table class="main">
    <tr>
        <th>ФИО</th>
        <th>Возраст</th>

        <th>Исправить</th>
    </tr>
    <?php foreach (get_clients() as $ludi):?>
    <tr>
        <td><?= $ludi["surname"].' '.$ludi["name"].' '.$ludi["patr"]?></td>
        <td><?= $ludi["age"]?></td>
        <td>
            <a class="operation" href="edit.php?id=<?=$ludi["id"]?>">edit</a>
            <a class="operation" href="delete.php?id=<?=$ludi["id"]?>">delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
</body>
<html/>
