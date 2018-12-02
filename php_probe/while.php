<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>

    <meta charset="UTF-8">
    <title> Заголовок1 </title>
    <link rel="stylesheet" type="text/css" href="public1/style.css">

</head>
<body>

<div class="navbar navbar-inverse navbar-static-top">
    <div class="container">
        <button type=" button " class="navbar-toggle"
                data-toggle="collapse"
                data-target="#responsive-menu">
            <span class="sr-only">Открыть навигацию</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">Мой первый блог</a>
    </div>
    <div class="collapse navbar-collapse" id="responsive-menu">
        <ul class="nav navbar-nav"></ul>
    </div>
</div>

<?php

/**
 * Created by IntelliJ IDEA.
 * User: alex
 * Date: 19.09.17
 * Time: 11:07
 * бывает 4 вида цикла
 **/
// Гетерогеный
//Ассоциативный массив ..одномерный  используються ключи
$categories = array(
    array('category_id' => 1,
        'category_title' => 'Завтрак',
        'category_slug' => 'Самокат',
    ),
    array('category_id' => 2,
        'category_title' => 'Обед',
        'category_slug' => 'Мотоцикл',
    ),
    array('category_id' => 3,
        'category_title' => 'Ужин',
        'category_slug' => 'Автомобиль',
    )
);

?>

<?php if (count($categories) === 0): ?>

    <li><a href="#"><i class="t "> РПППППП </i> Добавить категорию </a></li>;

<?php else: ?>

    <div class="ty">

        <?php

        // $i = 7;
        // while ($i <= 5) {
        //   echo '<a href="#"> Пункт' . $i . '</a>';
        // $i++;
        // }
        //do
        //{
        //echo '<a href="#"> Пункт' . $i . '</a>';
        // }
        //while($i<=6);
        //  $i++;
        //фор позвол созд действие которое выполняеться один раз

        //for($i =1 ;$i<=6 ; $i++ )
        //{
        //   echo '<a href="#"> Пункт' . $i . '</a>';
        //}

        //for ($i = 1; $i <= count($categories); $i++)
        // {
        //     echo '<a href="#"> Пункт ' . $i . '</a>';
        //}
        // for ($i = 1, $count = count($categories); $i <= $count ; $i++)
        // {
        //      echo '<a href="#"> Пункт '. $i .'</a>';
        //  }

        // foreach($categories as $category)
        //   {
        // echo '<a href="/category/'.$category["category_slug"].'">'.$category["category_title"].'</a>';
        // }

        //foreach($categories as $category)
        // {
        //     echo '<a href="/category.php?id='.$category["category_id"].'">'.$category["category_title"].'</a>';
        // }

        //$i = 0;
        //$count = count($categories);
        //while ($i < $count) {

        // echo '<a href="category.php?id= ' . $categories[$i]['category_id'] . '">
        //   ' . $categories[$i]['category_title'] . '</a>';
        //  $i++;
        // }


        foreach ($categories as $category):?>

            <a href="/category.php? id= <?= $category["category_id"] ?>"> <?= $category["category_title"] ?></a>

        <?php endforeach ?>

    </div>

    <li><a href="#"> <?= $menu_items ?> </a></li>

<?php endif; ?>

<div class="container">
    <div class="alert alert-danger">
        <pre>
         <?= $categories[1][category_title] ?>
        </pre>
    </div>
</div>
<?php
//set_exception_handler().
//$dbh = new PDO('mysql:host=localhost;dbname=test', $user ='root', $pass = '111');
?>
</body>
</html>