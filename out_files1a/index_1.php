<?php
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
            <a href="category.php?id=<?=$category["id"]?>"> <?=$category["title"]?></a>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="page-header">
                <h1> Все записи: </h1>
            </div>
            <?php $posts = get_posts(); ?>
            <?php foreach ($posts as $post): ?>
        </div>
        <div class="row">
            <div class="col-md-3">
                <a href="#" class="thumbnail">
                    <img src="<?=$post['image']?>" alt="">
                </a>
            </div>
            <div class="col-md-9">
                <h4><a href="post.php?post_id=<?=$post['id']?>"> <?=$post['title']?> </a>hhh</h4>
                <p> <?=mb_substr($post['content'],0,128,'UTF-8').'...'?> </p>
                <p><a class="btn btn-info btn-sm" href="/post.php?post_id=<?=$post['id']?>"> Читать полностью </a></p>
                <br/>
                <ul class="list-inline">
                    <li><i class="glyphicon glyphicon-list"></i> <a href="#">Название категории</li>
                    <li><i class="glyphicon glyphicon-calendar"></i> 30 Октября 2017г 10:00</li>
                </ul>
            </div>
            <hr>
            <?php endforeach; ?>
        </div>
        <div class="col-md-3">
            sidebar
        </div>
    </div>
</div>
</body>
</html>
