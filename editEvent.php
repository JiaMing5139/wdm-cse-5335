<?php
session_start();
?>

<html>
<body>
<?php 

if(isset($_POST['editbtn'])){
    Editbutton();
}

if(isset($_POST['deletebtn'])){
    Deletebutton();
}

function Editbutton(){
    include 'dbConn.php';  
    $query="Update `events` SET EventType='".$_POST["eventtype"]."',EventDescription=\"".$_POST["eventdescription"]."\",Date=\"".$_POST["date"]."\" where EventID=".$_POST["eventid"]." and UserID=".$_SESSION["id"];
    $conn->query($query);
    header("location:event.php");    
}

function Deletebutton(){
    include 'dbConn.php';
    $sql='Delete from events where EventID='.$_POST['eventid'];
    //echo $sql;
    $conn->query($sql);
    header("location:event.php");
}
?>
</body>
</html>