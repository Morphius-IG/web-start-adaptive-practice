<?php


$name = $_POST['username'];
$phone = $_POST['phone'];

$name = htmlspecialchars($name);
$phone = htmlspecialchars($phone);

$name = urldecode($name);
$phone = urldecode($phone);

$name = trim($name);
$phone = trim($phone);
git status

if (mail("justlikeme11@mail.ru", "Заявка с сайта", "Имя:".$name.". Телефон: ".$phone ,"From: justlikeme11@mail.ru \r\n"))
 {
    echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}