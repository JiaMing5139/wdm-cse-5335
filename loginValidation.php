<?php
// Start the session
session_start();
?>


<?php 

//echo $_POST['username'].$_POST['password'];

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
    header("location:project.php");
  }
  else{
?>
<script>    
    alert("PHP Validation: Invalid Email/Password....");
    <?php echo  $_SERVER["HTTP_REFERER"] ?>;
    setTimeout(function(){window.location ='<?php echo $_SERVER["HTTP_REFERER"] ?>';}, 500);  
    //header("location:".$_SERVER["HTTP_REFERER"]);
</script>
<?php  
}

  }
?>
