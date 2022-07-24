<?php

/* https://api.telegram.org/botXXXXXXXXXXXXXXXXXXXXXXX/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$token = "5592610113:AAH3aLVjpXji0wGXTkZnPowtGHS7PBBPnxg";
$chat_id = "-1001721813411";
$arr = array(
  'Город: ' => $name,
  'Телефон: '  => $phone
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
header('Location: thank-you');
} else {
echo "Error";
}
?>