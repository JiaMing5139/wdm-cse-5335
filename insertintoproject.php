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
if ($target_file=='proyect_1/')
{
    $query="Insert into `project` (ProjectName, ProjectDescription, imgUrl, Date) values ('".$pn."','".$pd."','','".$date."')";
    $conn->query($query);
    echo $query;   
    header("location:project.php");
}
else
{
    if(move_uploaded_file($_FILES["imgfile"]["tmp_name"], $target_file))
    {
        $query="Insert into `project` ( ProjectName, ProjectDescription, imgUrl, Date) values ('".$pn."','".$pd."','".$target_file."','".$date."')";
        $conn->query($query);
        echo $query;    
                    
        header("location:project.php");
    }
}    

?>
</body>
</html>