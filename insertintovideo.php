<?php
session_start();
?>

<html>
<body>
<?php 
include 'dbConn.php';
$target_dir="proyect_1/";
$target_file=$target_dir.basename($_FILES["videofile"]["name"]); 

$vt= $_POST['invideotype'];
$vd=$_POST['invideodescription']; 
$date=$_POST['indate'];
//$vu=$_POST['videofile'];

if ($target_file=='proyect_1/')
{
    $query="Insert into `video` (UserID, VideoType, Description, VideoUrl, Date) values ('".$_SESSION["id"]."','".$vt."','".$vd."','','".$date."')";
    $conn->query($query);
    echo $query;
    header("location:video.php");
}    
else{
    if(move_uploaded_file($_FILES["imgfile"]["tmp_name"], $target_file))
    {
        $query="Insert into `video` (UserID, VideoType, Description, VideoUrl, Date) values ('".$_SESSION["id"]."','".$vt."','".$vd."','".$target_dir."','".$date."')";
        $conn->query($query);
        echo $query; 
        header("location:video.php");
    }
}
?>
</body>
</html>