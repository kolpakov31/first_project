<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<?php
require_once "functions.php";
$phone = [];
?>
<a href="phone_list.php?client_id=<?=$_REQUEST["id"]?>">&lt;Назад</a>

   <form method="post" action="save_phone.php">

       <input type="hidden" name="client_id" value="<?= $_REQUEST["client_id"] ?>">
    <div>
        <?php if ($_REQUEST["nomber"]) : ?>
            Редактирование: <?= $_REQUEST["nomber"] ?>
            <input type="hidden" name="nomber" value="<?= $_REQUEST["nomber"] ?>">
            <input type="hidden" name="edit" value="yes">
            <?php
            $phone = load_phone_list($_REQUEST["client_id"], $_REQUEST["nomber"])
            ?>
        <?php else: ?>
            Номер телефона: <input type="text" name="nomber" placeholder="Номер телефона">
            <input type="hidden" name="edit" value="no">
        <?php endif; ?>
    </div>
    <div>
        Коментарий: <textarea name="comment" placeholder="Коментарий"><?=$phone["comment"]?></textarea>
    </div>
    <input type="submit" value="Сохранить">
</form>

