<?php 

//echo $_POST['username'].$_POST['password'];

include 'dbConn.php';
$fn=$_POST['Fname'];
$email= $_POST['Email'];
$pd=$_POST['password']; 
$confirmpass=$_POST['con-pass'];
$address=$_POST['address'];

$sql="Insert into `user` (Name, Email, Password, Address) values ('".$fn."','".$email."','".$pd."','".$address."')";
$sql1="Select * from user where Email='".$email."'";
echo $sql;
$result=mysqli_query($conn,$sql1);

$rowcount=mysqli_num_rows($result);
  if($rowcount>0){?>
  <script>
    alert("Email already exists..");  
    setTimeout(function(){window.location ='<?php echo $_SERVER["HTTP_REFERER"] ?>';}, 500);
  </script>
  <?php
  }
  else{
    if(mysqli_query($conn,$sql)){
      $sub="Registration Message";
      $message="Thank you for registering!! To add/modify project, events and video, please login!!";
    
  require_once('phpmailer/PHPMailerAutoload.php');
  try{
    $mail=new PHPMailer(true);
    $mail->IsSMTP(); 
    $mail->SMTPDebug = 2;
    $mail->SMTPAuth=true;
    $mail->SMTPSecure='ssl';
    $mail->Host='smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Port=465;
    $mail->isHTML();
    $mail->Username='centro.mijares@gmail.com';
    $mail->Password='abcd1234@';
    $mail->Subject=$sub;
    $mail->SetFrom("centro.mijares@gmail.com");
    $mail->Body=$message;
    $mail->AddAddress($email);
    $mail->send();
    
  }
  catch(Exception $e){
    echo $e->getMessage();
    }
    ?>
    <script>
        alert("User successfully registerd!!!");
        
        setTimeout(function(){window.location ='<?php echo $_SERVER["HTTP_REFERER"] ?>';}, 500);
    </script>
    <?php
    }  
  }
?>
<!--  -->
