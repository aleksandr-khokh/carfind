<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Подбор автомобиля по параметрам</title>
  <meta name="description" content="Автоэксперт подберет автомобиль по заданным параметрам с гарантией">
  <meta name="keywords" content="">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.4.0/jquery.fancybox.min.css" />
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <?php
    // Добавить здесь телефон, чтобы он обновился везде на странице
  $phone = "+7 (495) 123-45-67";

    // Используется для телефона, чтобы оставить только цифры в номере
  function return_numbers_from_string( $string ){
    $result = preg_replace("/[^+0-9]/", '', $string);
    echo $result;
  }
  ?>
  <section id="first-screen">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-8 col-xl-3">
          <img src="img/logo.svg" alt="CarFind подбор автомобилей" width="223" height="44">
        </div>
        <div class="col-4 d-sm-none">
          <a href="tel:"><img src="img/phone.svg" alt="Телефон"></a>
        </div>
        <div class="d-none d-md-block col-xl-4"></div>
        <div class="d-none d-md-block col-xl-3">
          <!-- Button trigger modal -->
          <button type="button" class="btn text-uppercase btn-white-inverse" data-toggle="modal" data-target="#headerCallBack">
            Заказать звонок
          </button>
        </div>
        <div class="d-none d-md-block col-xl-2 text-right">
          <a class="phone" href="tel:<?=return_numbers_from_string($phone);?>"><?=$phone?></a>
          <br>
          <time>Работаем с 9:00 до 20:00</time>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-7">
          <h1>Подберем автомобиль<br>по вашим параметрам</h1>
          <p class="header-desc">с гарантией 60 дней</p>
          <p class="offer-free">Одна проверка бесплатно!</p>
          <p class="offer">Оставьте телефон, чтобы получить проверку</p>

          <form action="mail.php" method="POST" class="free-check-form">
            <div class="row">
              <div class="col-12 col-md-5">
                <label class="sr-only" for="inlineFormInputName2">Имя</label>
                <input type="phone" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Jane Doe" required="true">
              </div>
              <div class="col-12 col-md-5">
                <button type="submit" class="btn mb-2">Получить бесплатную проверку</button>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <div class="form-check mb-2 ml-sm-2 mt-2">
                  <input class="form-check-input" type="checkbox" id="inlineFormCheck" required="true">
                  <label class="form-check-label-privacy" for="inlineFormCheck">Даю согласие на обработку персональных данных в соответствии с <a href="privacy.html" class="privacy-check-link">"Политикой конфиденциальности"</a></label>
                </div>
              </div>
            </div>
          </form>

        </div>
        <div class="d-none d-md-block col-md-5">
          <img src="img/" alt="">
        </div>
      </div>
    </div>
  </section>
  <section id="advantages">
    <div class="container">
      <div class="advantages-item">
        <div class="row">
          <div class="col-12 col-md-7">
            <div class="advantages-desc">
              <div class="row">
                <div class="col-12">
                  <h2>Экономим Ваше время</h2>
                </div>
                <div class="col-12">
                  <ul>
                    <li>Подбираем автомобильно по Вашим параметрам;</li>
                    <li>Предоставляем подробный онлайн отчет;</li>
                    <li>Можем оставить залог, чтобы закрепить за Вами автомобиль.</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="d-none d-md-block col-md-5">
            <img class="card-img-top" src="https://via.placeholder.com/431x261" alt="Card image cap">
          </div>
        </div>
      </div>
      <div class="advantages-item">
        <div class="row">
          <div class="col-12 col-md-7">
            <div class="advantages-desc">
              <div class="row">
                <div class="col-12">
                  <h2>Никаких юридических рисков</h2>
                </div>
                <div class="col-12">
                  <p>Гарантия юридической чистоты. Проверка по закрытым базам на ограничение регистрационных действий, угон, залог, дтп, оригинальность пробега, соответствие документам и пр.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="d-none d-md-block col-md-5">
            <img class="card-img-top" src="https://via.placeholder.com/431x261" alt="Card image cap">
          </div>
        </div>
      </div>
      <div class="advantages-item">
        <div class="row">
          <div class="col-12 col-md-7">
            <div class="advantages-desc">
              <div class="row">
                <div class="col-12">
                  <h2>Ваша полная осведомленность о техническом состоянии автомобиля</h2>
                </div>
                <div class="col-12">
                  <p>Полная техническая диагностика. Проверка сертифицированным оборудованием более, чем по 100 параметрам с гарантией 60 дней на двигатель и трансмиссию.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="d-none d-md-block col-md-5">
            <img class="card-img-top" src="https://via.placeholder.com/431x261" alt="Card image cap">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="products">
    <div class="container">
      <div class="row text-center">
        <div class="col-12 col-md-4">
          <div class="card">
            <img class="card-img-top" src="https://via.placeholder.com/286x159" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Разовая выездная<br>проверка экспертом</h5>
              <p class="card-text">Входит полная проверка юридической чистоты и техническая диагностика выбранного Вами автомобиля</p>
              <p class="price">2 000 руб.</p>
              <a href="#" class="btn btn-primary">Вызвать эксперта</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <div class="card">
            <img class="card-img-top" src="https://via.placeholder.com/286x159" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Комплексный подбор авто<br>по Вашим параметрам<br>с гарантией 60 дней</h5>
              <p class="card-text">Будем искать, пока не найдем<br>"тот самый автомобиль".</p>
              <p class="price">от 15 000 руб.</p>
              <p>Независимо от количества<br>предложенных вариантов</p>
              <a href="#" class="btn btn-primary">Найти автомобиль</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <div class="card">
            <img class="card-img-top" src="https://via.placeholder.com/286x159" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Эксперт на день</h5>
              <p class="card-text">Передвижение на автомобиле эксперта. Возможно личное присутствие клиента при проверках и торге.</p>
              <p class="price">5 000 руб.</p>
              <a href="#" class="btn btn-primary">Вызвать эксперта</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="blue-offer">
    <div class="conteiner">
      <div class="row">
        <div class="col-12">
          <p class="text-center">В 89% случаев наши услуги окупаются за счет обоснованного торга</p>
        </div>
      </div>
    </div>
  </section>

  <section id="reviews">
    <div class="container">
      <h3 class="text-center">Отзывы реальных клиентов</h3>
      <div class="row">
        <div class="col-12 col-md-7">
          <img src="https://via.placeholder.com/640x360" alt="">
        </div>
        <div class="col-12 col-md-5">
          <h4>Kia Optima 2.4 л, 2016 г.</h4>
          <p class="run">Пробег: 28 000 км</p>
          <p class="duration">Подбор за 5 дней</p>
          <p class="start">Начальная стоимость: 1 320 000 руб.</p>
          <p class="total">Стоимость приобретения: 1 305 000 руб.</p>
          <p class="torg">Стоимость обоснованного торга: 15 000 руб.</p>
          <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. Duis vulputate commodo lectus, ac blandit elit tincidunt id. Sed rhoncus, tortor sed eleifend tristique, tortor mauris molestie elit, et lacinia ipsum quam nec dui. </p>
        </div>
      </div>
      <!-- .row>.col-12.col-md-7>img^.col-12.col-md-5>h4+p.run+p.duration+p.start+p.total+p.torg+p.desc -->
    </div>
  </section>
  <section id="free-check" class="bg-blue">
    <div class="container">
      <h4 class="text-center">Бесплатно проверим любой автомобиль по закрытым базам!</h4>
      <div class="row">
        <form action="mail.php" method="POST">
          
        </form>
      </div>
    </div>
  </section>

  <section id="map">
    <div class="contacts">
      <h4>Офис CarFind</h4>
      <address>Ленинградский проспект, д.8, стр.1</address>
      <time>Мы работаем с 9:00 до 20:00</time>
      <a class="phone" href="tel:<?=return_numbers_from_string($phone);?>"><?=$phone?></a>
      <a href="mailto:info@carfind.ru" class="email" rel="nofollow" target="_blank">info@carfind.ru</a>
    </div>
  </section>

  <footer class="bg-blue">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-12 col-md-3">
          
        </div>
        <div class="col-12 col-md-6 text-center">
          <img src="img/logo.svg">
        </div>
        <div class="col-12 col-md-3">
          <a class="phone" href="tel:<?=return_numbers_from_string($phone);?>"><?=$phone?></a>
          <address>Ленинградский проспект, д.8, стр.1</address>
          <time>Мы работаем с 9:00 до 20:00</time>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <p>&copy; 2018 - ООО "Кар Фаинд"</p>
        </div>
      </div>
    </div>
  </footer>
  <!-- Modal -->
  <div class="modal fade" id="headerCallBack" tabindex="-1" role="dialog" aria-labelledby="headerCallBackTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="headerCallBackTitle">Обратный звонок</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary">Отправить</button>
        </div>
      </div>
    </div>
  </div>

  <script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.4.0/jquery.fancybox.min.js"></script>
  <script src="script.js"></script>
</body>
</html>