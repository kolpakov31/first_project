<!DOCTYPE html><html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php require_once "functions.php"; ?>
<div>
    <a href="list1.php">Посмотреть данные за 2000г</a>
    <br>
    &nbsp;
    <a href="input_str.php">Ввести новую строку</a>
    <br>
    &nbsp;
</div>
<table class="main">
    <tr>
        <th>Январь</th>
        <th>Февраль</th>
        <th>Март</th>
        <th>Апрель</th>
        <th>Май</th>
        <th>Июнь</th>
        <th>Июль</th>
        <th>Август</th>
        <th>Сентябрь</th>
        <th>Октябрь</th>
        <th>Ноябрь</th>
        <th>Декабрь</th>
    </tr>
    <?php foreach (get_god_list() as $god): ?>
        <tr>
            <td><?= $god["jan"] ?></td>
            <td><?= $god["fev"] ?></td>
            <td><?= $god["mar"] ?></td>
            <td><?= $god["apr"] ?></td>
            <td><?= $god["mai"] ?></td>
            <td><?= $god["iun"] ?></td>
            <td><?= $god["iul"] ?></td>
            <td><?= $god["avg"] ?></td>
            <td><?= $god["sen"] ?></td>
            <td><?= $god["okt"] ?></td>
            <td><?= $god["noi"] ?></td>
            <td><?= $god["dek"] ?></td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>
