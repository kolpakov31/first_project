<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php probe</title>
</head>
<body>
Hello world
 <?php
 $a = 1;
 $b = 4;
 for ($i = 0; $i < 100; $i++) {
     ?>
        <div> i = <?= $i ?> </div>
    <?php
}
echo($a + $b);

 echo 'ура заработало';
?>

</body>
</html>