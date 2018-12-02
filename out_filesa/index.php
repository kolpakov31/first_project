<?php
//ini_set('error_reporting', E_ALL);
//ini_set('display_errors,1');
//ini_set('display_startup_errors1');
require_once 'app/include/database.php';
require_once 'app/include/functions.php';

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8"/>

    <title> Заголовок </title>

    <link rel="stylesheet" type="text/css" href="public/style.css">

    <?php
    //ini_set('error_reporting', E_ALL);
    // ini_set('display_errors,1');
    //ini_set('display_startup_errors1');
    //error_reporting(E_ALL ^E_NOTICE);
    //error_reporting(E_ALL);
    // $var = include 'app/footer.php';
    // var_dump($var);
    // include 'app/footer.php';
    //require 'app/header.php';
    //require "app/header.html";
    ?>

    <script type="text/javascript">

        function buttonClick1(button) {
            location.href = "app/sred.html";
        }


        function buttonClick2(button) {
            location.href = "app/header.html";
        }


        function buttonClick3(button) {
            location.href = "app/footer.html";
        }


        function buttonClick4(button) {
            location.href = "app/header.php";
        }

        function buttonClick5(button) {
            location.href = "app/footer.php";
        }


        function buttonClick6(button) {
            location.href = "app/sred.php";
        }

    </script>

</head>

<body>

<div>

    YYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYY
    <?php
    include 'app/asd.php';
    ?>
</div>


<div>
    ZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZ
    <?php
    include 'app/asd.php';
    ?>
</div>


<div class="k">

    <input type="button" name="b" value="Открыть сайт" onclick="buttonClick1(this)"/>
    <input type="button" name="b" value="чердак" onclick="buttonClick2(this)"/>
    <input type="button" name="b" value="Двигателя" onclick="buttonClick3(this)"/>
    <input type="button" name="b" value="Такое бывает" onclick="buttonClick4(this)"/>
    <input type="button" name="b" value="Основные виды электрогитар" onclick="buttonClick5(this)"/>
    <input type="button" name="b" value="Как все начиналось" onclick="buttonClick6(this)"/>


</div>




<?php
// Гетерогеный
//Ассоциативный массив ..одномерный  используються ключи

//$categories = array(
//    array('category_id' => 1,
//        'category_title' => 'Завтрак',
//        'category_slug' => 'Самокат',
//    ),
//    array('category_id' => 2,
//        'category_title' => 'Обед',
//        'category_slug' => 'Мотоцикл',
//    ),
//    array('category_id' => 3,
//        'category_title' => 'Ужин',
//        'category_slug' => 'Автомобиль',
//    )
//);

 $categories = get_categories($link);

?>

<?php if (count($categories) === 0): ?>

<?php else: ?>

    <div class="q">

        <?php foreach ($categories as $category): ?>

            <a href="/category.php? id= <?= $category["id"] ?>"> <?= $category["title"] ?></a>

        <?php endforeach ?>

    </div>

<?php endif; ?>

<div class="container">

    <div class="alert alert-danger">

        <pre>

         <?= $categories[2][title] ?>

        </pre>

    </div>

</div>

<div class="w">

    <img src="public/image4/ace-1807511__340.jpg" width="70%">

    <div class="block">

        <sub>
            Елы палы,палы ёлы.
        </sub>

    </div>

</div>


</body>
`
</html>


