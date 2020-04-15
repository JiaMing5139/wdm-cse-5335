<?php 

//echo $_POST['username'].$_POST['password'];

include 'dbConn.php';
ob_start();
session_start();
$fn=$_POST['Fname'];
$email= $_POST['Email'];
$pd=$_POST['password']; 
$confirmpass=$_POST['con-pass'];
$address=$_POST['address'];

if(empty($fn) or empty($_POST['Email']) or (!filter_var($_POST['Email'], FILTER_VALIDATE_EMAIL)) or empty($pd) or empty($confirmpass))
{

  if($pd!=$confirmpass){?>
    <script>
      alert("PHP Validation: Please enter  same password and confirm passowrd!!");
      setTimeout(function(){window.location ='<?php echo $_SERVER["HTTP_REFERER"] ?>';}, 5);
  </script>
  <?php
  } 

  if(!empty($POST['Email']) and  !filter_var($_POST['Email'], FILTER_VALIDATE_EMAIL)){ ?>
  <script>
      alert("PHP Validation: Please enter  correct email format!!");
      setTimeout(function(){window.location ='<?php echo $_SERVER["HTTP_REFERER"] ?>';}, 5);
  </script>  
  <?php
  }
  else{ ?>
    <script>
      alert("PHP Validation: Please enter all required fields!!");
      setTimeout(function(){window.location ='<?php echo $_SERVER["HTTP_REFERER"] ?>';}, 5);
    </script>
  <?php
  }

}




$sql="Insert into `user` (Name, Email, Password, Address) values ('".$fn."','".$email."','".$pd."','".$address."')";
$sql1="Select * from user where Email='".$email."'";
echo $sql;
$result=mysqli_query($conn,$sql1);

$rowcount=mysqli_num_rows($result);
  if($rowcount>0){
    header("Location:".$_SERVER['HTTP_REFERER']);
    ?>
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
      
    mail($email,$sub,$message);
    header("Location:".$_SERVER['HTTP_REFERER']);
    ?>
     
    <?php
    }  
  }
?>

