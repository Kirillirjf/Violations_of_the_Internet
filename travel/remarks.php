
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
      <a class="flex-sm-fill text-sm-center nav-link" href="./index.php">Главная</a>
      <!-- Ссылка на страницу с информацией о турах -->
      <a class="flex-sm-fill text-sm-center nav-link" href="./tour.php">Наши
        туры</a>
      <!-- Ссылка на страницу с контактами -->
      <a class="flex-sm-fill text-sm-center nav-link" href="contacts.php">0 нас</a>
    </nav>
  </div>
<h2>Оставьте свой отзыв</h2>
<form action = "save_remarks.php" method = "post">
<!-- В текстовую область (name = "tema") пользователь вводит
тему своего отзыва -->
<p>
<label>Тема сообщения: <br></label>
<textarea name = "tema" cols = "38" rows = "3"></textarea>
</p>
<!-- В текстовую область (паme = "text") пользователь вводит
своего отзыва -->
<p>
<label>Введите текст сообщения:<br></label>
<textarea name = "text" cols = "38" rows = "6"></textarea>
</p>
<!-- Кнопка отправляет данные на страницу-обработчик save
remarks.php -->
<p>
<input type = "submit" name = "submit" value = "Coxpa-
нить">
</p>
</form>
<footer class="footer">
      <div class="row">
        <div class="col">
          Это сайт, предназначенный для обучения
        </div>
      </div>
    </footer>