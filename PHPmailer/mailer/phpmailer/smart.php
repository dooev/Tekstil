<?php 

// $name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$phone2 = $_POST['user_phone2'];
$phonePopup = $_POST['user_phonePopup'];
// принимаем значения utm меток
$utm_source = $_POST['utm_source'];
$utm_medium = $_POST['utm_medium'];
$utm_campaign = $_POST['utm_campaign'];
$utm_content = $_POST['utm_content'];

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mail.ru';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'dooevdima@mail.ru';                 // Наш логин
$mail->Password = 'qwertyuillop';                           // Наш пароль от ящика
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to
 
$mail->setFrom('dooevdima@mail.ru', 'Dima Dooev');   // От кого письмо 
$mail->addAddress('q@loketa.com');     // Add a recipient
$mail->addAddress('dooevdima@mail.ru');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
// $mail->addAttachment($_FILES['upload'][tmp_name], $_FILES['upload'][name]);    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Заявка с Добрый Картон';
$mail->Body    = 'Пользователь оставил свои данные <br> 
	Имя: неизвестно <br>
	Телефон: ' . $phone .''. $phone2 .''. $phonePopup .'
	<br><br> Источник: ' . $utm_source . '
	<br> Тип трафика: ' . $utm_medium . '
	<br> Название кампании: ' . $utm_campaign . '
	<br> Идентификатор объявления: ' . $utm_content .'';

$mail->AltBody = 'Это альтернативный текст';

if(!$mail->send()) {
    echo "ERROR";
} else {
    header('location: ../../thanksyou.html');
}

?>