<?php
session_start();
?>

<html>
<body>
<?php 
include 'dbConn.php';
 
//$eid=$_POST['ineventid'];
$uid=$_SESSION['id'];
$et= $_POST['ineventtype'];
$ed=$_POST['ineventdescription']; 
$date=$_POST['indate'];

$query="Insert into `events` (UserID, EventType, EventDescription, Date) values ('".$uid."','".$et."','".$ed."' ,'".$date."')";
if($conn->query($query))
{   
    header("location:event.php");
}
else{
    $message="Error: " . $query . "<br>" . $conn->error;
    echo "<script type='text/javascript'>alert('$message');</script>";  
?>
<script>
    setTimeout(function(){window.location ='<?php echo $_SERVER["HTTP_REFERER"] ?>';}, 500);
</script> 
<?php 
}
?>
</body>
</html>