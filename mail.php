<?php 

require_once('phpmailer/PHPMailerAutoload.php');
try{
	  $mail=new PHPMailer(true);
	  $mail->SMTPAuth=true;
	  $mail->SMTPSecure='ssl';
	  $mail->Host='smtp.gmail.com';
	  $mail->SMTPAuth = true;
	  $mail->Port=465;
	  $mail->isHTML();
	  $mail->Username='centro.mijares@gmail.com';
	  $mail->Password='abcd1234@';
	  $mail->Subject="jsdnkf";
	  $mail->SetFrom("centro.mijares@gmail.com");
	  $mail->Body="kdfkdff";
	  $mail->AddAddress("kenilpatel786@gmail.com");
      $mail->send();
}catch(Exception $x)
{
    echo $x->getMessage();
}

?>