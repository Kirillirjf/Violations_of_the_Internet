<?php
session_start();
if (isset($_POST['tema'])) {
$tema = $_POST['tema'];

}
if (isset($_POST['text'])) {
$text = $_POST['text'];

}
if (empty($tema) or empty($text)) {
    exit("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    } 
    else {
    include("dbconnect.php");

    if (!empty($_SESSION['id'])) {
    $kod = $_SESSION['id'];
    $result = $mysqli->query("INSERT INTO remarks (ID_user, tema, text) VALUES('$kod','$tema','$text')");
    if ($result == 'TRUE') {

    echo "Ваше сообщение сохранено! Перейти к просмотру сообщений.
    <a href = 'contacts.php'>0 нас</a>";
    } else {
    echo "Ошибка! Сообщение не сохранено";
    }
}
    }