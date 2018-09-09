;(function($){
  $(function(){

    // Подгрузка заголовков в modal form
    $('[data-title]').click(function(){
      header = $(this).attr('data-title');
      if (header) $('#callBackTitle').html(header);

      order = $(this).attr('data-order');
    });

    // Отправка формы
    $('.call-back-form').submit(function(e){
      e.preventDefault();

      var m_method=$(this).attr('method');
      var m_action=$(this).attr('action');
      var m_data=$(this).serialize();
      m_data += '&order=' + order;
      $.ajax({
        type: m_method,
        url: m_action,
        data: m_data,
        success: function(result){
          $('.modal-title').css("visibility", "hidden");
          $('.call-back-form').css("display", "none");
          $('.form-result').css("display", "block");
          // yaCounter00000000.reachGoal('xxxxx');
          // console.log(result);
        }
      });
    });

  })
})(jQuery)


// Яндекс карты
ymaps.ready(init);
var carMap, 
carPlacemark;

function init(){ 
  carMap = new ymaps.Map ("map", {
    center: [55.921815, 37.512864],
    zoom: 13,
    controls: [ ]
  }); 

  carPlacemark = new ymaps.Placemark([55.921791, 37.512234], {
    hintContent: 'CarFind',
    balloonContent: 'г. Долгопрудный, Лихачевский пр-зд, д.8'
  });

  carMap.geoObjects.add(carPlacemark);
  carMap.behaviors.disable('scrollZoom');
  // carMap.controls.add( new ymaps.control.ZoomControl() );
  // myMap.options.set('scrollZoomSpeed', 0);
}