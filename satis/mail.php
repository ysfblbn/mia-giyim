<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/src/Exception.php';
require 'src/src/PHPMailer.php';
require 'src/src/SMTP.php';

$eposta    =   $_POST["eposta"];



$mail = new PHPMailer(true);
try {
 //Server settings
 $mail->CharSet = 'UTF-8';
 $mail->SMTPDebug = 0; // debug on - off
 $mail->isSMTP(); 
 $mail->Host = 'mail.domain.com'; // SMTP sunucusu örnek : mail.alanadi.com
 $mail->SMTPAuth = true; // SMTP Doğrulama
 $mail->Username = 'site@domain.com'; // Mail kullanıcı adı
 $mail->Password = 'şifreniz'; // Mail şifresi
 $mail->SMTPSecure = 'ssl'; // Şifreleme
 $mail->Port = 000; // SMTP Port
$mail->SMTPOptions = array(
 'ssl' => array(
 'verify_peer' => false,
 'verify_peer_name' => false,
 'allow_self_signed' => true
 )
);

 //Alıcılar
 $mail->setfrom('site@domain.com', 'E- Bülten Kayıt Olan Kulanıcı');
 $mail->addAddress('info@domain.com');
 $mail->addReplyTo('info@domain.com');
 
 //İçerik
 $mail->isHTML(true);
 $mail->Subject = $_POST['mail'];
 $mail->Body = "
        E-Mail : ".$eposta."<br>
        

 ";
 

 $mail->send();
 if($mail){
    header("Location: anasayfa");
 }
} catch (Exception $e) {
 echo 'Mesajınız İletilemedi. Hata: ', $mail->ErrorInfo;
}

?>