<?php 

// $name = $_POST['user_name'];
$phone_header = $_POST['user_phone_header'];
$phone_modal = $_POST['user_phone_offer'];


// $token = "677900643:AAG89Cm4z9FhofV1aq70PiNUQFIZ3MD-JxA";
// $chat_id = "";

// принимаем значения utm меток
$utm_source = $_POST['utm_source'];
$utm_medium = $_POST['utm_medium'];
$utm_campaign = $_POST['utm_campaign'];
$utm_content = $_POST['utm_content'];
$utm_term = $_POST['utm_term'];

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.yandex.ru';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'dooevdima@ya.ru';                 // Наш логин
$mail->Password = 'Qwertyuillop4685632';                           // Наш пароль от ящика
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to
 
$mail->setFrom('dooevdima@ya.ru', 'Kandy текстиль');   // От кого письмо 
// $mail->addAddress('forma-de@yandex.ru');     // Add a recipient
$mail->addAddress('dooevdima@ya.ru');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
// $mail->addAttachment($_FILES['upload'][tmp_name], $_FILES['upload'][name]);    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Заявка с сайта';
$mail->Body    = 'Пользователь оставил свои данные <br> 
	Телефон: ' . $phone_header .''. $phone_modal .''. $phone_more1 .''. $phone_more2 .''. $phone_more3 .''. $phone_more4 .'';
	// Имя: неизвестно <br>
	// <br><br> Источник: ' . $utm_source . '
	// <br> Тип трафика: ' . $utm_medium . '
	// <br> Название кампании: ' . $utm_campaign . '
	// <br> Идентификатор объявления: ' . $utm_content .'
	// <br> Ключевое слово: ' . $utm_term .'';

$mail->AltBody = 'Это альтернативный текст';

if(!$mail->send()) {
    echo "ERROR";
} else {
    header('location: ../../thanksyou.html');
}

?>