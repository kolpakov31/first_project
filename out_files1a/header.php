<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors',0);
ini_set('display_startup_errors', E_ALL);

require_once 'app/include/database.php';
require_once 'app/include/functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8"/>
    <title> Заголовок </title>
    <link rel="stylesheet" type="text/css" href="public/style.css">
</head>
<body>
<?php $categories = get_categories(); ?>
<?php if (count($categories) === 0): ?>
<?php else: ?>
    <div class="q">
        <?php foreach ($categories as $category): ?>
            <a href="category.php?id=<?= $category["id"] ?>"> <?= $category["title"] ?></a>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

</body>
</html>


