<?php
    session_start();
?>
<html>
<body>
<?php 
include 'dbConn.php';
$target_dir="proyect_1/";
$target_file=$target_dir.basename($_FILES["imgfile"]["name"]);
echo $target_file; 
//$pid=$_POST['id'];
$pn= $_POST['projectname'];
$pd=$_POST['projdesc']; 
$date=$_POST['date'];
$uid=$_SESSION['id'];
if ($target_file=='proyect_1/')
{
    $query="Insert into `project` (UserID, ProjectName, ProjectDescription, imgUrl, Date) values ('".$uid."','".$pn."','".$pd."','','".$date."')";
    if($conn->query($query))
    {
        echo  '<script>
    window.location.href = "project.php"
    </script>';
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
}
else
{
    echo $target_file;
    if(move_uploaded_file($_FILES["imgfile"]["tmp_name"], $target_file))
    {
        $query="Insert into `project` ( UserID, ProjectName, ProjectDescription, imgUrl, Date) values ('".$uid."','".$pn."','".$pd."','".$target_file."','".$date."')";
        if($conn->query($query))
        {
          echo  '<script>
    window.location.href = "project.php"
    </script>';

        }
        else{
            $message="Error: " . $query . "<br>" . $conn->error;
            echo "<script type='text/javascript'>alert('$message');</script>";  
        ?>

        <?php
        }
    }
    else{
        echo "upload failed";
    }
}    

?>
</body>
</html>