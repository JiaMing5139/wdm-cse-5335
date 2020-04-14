<?php
session_start();
?>

<html>
<body>
<?php 
ob_start();
if(isset($_POST['editbtn'])){
    Editbutton();
}

if(isset($_POST['deletebtn'])){
    Deletebutton();
}

function Editbutton(){
    include 'dbConn.php';
    $target_dir="proyect_1/";
    $target_file=$target_dir.basename($_FILES["eventimgfile"]["name"]);
    echo $target_file;
    //echo $target_file;
    //$filename=basename($_FILES["imgfile"]["name"]); 
    $sql="Select EventUrl from events where EventID=".$_POST['eventid'];
    echo $sql;
    $result=$conn->query($sql);
    while($row = $result->fetch_assoc()) { 
        if ($target_file=='proyect_1/'){
            $query="Update `events` SET EventType='".$_POST["eventtype"]."',EventDescription=\"".$_POST["eventdescription"]."\",Date=\"".$_POST["date"]."\" where EventID=".$_POST["eventid"]." and UserID=".$_SESSION["id"];
            if($conn->query($query)){
                //header("location:event.php");
            }
            else{
                $message="Error: " . $query . "<br>" . $conn->error;
                echo "<script type='text/javascript'>alert('$message');</script>"; 
            }
        }else{
            if(move_uploaded_file($_FILES["eventimgfile"]["tmp_name"], $target_file))
            {   
                $query="Update `events` SET EventType='".$_POST["eventtype"]."',EventUrl='".$target_file."',EventDescription=\"".$_POST["eventdescription"]."\",Date=\"".$_POST["date"]."\" where EventID=".$_POST["eventid"]." and UserID=".$_SESSION["id"];
                if($conn->query($query)){
                    echo $query;
                    //header("location:event.php");
                }
                else{
                    $message="Error: " . $query . "<br>" . $conn->error;
                    echo "<script type='text/javascript'>alert('$message');</script>"; 
                }
            }
        }
    }
}


function Deletebutton(){
    include 'dbConn.php';
    $sql='Delete from events where EventID='.$_POST['eventid'];
    //echo $sql;
    if($conn->query($sql)){
        '<script>
    window.location.href = "event.php"
    </script>';
    }
    else{
        $message="Error: " . $sql . "<br>" . $conn->error;
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
}
?>
</body>
</html>