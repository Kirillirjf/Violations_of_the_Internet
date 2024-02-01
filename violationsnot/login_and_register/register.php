<?php
session_start();

if (isset($_POST['Names'])) {
    $Names = $_POST['Names'];
}
if (isset($_POST['Surname'])) {
    $Surname = $_POST['Surname'];
}
if (isset($_POST['Patronymic'])) {
    $Patronymic = $_POST['Patronymic'];
}
if (isset($_POST['Tele'])) {
    $Tele = $_POST['Tele'];
}
if (isset($_POST['Logins'])) {
    $Logins = $_POST['Logins'];
}
if (isset($_POST['Pass'])) {
    $Pass = $_POST['Pass'];
}

if (empty($Logins) or empty($Pass)) {
    exit("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
}

include("dbconnect.php");

$result2 = $mysqli->query("INSERT INTO users (Names, Surname, Patronymic, Tele, Logins, Pass) VALUES('$Names', '$Surname','$Patronymic', '$Tele',  '$Logins','$Pass')");
if ($result2 === TRUE) {
    echo "Вы успешно зарегистрированы! Теперь вы можете зайти на сайт под своим именем. <a href='../reports_page/report-panel.php'>Главная страница</a>";
} else {
    echo "Ошибка! Вы не зарегистрированы.";
}
?>

