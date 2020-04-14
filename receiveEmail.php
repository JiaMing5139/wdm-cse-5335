<?php
include "contacts.php";
echo $subject;
require_once('phpmailer/PHPMailerAutoload.php');
        try
        {
            $mail=new PHPMailer(true);
            $mail->IsSMTP(); 
            $mail->SMTPDebug = 1;
            $mail->SMTPAuth=true;
            $mail->SMTPSecure='ssl';
            $mail->Host='smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Port=465;
            $mail->isHTML();
            $mail->Username='centro.mijares@gmail.com';
            $mail->Password='abcd1234@';
            $mail->Subject=$subject;
            $mail->SetFrom("ashutoshmehta65@gmail.com", $name);
            $mail->Body=$msg;
            $mail->AddAddress('centro.mijares@gmail.com');
           if($mail->send()){
    ?>
            <script>
                alert("Thanks for contacting us.. We will reach out to you as soon as possible!!");
            </script>
            <?php
           }
        }
        catch(Exception $e){
            echo $e->getMessage();
        }
?>