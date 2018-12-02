<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<?php
require_once "functions.php";
$fonq = [];
?>
<a href="list_fonq.php?client_id=<?= $_REQUEST["ludiq_id"] ?>">&lt;Назад</a>
<form method="post" action="save_fonq.php">
    <input type="hidden" name="ludiq_id" value="<?= $_REQUEST["ludiq_id"] ?>">
    <div>
        <?php if ($_REQUEST["nom"]) : ?>
            Редактирование: <?= $_REQUEST["nom"] ?>
            <input type="hidden" name="nom" value="<?= $_REQUEST["nom"] ?>">
            <input type="hidden" name="edit" value="yes">
            <?php
            $fonq = load_fonq($_REQUEST["ludiq_id"], $_REQUEST["nom"])
            ?>
        <?php else: ?>
            Номер телефона: <input type="text" name="nom" placeholder="Номер телефона">
            <input type="hidden" name="edit" value="no">
        <?php endif; ?>
    </div>
    <div>
        Коментарий: <textarea name="com" placeholder="Коментарий"><?= $fonq["com"] ?></textarea>
    </div>
    <input type="submit" value="Сохранить">
</form>
</body>
</html>
