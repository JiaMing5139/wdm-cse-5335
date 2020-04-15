<?php
session_start();
?>

<html>
<body>
<?php 
ob_start();
include 'dbConn.php';
$target_dir="video/";
$target_file=$target_dir.basename($_FILES["videofile"]["name"]);
echo $_FILES["videofile"]["name"];
echo $target_file;
$vt= $_POST['invideotype'];
$vd=$_POST['invideodescription']; 
$date=$_POST['indate'];
//$vu=$_POST['videofile'];

if ($target_file=='video/')
{
    $query="Insert into `video` (UserID, VideoType, Description, VideoUrl, Date) values ('".$_SESSION["id"]."','".$vt."','".$vd."','','".$date."')";
    if($conn->query($query))
    {
        echo  '<script>
    window.location.href = "video.php"
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
else{
    if(move_uploaded_file($_FILES["videofile"]["tmp_name"], $target_file))
    {
        $query="Insert into `video` (UserID, VideoType, Description, VideoUrl, Date) values ('".$_SESSION["id"]."','".$vt."','".$vd."','".$target_file."','".$date."')";
        if($conn->query($query))
        {
            echo  '<script>
    window.location.href = "video.php"
    </script>';
        }else{
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