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
  $phone = "+7 905 593-44-33";

  // Используется для телефона, чтобы оставить только цифры в номере
  function return_numbers_from_string( $string ){
    $result = preg_replace("/[^+0-9]/", '', $string);
    echo $result;
  }
  ?>
  <section class="first-screen">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-8 col-md-3">
          <img class="logo" src="img/logo.svg" alt="CarFind подбор автомобилей">
        </div>
        <div class="col-4 d-md-none text-right">
          <a href="tel:<?=return_numbers_from_string($phone);?>" target="_blank" rel="nofollow">
            <img src="img/phone.svg" alt="Телефон">
          </a>
        </div>
        <div class="d-none d-md-block col-md-2 col-lg-3 col-xl-4"></div>
        <div class="d-none d-md-block col-md-3">
          <button type="button" class="btn text-uppercase btn-white-inverse" data-toggle="modal" data-target="#callBack" data-title="Заказать звонок">Заказать звонок</button>
        </div>
        <div class="d-none d-md-block col-md-4 col-lg-3 col-xl-2 text-right">
          <a class="phone" href="tel:<?=return_numbers_from_string($phone);?>"><?=$phone?></a>
          <br>
          <time>Работаем с 9:00 до 20:00</time>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-12 col-md-6">
          <h1 class="text-center text-sm-left">Подберем автомобиль<br>по вашим параметрам</h1>
          <p class="header-desc text-center text-sm-left">Профессионально и с гарантией</p>
          <p class="offer-free">Одна проверка бесплатно!</p>
          <p class="offer">Оставьте телефон, чтобы получить проверку</p>

          <form action="mail.php" method="POST" class="free-check-form form-send-disable call-back-form">
            <div class="row">
              <div class="col-12 col-md-5">
                <label class="sr-only" for="inlineFormInputPhone">Телефон</label>
                <input type="tel" class="form-control mr-sm-2" id="inlineFormInputPhone" name="phone" placeholder="Телефон" required="true">
              </div>
              <div class="col-12 col-md-5">
                <button type="submit" class="btn offer_free_button_submit" data-title="Заказать звонок">Получить бесплатную проверку</button>
              </div>
            </div>
