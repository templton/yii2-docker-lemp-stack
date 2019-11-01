<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
ini_set('error_reporting', E_ALL);


$link = mysqli_connect('mysql', 'root', 'root', 'yii_db');
if (!$link) {
    die('Ошибка соединения: ' . mysqli_error());
}
echo 'Успешно соединились';
mysqli_close($link);
?>