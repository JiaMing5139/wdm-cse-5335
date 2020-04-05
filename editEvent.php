<?php
session_start();
?>

<html>
<body>
<?php 
include 'dbConn.php';  
    // $sql=$conn->prepare("Update events SET EventType=?,EventDescription=?,Date=? where EventID=? and UserID=?");
    // $sql->bind_param('sssii',$_POST["eventtype"],$_POST["eventdescription"],$_POST["date"],$_POST["eventid"],$_POST["userid"]);
    $query="Update `events` SET EventType='".$_POST["eventtype"]."',EventDescription=\"".$_POST["eventdescription"]."\",Date=\"".$_POST["date"]."\" where EventID=".$_POST["eventid"]." and UserID=".$_SESSION["id"];
    $conn->query($query);
    header("location:event.php");    
?>
</body>
</html>