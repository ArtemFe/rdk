<?php
$mail = $_POST['mail'];

$mail = htmlspecialchars($mail);

$mail = urldecode($mail);

$mail = trim($mail);

mail("sofiyalyapina@gmail.com", "Заявка с сайта", "E-mail: ".$mail ,"From: example2@mail.ru \r\n");

if (mail("sofiyalyapina@gmail.com", "Заказ с сайта", "ФИО:".$fio.". E-mail: ".$email ,"From: example2@mail.ru \r\n"))
 {
    echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}

?>
