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
    Deletebtn();
}


function Editbutton(){
    include 'dbConn.php';
    $target_dir="proyect_1/";
    $target_file=$target_dir.basename($_FILES["videofile"]["name"]);
    echo $target_file; 
    $vid=$_POST['videoid'];
    $vt= $_POST['videotype'];
    $vd=$_POST['videodescription']; 
    $date=$_POST['date'];
    $vu=$_POST['videourl'];
    if ($target_file=='proyect_1/')
    {
        $sql=$conn->prepare("Update video SET VideoType=?, Description=?, VideoUrl=? ,Date=? where VideoID=? and UserID=?");
        $sql->bind_param('ssssii',$_POST['videotype'],$_POST['videodescription'],$_POST['videourl'],$_POST["date"],$_POST['videoid'],$_SESSION["id"]);
        $sql->execute();
        // $query="Insert into `video` (VideoID, UserID, VideoType, Description, VideoUrl, Date) values ('".$vid."','".$_SESSION["id"]."','".$vt."','".$vd."','".$vu."','".$date."')";
        // $conn->query($query);
        // echo $query;   
        header("location:video.php");
    }
    else
    {
        if(move_uploaded_file($_FILES["imgfile"]["tmp_name"], $target_file))
        {
            $sql=$conn->prepare("Update video SET VideoType=?, Description=?, VideoUrl=? ,Date=? where VideoID=? and UserID=?");
            $sql->bind_param('ssssii',$_POST['videotype'],$_POST['videodescription'],$_POST['videourl'],$_POST["date"],$_POST['videoid'],$_SESSION["id"]);
            $sql->execute();

            // $query="Insert into `project` (VideoID, UserID, VideoType, Description, VideoUrl, Date) values ('".$vid."','".$_SESSION["id"]."',".$vt."','".$vd."','".$target_file."','".$date."')";
            // $conn->query($query);
            // echo $query;    
                    
            header("location:video.php");
        }
    }    
}

function Deletebtn(){
    include 'dbConn.php';
    $sql="Delete from video where VideoID=".$_POST["videoid"];
    echo $sql;
    $conn->query($sql);
    header("location:video.php");
}

?>
</body>
</html>