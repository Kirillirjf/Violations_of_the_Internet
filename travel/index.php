<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href=" bootstrap-4.4.1-dist/css,
bootstrap.min.css">
  <link rel="stylesheet" href="./style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

</body>

</html>
<?php
// Запускаем сессию
session_start();
// Подключаем файлы для шапки и меню
include('header.php');
include('nav.php');
?>
<!-- Здесь будет описание содержимого главной страницы -->
<main class="flex">
  <div class="row">
    <div class="colses">
      Актуальные направления путешествий
    </div>
  </div>
  <div class="container-fluid">
    <div id="root">
    </div>
  </div>
  <div class="ros">
    <div class="cols">
      <div class="tour">

        <?php
        include("dbconnect.php");
        $label = 'id';
        $id = false;
        if (!empty($_GET[$label])) {
          $id = $_GET[$label];
        }
        $result = $mysqli->query("SELECT * FROM tours WHERE id =
'$id'");
        $result = mysqli_query($mysqli, "SELECT * FROM tours");
        $div = "<div class='row'>";
        $k = 1;
        while ($row = mysqli_fetch_assoc($result)) {
          $div .= '<div class="col">';
          $div .= '<div class="tor">';
          $id = $row['id'];
          $div .= '<img src= ' . $row['photo'] . '>';
          $div .= '<p><a href="tour.php?id=' . $id . '">' . $row['name'] . '</a></p>';

          $k++;
        }
        $div .= '</div>';
        echo $div;
        ?>

      </div>
    </div>
  </div>

</main>
<?php
//подключаем файл для подвала
include('footer.php');
?>