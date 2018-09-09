<?php
$phone = htmlspecialchars($_POST['phone']);
$hidden = htmlspecialchars($_POST['hidden']);

if ( $hidden === '1z2s3w' ) {

  $header = "Заявка с сайта ";

  if(isset($_POST['order'])){
    $order = htmlspecialchars($_POST['order']);
    if ($order == "1") $header .= "Разовая проверка";
    if ($order == "2") $header .= "Комплексный подбор";
    if ($order == "3") $header .= "Эксперт на день";
  }

  $message = $header;
  $message .= "<br>";
  $message .= "Номер телефона " . $phone . "<br>";

  if(isset($_POST['name'])){
    $name = htmlspecialchars($_POST['name']);
    $message .= "Имя клиента: " . $name . "<br>";
  }

  if(isset($_POST['link'])) {
    $link = htmlspecialchars($_POST['link']);
    $message .= "Бесплатная проверка автомобиля по ссылке " . $link . "<br>";
  }

  $to = 'office@spaceweb.studio';

  
  mail($to, $phone, $message, "From: landing@carfind.su\r\n" . 'Content-type: text/html; charset="utf-8"');

}