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
$conn->query($query);
echo $query;   
//header("location:event.php");

?>
</body>
</html>