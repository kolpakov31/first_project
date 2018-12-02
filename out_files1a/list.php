<html>
<head>
    <link rel="stylesheet" type="text/css" href="my_styles.css">
</head>
<body>

<?php
require_once "u_functions.php";
?>

<div>
    <a href="edit.php">Добавить</a>
    <br>
    &nbsp;
</div>

<table class="main">
    <tr>
        <th>ФИО</th>
        <th>Возраст</th>
        <th></th>
    </tr>

    <?php foreach (get_clients() as $client): ?>
        <tr>
            <td><?= $client["surname"].' '.$client["name"]?></td>
            <td><?= $client["age"]?></td>
            <td>
                <a class="operation" href="edit.php?id=<?= $client["id"]?>">edit</a>
                <a class="operation" href="delete.php?id=<?= $client["id"]?>">delete</a>
            </td>
        </tr>
    <?php endforeach; ?>

</table>

<?php //foreach (get_clients() as $client): ?>
<!---->
<!--    --><?php
//      echo $client["surname"];
//      echo ' '.$client["id"];
//    ?>
<!---->
<?php //endforeach; ?>

</body>
</html>