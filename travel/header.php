<!DOCTYPE html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width = device-width,
initial-scale = 1, shrink-to-ft = no">
  <!-- Стиль bootstrap -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Собственный стиль -->
  <link rel="stylesheet" href="css/style.css">
  <script src = " https://unpkg.com/react@16/umd/react.development.js"></script>
<script src = " https://unpkg.com/react-dom@16/umd/react-dom.development.js"></script>
<script src = " https://unpkg.com/babel-standalone@6.15.0/babel.min.js"></script>
  <title>Сайт туристической компании</title>
</head>

<body class="body-top">
  <div id="content">
    <header class="header">
      <div class="row">
          <img class="logo" src="img/logo.jpg">
        <div class="name">
          <h1>Путешествуйте с нами!</h1>
        </div>
      </div>
      <?php
      // Проверяем, пусты ли переменные логина и id пользователя
      if (empty($_SESSION['Logins']) or empty($_SESSION['id'])) {
        ?>
        <div class="roww">
          <div class="col">
            <div id="auth_block">
              <div id="link_register" class = "please_work">
                <a href="registr.php">Регистрация</a>
            </div>
            <div id="link_auth"  class = "please_work">
              <a href="avtor.php">Авторизация</a>
            </div>
          </div>
        </div>
    </div>
    <?php
      } else {
        ?>
    <div class="row">
      <div class="col">
        <div id="exit_block">
          <div id="link_remark"  class = "please_work">
            <a href="remarks.php">Вы можете оставить отзыв</a>
          </div>
          <div id="link_exit"  class = "please_work">
            <a href="exit.php">Выход</a>
          </div>
        </div>
      </div>
    </div>
    <?php
      }
      ?>
  </header>