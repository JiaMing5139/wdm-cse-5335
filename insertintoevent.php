<?php
session_start();
?>

<html>
<body>
<?php 
include 'dbConn.php';
ob_start();
$target_dir="proyect_1/";
$target_file=$target_dir.basename($_FILES["ineventimgfile"]["name"]);
echo $target_file; 
 

//$eid=$_POST['ineventid'];
$uid=$_SESSION['id'];
$et= $_POST['ineventtype'];
$ed=$_POST['ineventdescription']; 
$date=$_POST['indate'];

if ($target_file=='proyect_1/')
{
    $query="Insert into `events` (UserID, EventType, EventUrl, EventDescription, Date) values ('".$uid."','".$et."','proyect_1/eventdefault.jpg','".$ed."' ,'".$date."')";
    if($conn->query($query))
    {   
        echo $query;
        echo  '<script>
    window.location.href = "event.php"
    </script>';
    }
    else{
        $message="Error: " . $query . "<br>" . $conn->error;
        echo "<script type='text/javascript'>alert('$message');</script>";  
    ?>
    <script>
        setTimeout(function(){window.location ='<?php echo $_SERVER["HTTP_REFERER"] ?>';}, 5);
    </script> 
    <?php 
    }
}
else
{
    if(move_uploaded_file($_FILES["ineventimgfile"]["tmp_name"], $target_file))
    {
        $query="Insert into `events` (UserID, EventType, EventUrl, EventDescription, Date) values ('".$uid."','".$et."','".$target_file."','".$ed."' ,'".$date."')";
        echo $query;
        if($conn->query($query))
        {   
            echo $query;
            echo  '<script>
            window.location.href = "event.php"
            </script>';
        }
        else{
            $message="Error: " . $query . "<br>" . $conn->error;
            echo "<script type='text/javascript'>alert('$message');</script>";  
        ?>
        <script>
            setTimeout(function(){window.location ='<?php echo $_SERVER["HTTP_REFERER"] ?>';}, 5);
        </script> 
        <?php 
        }    
    }
}
?>
</body>
</html>