<?php
$mail_to = array("motoslam@mail.ru","anisimova@motorlandgroup.ru","selezneva@motorlandgroup.ru","anastasiya.selezneva@mitsubishi-motorland.ru","ekaterina.anisimova@mitsubisi-motorland.ru","m.gorbatkova@motorlandgroup.ru");
$subject = "Новый заказ на сайте http://ml-car.ru/";
$message = file_get_contents('email.html');
$message = str_replace("%d%", date('d'), $message);
$message = str_replace("%m%", date('m'), $message);
$message = str_replace("%h%", date('h'), $message);
$message = str_replace("%i%", date('i'), $message);
$message = str_replace("%ip%", $_SERVER['REMOTE_ADDR'], $message);
$message = str_replace("%name%", $_POST['name'], $message);
$message = str_replace("%phone%", $_POST['phone'], $message);
$mailheaders = "Content-type:text/html;charset=utf-8\r\n";
$mailheaders .= "From: Моторленд Автосервис <noreply@ml-car.ru>\r\n";
$mailheaders .= "Reply-To: noreply@ml-car.ru\r\n";
foreach($mail_to as $mail_address){
    mail($mail_address, $subject, $message, $mailheaders);
}

?>
