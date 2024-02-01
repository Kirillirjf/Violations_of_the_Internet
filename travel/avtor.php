
<html>
<head>
  <link rel="stylesheet" href=" bootstrap-4.4.1-dist/css,
bootstrap.min.css">
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="./style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width = device-width, initial-scale = 1, shrink-to-ft = no">

  <link rel="stylesheet" href="css/bootstrap.min.css">

</head>
<body>

<header class="header">
  <div id="logo">
    <img class="logo" src="img/logo.jpg" alt="">
  </div>
  <div id="name">
    <h1>Путешествуй с нами</h1>
  </div>
  </header>
  <div id="menu">
    <!-- Начало flex-меню -->
    <nav class="nav nav-pills flex-column flex-sm-row">
      <!-- Ссылка на главную страницу -->
      <a class="flex-sm-fill text-sm-center nav-link" href="./index.html">Главная</a>
      <!-- Ссылка на страницу с информацией о турах -->
      <a class="flex-sm-fill text-sm-center nav-link" href="./tour.html">Наши
        туры</a>
      <!-- Ссылка на страницу с контактами -->
      <a class="flex-sm-fill text-sm-center nav-link" href="contacts.php">0 нас</a>
    </nav>
  </div>
<body>
<h2>Авторизация</h2>
<form action = "test_user.php" method = "post">
<p>
<label>Ваш логин:<br></label>
<input name = "Logins" type = "text" size = "15" maxlength = "15">
</p>
<p>
<label>Ваш пароль: <br></label>
<input name = "Pass" type = "password" size = "15" maxlength = "15">
</p>
<p>
<input type = "submit" name = "submit" value = "Войти">
</p>
</form>
</body>
<footer class="footer">
      <div class="row">
        <div class="col">
          Это сайт, предназначенный для обучения
        </div>
      </div>
    </footer>
</html>