<?php
ob_start();
function getConn(){

    $servername = "localhost";
    $username = "axm9115_wp1";
    $password = "KUDEbm;6W]Fa";
    $db="axm9115_wp1";
    try {
        $conn = new mysqli($servername,$username, $password,$db);
        return $conn;
    }
    catch(PDOException $e)
    {
        echo "Connection failed: " . $e->getMessage();
        return false;
    }


}
function queryProject(){
    if(!$conn =  getConn()){
        return fasle;
    }
    $sql = "Select * from project  ";
    if($result = mysqli_query($conn,$sql)) {
        mysqli_close($conn);
        return $result;
    }else{
        mysqli_close($conn);
        return false;
    }
}

function queryEvents(){
    if(!$conn =  getConn()){
        return fasle;
    }
    $sql = "Select * from events  ";
    if($result = mysqli_query($conn,$sql)) {
        mysqli_close($conn);
        return $result;
    }else{
        mysqli_close($conn);
        return false;
    }
}

function queryVideos(){
    if(!$conn =  getConn()){
        return fasle;
    }
    $sql = "Select * from video  ";
    if($result = mysqli_query($conn,$sql)) {
        mysqli_close($conn);
        return $result;
    }else{
        mysqli_close($conn);
        return false;
    }
}


function queryFailed(){

    return "query error , try again";
}