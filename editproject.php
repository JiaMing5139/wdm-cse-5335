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
    $target_file=$target_dir.basename($_FILES["imgfile"]["name"]);
    echo $target_file;
    //echo $target_file;
    //$filename=basename($_FILES["imgfile"]["name"]); 
    $sql="Select imgUrl from project where ProjectID=".$_POST['id'];
    echo $sql;
    $result=$conn->query($sql);
    while($row = $result->fetch_assoc()) { 
            if ($target_file=='proyect_1/'){

                $sql=$conn->prepare("Update project SET ProjectName=?,ProjectDescription=?,imgUrl=? ,Date=? where ProjectID=?");
                $sql->bind_param('ssssi',$_POST["projectname"],$_POST["projdesc"],$row["imgUrl"],$_POST["date"],$_POST["id"]);
                if($sql->execute()){
                    $sql->close();
                    echo  '<script>
    window.location.href = "project.php"
    </script>';
                }else{
                    $message="Error: " . $sql . "<br>" . $conn->error;
                    echo "<script type='text/javascript'>alert('$message');</script>"; 
                }
                
            }
            else{
                if(move_uploaded_file($_FILES["imgfile"]["tmp_name"], $target_file))
                {
                    $sql=$conn->prepare("Update project SET ProjectName=?,ProjectDescription=?,imgUrl=? ,Date=? where ProjectID=?");
                    $sql->bind_param('ssssi',$_POST["projectname"],$_POST["projdesc"],$target_file,$_POST["date"],$_POST["id"]);
                    if($sql->execute()){
                        $sql->close();
                        echo  '<script>
    window.location.href = "project.php"
    </script>';
                    }else{
                        $message="Error: " . $sql . "<br>" . $conn->error;
                        echo "<script type='text/javascript'>alert('$message');</script>"; 
                    }
                }
            }    
    }
}


function Deletebtn(){
    include 'dbConn.php';
    $sql="Delete from project where ProjectID=".$_POST["id"];
    //echo $sql;
    if($conn->query($sql)){
        echo  '<script>
    window.location.href = "project.php"
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