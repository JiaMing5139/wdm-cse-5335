<?php
// Start the session
session_start();
?>


<?php 

if(empty($_POST['username']) or empty($_POST['password']) or (!filter_var($_POST['username'], FILTER_VALIDATE_EMAIL) )){
  if(empty($_POST['username'])){ ?>
        <script>
                alert("PHP Validation:You didnt enter username.. Please fill username and password");
                setTimeout(function(){window.location ='<?php echo $_SERVER["HTTP_REFERER"] ?>';}, 5);
        </script>    
  <?php
}    

  if(empty($_POST['password'])){ ?>
    <script>
      alert("PHP Validation:You didnt enter password.. Please fill username and password");
      setTimeout(function(){window.location ='<?php echo $_SERVER["HTTP_REFERER"] ?>';}, 5);
    </script> 
  <?php
  }

  if (!filter_var($_POST['username'], FILTER_VALIDATE_EMAIL))
  { ?>
    <script>
      alert("PHP Validation:You entered wrong format for username..");
      setTimeout(function(){window.location ='<?php echo $_SERVER["HTTP_REFERER"] ?>';}, 5);
    </script>
  <?php
  }
}



include 'dbConn.php';
$sql="Select UserID, Name from user where Email='".$_POST['username']."' and Password='".$_POST['password']."'";
echo $sql;
if ($result=mysqli_query($conn,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  if($rowcount>0){
    $row = mysqli_fetch_row($result);
    //echo $row[0].$row[1];
    $_SESSION["id"]=$row[0];
    $_SESSION["name"]=$row[1];
    echo '<script>
    sessionStorage.setItem("name",0)
    console.log(sessionStorage)
    window.location.href = "project.php"
    </script>';

//    header("location:project.php");

  }

  else{
?>

<script>    
    alert("PHP Validation: Invalid Email/Password....");
    <?php echo  $_SERVER["HTTP_REFERER"] ?>;
    setTimeout(function(){window.location ='<?php echo $_SERVER["HTTP_REFERER"] ?>';}, 100);  
    //header("location:".$_SERVER["HTTP_REFERER"]);
</script>

<?php  
}

  }
?>
