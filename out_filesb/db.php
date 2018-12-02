<?php
/*Создание подключения к бд*/
$connect = mysqli_connect("localhost", "root", "111", "lesson");
/*Проверка подключения бд */
if (!$connect) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
/* Инициализация переменных для лимита постов */
$start_limit = 0;
$limit = 10;

/*Выполняем запрос для получения постов*/
$query = mysqli_query($connect, "SELECT * FROM posts ORDER BY id DESC LIMIT $start_limit,$limit");

/*Создаем пустой массив в который будем записывать посты */
$posts = array();

/*Проверяем если запрос не вернул false то то проходим в цикле по всем элементам и добавляем их в массив $posts */
if ($query) {
    while ($row = mysqli_fetch_assoc($query)) {
        $posts[] = $row;
    }
}

print_r($_POST);

if (isset($_POST['send'])) {
    /* Добавляем запись в БД  */
    mysqli_query(
        $connect,
        " INSERT INTO
            `posts`
            SET 
            `title`= '" . $_POST['title'] . "',
            `text`= '" . $_POST['text'] . "'
             
            "
    );
}

/*Закрываем соединение с базой данных*/
mysqli_close($connect);

?>

<html>

<head>
    <title> Lesson PHP/MYSQL </title>
</head>
<body>
<form action="" method="POST">

    <h3> Добавить тему </h3>
    <p><input type="text" name="title"/></p>
    <p><textarea name="text"> </textarea></p>
    <input type="submit" name="send" value="Добавить"/>

</form>

<?php foreach ($posts as $post): ?>

    <div>
        <h3> <?= $post['title']?></h3>
        <p> <?= $post['text']?></p>
        <span> <?= $post['inserted_at']?></span>
    </div>

<?php endforeach; ?>

</body>

</html>
