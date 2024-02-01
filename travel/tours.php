<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href=" bootstrap-4.4.1-dist/css,
bootstrap.min. css">
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width
= device-width,
initial-scale = 1, shrink-to-ft no">

  <link rel="stylesheet" href="css/bootstrap.min.css">

</head>

<body>
  <div id="content">
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
        <a class="flex-sm-fill text-sm-center nav-link" href="contacts.html">0 нас</a>
      </nav>
    </div>
    <main class="flex">
      <div class="row">
        <div class="col">
          Наши туры
        </div>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col">
            <div class="tour-1">
              <img src="img/crimea.jpg" class="tour img">
              <p>O прекрасная возможность отдохнуть всей семьей</p>
              <!-- Код компонента кнопки вызова модального окна
        bootstrap co страницы https://getbootstrap.com/docs/4.4/
        components/model/. Значение data-target задайте свое! -->
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                Рассчитать стоимость
              </button>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="tour-1">
              <img src="img/kavkaz.jpg" class="tour_img">
              <p>Море, солнце и горы!</p>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                Рассчитать стоимость
              </button>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="tour-1">
              <img src="img/altay.jpg" class="tour_img">
              <p> Незабываемые впечатления!</p>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                Рассчитать стоимость
              </button>
            </div>
          </div>
        </div>
      </div>
  </div>
  </main>








  <footer class="footer">
    <div class="row">
      <div class="col">
        Это сайт, предназначенный для обучения
      </div>
    </div>
  </footer>
  </div>
  </div>

  <body class="body-top">
    <!-- Modal -->
    <!-- Укажите id этого модульного окна таким же, как был параметр
      data-target в кнопке его вызова на предыдущем шаге -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle"
      aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">


            <!-- Начало описания модального окна bootstrap -->
            <div class="modal-body" style="max-width: 600px">
              <!-- Начало формы -->
              <form method="get" action="#" id="orderForm">
                <!-- Далее 6 блоках класса tour (для того, чтобы к ним были при-
  менены те же стили, что и на основной странице сайта) описываются
  поля формы для ввода данных. В том числе: поле для выбора страны
  (идентификатор, который будет использоваться для дальнейшей обра-
  ботки - inp1); поле для ввода даты (тun - date, идентификатор -
  inp2); поле для выбора количества участников тура (идентификатор
  inp3) и поле для ввода emaiL пользователя, идентификатор inp4 -->
                <div class="tour">
                  <label class="label" for="name">
                    Выберите тур:
                  </label>
                  <!-- id формы (orderForm) будеm uспользоваться в скрunme обра-
  ботки формы, рассматриваемом ниже -->
                  <select id="inp1">
                    <option value="Крым" selected>
                      Крым
                    </option>
                    <option value="Кавказ">
                      Кавказ
                    </option>
                    <option value="Алтай">

                      Алтай
                    </option>
                  </select>
                </div>
                <div class="tour">
                  <label class="label" for="data">
                    Выберите дату начала:
                  </label>
                  <input type="date" id="inp2">
                </div>
                <div class="tour">
                  <label class="label" for="number">
                    Выберите количество участников:
                  </label>
                  <select id="inp3">
                    <option value="1">1</option>
                    <option value="2" selected>2</option>
                    <option value="3">3</option>
                    <option value="3">4</option>
                  </select>
                </div>
                <div class="tour">
                  <label class="label" for="email">
                    Ваш E-mail:
                  </label>
                  <input type="email" id="inp4" class="input-xlarge" style="width: 350px;" required="required">
                </div>
                <!--ОБРАТИТЕ ВНИМАНИЕ! Для упрощения обработки, перенесите
кнопки управления Закрыть и Отправить из футера модального окна
6 форму. Футер модального окна при этом можно удалить -->
                <button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
                <button type="submit" class="btn btn-primary" id="submit">Отправить</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script>
      $('#orderForm').on('submit', function () {
        let tour = $("#inp1").val();
        let date = new Date($("#inp2").val());
        let month = date.getMonth();
        let kol = $("#inp3").val();
        kol = Number(kol);
        let email = $("#inp4").val();
        let stoim = 0;
        if (tour == 'Крым') {
          if ((month == 5) || (month == 6) || (month == 7) || (month == 8)) { stoim = kol * 500; }
          else { stoim = kol * 300; }
        }
        if (tour == 'Кавказ') {
          if ((month == 12) || (month == 1) || (month == 2) || (month == 5) || (month == 6) || (month == 7) || (month == 8)) { stoim = kol * 300; }
          else { stoim = kol * 250; }
        }
        if (tour == 'Алтай') {
          { stoim = kol * 1000; }
        }
        alert(`Примерная стоимость вашего тура на ${kol} человек составит ${stoim} у.e. Мы свяжемся с ВАМИ!!`);
      }
      );;
    </script>


  </body>

</html>