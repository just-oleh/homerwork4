<?php

/* https://api.telegram.org/bot964607853:AAHi8jPADk0kvDHu0ujAcIFDz86GRiFdksU/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$second_name = $_POST['user_second_name'];
$phone = $_POST['user_phone'];
$token = "964607853:AAHi8jPADk0kvDHu0ujAcIFDz86GRiFdksU";
$chat_id = "-445383541";
$arr = array(
  'Ім"я користувача: ' => $name,
  'Прізвище користувача: ' => $second_name,
  'Телефон :' => $phone
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: thank-you.html');
} else {
  echo "Error";
}
?>