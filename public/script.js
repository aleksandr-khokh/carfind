;(function($){
  $(function(){

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
    hintContent: 'ГК Электропомпа',
    balloonContent: 'г. Долгопрудный, Лихачевский пр-зд, д.8'
  });

  carMap.geoObjects.add(carPlacemark);
  carMap.behaviors.disable('scrollZoom');
  // carMap.controls.add( new ymaps.control.ZoomControl() );
  // myMap.options.set('scrollZoomSpeed', 0);
}