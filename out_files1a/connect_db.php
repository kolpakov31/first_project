<?php

$link_to_db = mysqli_connect('localhost', 'root', '111', 'my_first_blog');

if (mysqli_connect_errno()) {
    echo 'Ошибка в подключении к базе данных (' . mysqli_connect_errno() . '): ' . mysqli_connect_error();
    exit();
}
