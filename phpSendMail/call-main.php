<?php

require('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$call_name = $_POST['call-name'];
$call_tel = $_POST['call-tel'];
$call_email = $_POST['call-email'];

$mail->SMTPDebug = 0;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.yandex.ru';                // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'robot@allceptik.ru'; // Ваш логин от почты с которой будут отправляться письма     robot@allceptik.ru
$mail->Password = 'robot235AAmdnJHDs'; // Ваш пароль от почты с которой будут отправляться письма     robot235AAmdnJHDs
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom('robot@allceptik.ru'); // от кого будет уходить письмо?
$mail->addAddress('sendforms0@gmail.com');     // Кому будет уходить письмо
//$mail->addAddress('ay232@ya.ru');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Заявка с сайта Lifelink';
$mail->Body = $body = 'Заявка с сайта Lifelink:<br>' . $call_name . ' хочет заказать звонок.<br> Его телефон: ' . $call_tel . '<br>Его email: ' . $call_email ;
$mail->AltBody = '';

if (!$mail->send()) {
    echo '<h3>Произошла ошибка</h3>';
    echo $body . '<br>';


} else {
    echo "<script>alert('Заявка успешно отправлена!')</script>";
}

?>