<?php require_once 'functions.php'; ?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
</head>
<body>


<h2>Добавить запчасть:</h2>

<form method="post" action="list.php">
    <p>Наименование запчасти:<br>
        <input type="text" name="nai_zap" value="<?php echo $_GET['nai_zap']; ?>" required /></p>

    <p>Характеристика запчасти:<br>
        <input type="text" name="xar_zap" value="<?php echo $_GET['xar_zap']; ?>" required /></p>

    <p>Фирма производителя запчасти: <br>
        <input type="text" name="firm_pr" value="<?php echo $_GET['firm_pr']; ?>" required /></p>

    <p>Марка машины: <br>
        <input type="text" name="mark_ma" value="<?php echo $_GET['mark_ma']; ?>" required /></p>

    <p>Объем двигателя машины: <br>
        <input type="text" name="ob_dv" value="<?php echo $_GET['ob_dv']; ?>" required /></p>

    <p>Год выпуска машины с: <br>
        <input type="text" name="god_v_s" value="<?php echo $_GET['god_v_s']; ?>" required /></p>

    <p>Год выпуска машины по: <br>
        <input type="text" name="god_v_po" value="<?php echo $_GET['god_v_po']; ?>" required /></p>

    <input type="submit" value="Добавить">
</form>

</body>
</html>

<?php

if (isset($_POST['nai_zap'])) {
    echo "Данные были успешно добавлены";
}
?>



