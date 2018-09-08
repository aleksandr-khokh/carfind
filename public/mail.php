<?php
$phone = htmlspecialchars($_POST['phone']);
$hidden = htmlspecialchars($_POST['hidden']);

if ( $hidden === '1z2s3w' ) {

  $to = 'office@spaceweb.studio';
  $from='call-back@carfind.loc';

  $message = "Заявка от Carfind";

  mail($to, $phone, $message, 'From:'.$from);

  echo "Спасибо за заявку!";

}