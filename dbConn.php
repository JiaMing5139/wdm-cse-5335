<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="csewdm";
try
{
    $conn = new mysqli($servername,$username, $password,$db);    
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}
?>