<!--            <div class="row">-->
<!--              <div class="col-12">-->
<!--                <div class="form-check mb-2 ml-sm-2 mt-2">-->
<!--                  <input class="form-check-input" type="checkbox" id="inlineFormCheck" required="true">-->
<!--                  <label class="form-check-label-privacy" for="inlineFormCheck">Даю согласие на обработку персональных данных в соответствии с <a data-fancybox data-type="iframe" data-src="privacy.html" href="javascript:;" class="privacy-check-link">"Политикой конфиденциальности"</a></label>-->
<!--                </div>-->
<!--              </div>-->
<!--            </div>-->
            <input type="hidden" name="hidden" value="1z2s3w">
          </form>

          <div class="form-result">
            <h2>Спасибо!</h2>
            <p class="desc">Мы свяжемся с Вами в ближайшее время</p>
          </div>

        </div>
        <div class="d-none d-md-block col-md-6">
          <div class="first-screen-car">
            <img src="img/car.png" alt="Подбор автомобилей" width="100%">
          </div>
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
              <div class="row no-gutters">
                <div class="col-12">
                  <div class="header-wrapper time d-flex justify-content-center align-items-center">
                    <h2 class="text-center text-sm-left">Экономим <br class="d-block d-sm-none">Ваше время</h2>
                  </div>
                </div>
                <div class="col-12">
                  <ul class="advantages-list">
                    <li>Подбираем автомобильно <b>по Вашим параметрам</b>;</li>
                    <li>Предоставляем подробный <b>онлайн отчет</b>;</li>
                    <li>Проведем обоснованный торг и при необходимости <b>забронируем для Вас автомобиль</b></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="d-none d-md-block col-md-5">
            <img class="card-img-top" src="img/find.jpg" alt="Card image cap">
          </div>
        </div>
      </div>
      <div class="advantages-item">
        <div class="row">
          <div class="col-12 col-md-7">
            <div class="advantages-desc">
              <div class="row no-gutters">
                <div class="col-12">
                  <div class="header-wrapper legal d-flex justify-content-center align-items-center">
                    <h2 class="text-center text-sm-left">Никаких юридических рисков</h2>
                  </div>
                </div>
                <div class="col-12">
                  <p class="advantages-text">Гарантия юридической чистоты. Проверка по закрытым базам на <b>ограничение регистрационных действий, угон, залог, дтп, оригинальность пробега, соответствие документам</b> и пр.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="d-none d-md-block col-md-5">
            <img class="card-img-top" src="img/security.jpg" alt="Card image cap">
          </div>
        </div>
      </div>
      <div class="advantages-item">
        <div class="row">
          <div class="col-12 col-md-7">
            <div class="advantages-desc">
              <div class="row no-gutters">
                <div class="col-12">
                  <div class="header-wrapper check d-flex justify-content-center align-items-center">
                    <h2 class="text-center text-sm-left">Ваша полная осведомленность о техническом состоянии автомобиля</h2>
                  </div>
                </div>
                <div class="col-12">
                  <p class="advantages-text">Полная техническая диагностика. Проверка специализированным оборудованием более, чем по 100 параметрам с гарантией на основные узлы и агрегаты.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="d-none d-md-block col-md-5">
            <img class="card-img-top" src="img/checkup.jpg" alt="Card image cap">
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

  <section id="products">
    <div class="container">
      <div class="row text-center">
        <div class="col-12 col-md-4">
          <div class="card small-card d-block text-center">
            <div class="card-body">
              <img class="my-4" src="img/one_checkup.svg" alt="Card image cap" width="100">
              <h5 class="card-title">Разовая выездная<br>проверка экспертом</h5>
              <p class="card-text">Входит полная проверка юридической чистоты и техническая диагностика выбранного Вами автомобиля</p>
              <p class="price">2 500 руб.</p>
              <button type="button" class="btn text-uppercase" data-toggle="modal" data-target="#callBack" data-title="Вызвать эксперта" data-order="1">Вызвать эксперта</button>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4 bg-navy-mobile">
          <div class="card big-cart d-block text-center">
            <img class="d-none d-sm-inline-block my-4" src="img/total.svg" alt="Card image cap" width="100">
            <img class="d-inline-block d-sm-none my-4" src="img/white_hand.svg" alt="Card image cap" width="100">
            <div class="card-body">
              <h5 class="card-title">Комплексный подбор авто<br>по Вашим параметрам<br>с гарантией</h5>
              <p class="card-text">Будем искать, пока не найдем<br>"тот самый автомобиль".</p>
              <p class="price">от 15 000 руб.</p>
              <p class="card-text">Независимо от количества<br>предложенных вариантов</p>
              <button type="button" class="btn text-uppercase" data-toggle="modal" data-target="#callBack" data-title="Найти автомобиль" data-order="2">Найти автомобиль</button>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <div class="card small-card d-block text-center">
            <img class="d-inline-block my-4" src="img/one_day.svg" alt="Card image cap" width="95">
            <div class="card-body">
              <h5 class="card-title">Эксперт на день</h5>
              <p class="card-text">Передвижение на автомобиле эксперта. Возможно личное присутствие клиента при проверках и торге.</p>
              <p class="price">6 500 руб.</p>
              <button type="button" class="btn text-uppercase" data-toggle="modal" data-target="#callBack" data-title="Вызвать эксперта" data-order="3">Вызвать эксперта</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- section id="reviews">
    <div class="container">
      <h3 class="text-center">Отзывы реальных клиентов</h3>
      <div class="review-item">
        <div class="row">
          <div class="col-12 col-md-7">
            <img src="https://via.placeholder.com/640x360" alt="">
          </div>
          <div class="col-12 col-md-5">
            <h4><b>Kia Optima</b> 2.4 л, 2016 г.</h4>
            <p class="run">Пробег: <b>28 000 км</b></p>
            <p class="duration">Подбор за 5 дней</p>
            <p class="start">Начальная стоимость: <b>1 320 000 руб.</b></p>
            <p class="total">Стоимость приобретения: 1 305 000 руб.</p>
            <p class="torg">Стоимость обоснованного торга: <b>15 000 руб.</b></p>
            <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. Duis vulputate commodo lectus, ac blandit elit tincidunt id. Sed rhoncus, tortor sed eleifend tristique, tortor mauris molestie elit, et lacinia ipsum quam nec dui. </p>
          </div>
        </div>
      </div>
      <div class="review-item">
        <div class="row">
          <div class="col-12 col-md-7">
            <img src="https://via.placeholder.com/640x360" alt="">
          </div>
          <div class="col-12 col-md-5">
            <h4><b>Kia Optima</b> 2.4 л, 2016 г.</h4>
            <p class="run">Пробег: <b>28 000 км</b></p>
            <p class="duration">Подбор за 5 дней</p>
            <p class="start">Начальная стоимость: <b>1 320 000 руб.</b></p>
            <p class="total">Стоимость приобретения: 1 305 000 руб.</p>
            <p class="torg">Стоимость обоснованного торга: <b>15 000 руб.</b></p>
            <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. Duis vulputate commodo lectus, ac blandit elit tincidunt id. Sed rhoncus, tortor sed eleifend tristique, tortor mauris molestie elit, et lacinia ipsum quam nec dui. </p>
          </div>
        </div>
      </div>
      <div class="review-item">
        <div class="row">
          <div class="col-12 col-md-7">
            <img src="https://via.placeholder.com/640x360" alt="">
          </div>
          <div class="col-12 col-md-5">
            <h4><b>Kia Optima</b> 2.4 л, 2016 г.</h4>
            <p class="run">Пробег: <b>28 000 км</b></p>
            <p class="duration">Подбор за 5 дней</p>
            <p class="start">Начальная стоимость: <b>1 320 000 руб.</b></p>
            <p class="total">Стоимость приобретения: 1 305 000 руб.</p>
            <p class="torg">Стоимость обоснованного торга: <b>15 000 руб.</b></p>
            <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. Duis vulputate commodo lectus, ac blandit elit tincidunt id. Sed rhoncus, tortor sed eleifend tristique, tortor mauris molestie elit, et lacinia ipsum quam nec dui. </p>
          </div>
        </div>
      </div>
    </div>
  </section -->

  <section id="free-check" class="bg-blue">
    <div class="container">
      <h4 class="text-center">Бесплатно проверим любой автомобиль по закрытым базам!</h4>
      <div class="row no-gutters">
        <div class="col-12">

          <form action="mail.php" method="POST" class="form-send-disable call-back-form">
            <div class="form-row">

              <div class="col-md-4 mb-3">
                <input type="text" class="form-control" id="validationCustom01" placeholder="Ссылка на Auto.ru или Avito" name="link" required="true">
              </div>

              <div class="col-md-2 mb-3">
                <input type="text" class="form-control" id="validationCustom02" placeholder="Имя" name="name" required="true">
              </div>

              <div class="col-md-2 mb-3">
                <input type="tel" class="form-control" id="validationCustom03" placeholder="Телефон" name="phone" required="true">
              </div>

              <div class="col-md-2 mb-3">
                <button type="submit" class="btn mb-2 offer_free_check_button_submit" data-title="Проверить автомобиль по ссылке">Получить бесплатную проверку</button>
              </div>

            </div><!-- form-row -->

            <!-- div class="row">
              <div class="col-12 text-center">
                <div class="form-check mb-2 ml-sm-2 mt-2">
                  <input class="form-check-input" type="checkbox" id="inlineFormCheckBottom" required="true">
                  <label class="form-check-label-privacy text-left" for="inlineFormCheckBottom">Даю согласие на обработку персональных данных в соответствии с <a href="privacy.html" class="privacy-check-link">"Политикой конфиденциальности"</a></label>
                </div>
              </div>
            </div -->
            <input type="hidden" name="hidden" value="1z2s3w">
          </form>

          <div class="form-result">
            <h2>Спасибо!</h2>
            <p class="desc">Мы свяжемся с Вами в ближайшее время</p>
          </div>

        </div>
      </div>
    </div>
  </section>

  <section id="address-map">
    <script src="//api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>

    <div id="map"></div>
    <div class="container container-for-map">
      <div class="row">
        <div class="col-12 col-md-5">
          <div class="contacts">
            <h4>Офис CarFind</h4>
            <address>Ленинградский проспект, д.8, стр.1</address>
            <time>Мы работаем с 9:00 до 20:00</time>
            <a class="phone" href="tel:<?=return_numbers_from_string($phone);?>"><?=$phone?></a> <br>
            <a href="mailto:info@carfind.ru" class="email" rel="nofollow" target="_blank">info@carfind.su</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="bg-blue">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-12 col-md-3">
          <ul class="social-icons text-center text-sm-left">
            <li><a class="vk" href="" target="_blank" rel="nofollow"></a></li>
            <li><a class="youtube" href="" target="_blank" rel="nofollow"></a></li>
            <li><a class="fb" href="" target="_blank" rel="nofollow"></a></li>
            <li><a class="instagram" href="" target="_blank" rel="nofollow"></a></li>
          </ul>
        </div>
        <div class="col-12 col-md-6 text-center">
          <img class="logo" src="img/logo.svg">
        </div>
        <div class="col-12 col-md-3 text-center text-sm-right">
          <a class="phone" rel="nofollow" href="tel:<?=return_numbers_from_string($phone);?>"><?=$phone?></a>
          <address>Ленинградский проспект, д.8, стр.1</address>
          <time>Мы работаем с 9:00 до 20:00</time>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <p class="text-center text-sm-left copyright">&copy; 2018 - ООО "Кар Фаинд"</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Modal -->
  <div class="modal fade" id="callBack" tabindex="-1" role="dialog" aria-labelledby="callBackTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
      <div class="modal-content">
        <form action="mail.php" method="POST" class="call-back-form">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <h5 class="modal-title text-center" id="callBackTitle">Заказать проверку автомобиля</h5>

            <div class="form-group">
              <label for="formGroupExampleInput">Ваше имя</label>
              <input type="text" class="form-control" id="modalFormInputName" name="name" placeholder="Иван Иванов" required="tru">
            </div>

            <div class="form-group">
              <label for="formGroupExampleInput2">Телефон</label>
              <input type="tel" class="form-control" id="modalFormInputPhone" name="phone" placeholder="+7 (123) 456-78-91" required="true">
            </div>

            <!-- div class="form-group">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck" required="true">
                <label class="form-check-label" for="gridCheck">
                  Принимаю <a href="privacy.html" class="privacy-check-link modal-check" target="_blank">политику конфиденциальности</a>
                </label>
              </div>
            </div -->

          </div>
          <div class="modal-footer">
            <button type="submit" class="btn">Отправить</button>
          </div>
          <input type="hidden" name="hidden" value="1z2s3w">
        </form>

        <!-- result -->
        <div class="form-result red">
          <h5 class="text-center">Спасибо!</h5>
          
          <p class="desc text-center">Мы свяжемся с Вами<br>в ближайшее время.</p>
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