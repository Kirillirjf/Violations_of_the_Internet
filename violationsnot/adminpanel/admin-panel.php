<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css\style.css">
  <title>Админ панель</title>
</head>
<body>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" href="page.css">
    <link rel="stylesheet" href=" ../css/bootstrap-4.4.1-dist,
    ../css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width = device-width, initial-scale = 1, shrink-to-ft = no">

  <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
<header>
        <div class='h-header'>
          <div class='header-content'>
            <span class ='logotype'></span>
            <span class ='logo'> Нарушениям.Нет</span>
            <?php
      // Я НЕ ЗНАЮ ПОЧЕМУ, НО ПРИ ДОБАВЛЕНИЯ КОДА В CSS ОН НЕ РАБОТАЕТ
      if (empty($_SESSION['Logins']) or empty($_SESSION['id'])) {
        ?>
            <ul class='nav'>
              <li class ='SignUp'>
              <a class ='button' href="../components/index.php" target="_blank" rel="">
                  <button href="exit.php" class ='button'>Выход</button>          
                  </a>
                  </li>
            </ul>
            </div>
        </div>
        <?php
      }  ?>
    </header>
    <style>
        .main-text{
    margin-top: 70px;
}
        .one {
    margin-top: 80px;
}
        .h-header{
    background-color: #6B769C;
    margin: 0;
    padding: 0;
    height: 80px;
    position: relative;
    background-image: url(./img/logo.png);
    background-repeat: no-repeat;
    background-size: 43px 43px;
    background-position: center left  20px;
  }
  .header-content{
    position: relative;
    top: 29px;
    margin-right: 70px;
    margin-left: 70px;
    color: #fff;
  }
  header .logo{
    font-weight: 600;
    font-size: 20px;
  }
  header ul.nav{
    float: right;
    list-style: none;
  }
  
  header ul.nav li{
    display: inline;
    margin-left: 25px;
    cursor: pointer;
    font-size: 20px;
    font-style: normal;
    font-weight: 700;
    line-height: normal;
    letter-spacing: -0.96px;
    transition: opacity 500ms ease;
  }
  header ul.nav li:hover{
    opacity: 0.5;
    }
    header button.button{
        background: none;
          border: none;
          padding: 0;
        display: inline;
        margin-left: 25px;
        cursor: pointer;
        font-size: 20px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
        letter-spacing: -0.17px;
        font-family: 'Montserrat';
        transition: opacity 500ms ease;
        color: #fff;
      }
      header a.button{
        text-decoration: none;
      
      
      }
      header .presentation{
        margin: 50px;
        margin-bottom: -60px;
        background: url('./img/women.png') no-repeat;
        height: 700px;
        background-size: 785px 487px;
        margin-top: 90px;
        background-position: top right;
        position: relative;
      }
      header .presentation::after{
        content: 'Оплата штрафов';
        position: absolute;
        top: 80px;
        left: 130px;
        font-size: 35px;
        font-style: normal;
        font-weight: 400;
      }
      header .presentation::before{
        width: 546px;
        content: 'Подпишитесь на уведомления о новых штрафах успевайте их оплачивать со скидкой 50%';
        position: absolute;
        top: 184px;
        left: 130px;
        font-size: 23px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
      }








      .forms {
    background-color: #2f82d0; 
    border-radius: 25px;
margin-top: 70px;
margin-left: auto;
margin-right: auto;

}
.image_registers {
    width: 500px;
    height: 155px;

}
      footer{
  background-color: #888888;
  margin: 0;
  padding: 0;
  height: 80px;
  position: relative;
  top: 80px;

}
      .footer-content{
  position: relative;
  display: flex;
  top: 30px;
  justify-content: space-around;
  margin-right: 70px;
  margin-left: 70px;
  color: #fff;
  margin-bottom: auto;
}
footer ul.nav{
  margin: 0;
  padding: 0;
  position: relative;
}

footer ul.nav li{
  display: inline-flex;
  justify-content: space-between;
  margin-left: 25px;
  cursor: pointer;
  font-size: 17px;
  font-style: normal;
  font-weight: 700;
  line-height: normal;
  letter-spacing: -0.96px;
}
footer .logo{
  font-weight: 600;
  font-size: 20px;
}
.ones {
    width: 570px;
    height: 625px;
}
.main-title {
  font-size: 40px;
  margin-left: 30px;
  color: rgb(0, 0, 0);
}
.main-block-button {
    margin-bottom: 40px;
}
.delete {
    margin-top: 10px;
}
#state {
  background-color: #fff;
  color: #000000;
}
        </style>
  </header>
  <main class="main">
    <div class="container">
      <div class="main-text">
        <img src="img\text icon.svg" alt="icon" class="icon-title">
        <p class="main-title">Панель админестратора</p>
      </div>
      <div class="long-stick"></div>
      <table class="table">
        <tr>
          <th class="table-title"><b>Фамилия</b></th>
          <th class="table-title"><b>Имя</b></th>
          <th class="table-title"><b>Отчество</b></th>
          <th class="table-title"><b>Описание нарушения</b></th>
          <th class="table-title"><b>Номер автомобиля</b></th>
          <th class="table-title"><b>Статус заявления</b></th>
        </tr>
        <tr>
          <td class="table-text">Кирилл</td>
          <td class="table-text">Шилин</td>
          <td class="table-text">Романович</td>
          <td class="table-text">Попал в аварию</td>
          <td class="table-text">к-958-ек</td>
          <td class="table-text"> <label for="state"></label>
            <select name="state" id="state" >
            <option value="awaiting" selected>В ожидании<img src="img\loading.svg" alt=""></option>
            <option value="refusing">Отменено </option>
            <option value="accepting">Завершено</option>
          </select>
          <button class="delete">Удалить</button></td>
        </tr>
        <tr>
          <td class="table-text"></td>
          <td class="table-text"></td>
          <td class="table-text"></td>
          <td class="table-text"></td>
          <td class="table-text"></td>
          <td class="table-text"></td>
        </tr>
      </table>
    </div>
  </main>
  <script src="https://unpkg.com/react@18/umd/react.development.js" crossorigin></script>
  <script src="https://unpkg.com/react-dom@18/umd/react-dom.development.js" crossorigin></script>
  <script src="js/main.js" type="text/javascript"></script>
  <footer>
        <div class='footer-content'>
              <span class='logo'> Нарушениям.Нет</span>
              <ul class='nav'>
                <li>Политика конфиденциальности</li>
                <li>Наша почта: No@mail.ru</li>
                <li>Россия, Москва, 5768, ул. Вавилова, 58</li>
              </ul>
              </div>
      </footer>
</body>
</html>