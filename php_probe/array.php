<link rel="stylesheet" type="text/css" href="public1/style.css">
<?php
/**
 * Created by IntelliJ IDEA.
 * User: alex
 * Date: 18.09.17
 * Time: 18:25
 *  PHP гетерогенный,по индексу и по ключу
 */
$categories = array(
    array(
        'category_id1' => 1,
        'category_id2' => 'Кнопка1',
        'category_id3' => 'title1',
        'category_id4' => 25,
        'category_id5' => 'песня1',
    ),

    array(
        'category_id1' => 2,
        'category_id2' => 'Кнопка2',
        'category_id3' => 'title2',
        'category_id4' => 26,
        'category_id5' => 'песня2',
    ),

    array(
        'category_id1' => 3,
        'category_id2' => 'Кнопка3',
        'category_id3' => 'title3',
        'category_id4' => 27,
        'category_id5' => 'песня3',
    ),
);

if ($menu_items === 0):

    ?>

    <li><a href='#'>hhhhh</a></li>

<?php else: ?>

    <li><a href="#"> <?= $menu_items ?> </a></li>

<?php endif; ?>



    <div class="alert alert-danger">

        <p>

            <?= $categories[1] ['category_id2'] ?>

        </p>

    </div>











