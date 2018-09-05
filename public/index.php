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