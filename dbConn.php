<!-- <?php
$servername = "localhost";
$username = "root";
$password = "";
$db="csewdm";
try {
    $conn = new mysqli($servername,$username, $password,$db);
    }
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}
?> -->

<?php
$servername = "localhost";
$username = "axm9115_wp1";
$password = "KUDEbm;6W]Fa";
$db="axm9115_wp1";
try {
    $conn = new mysqli($servername,$username, $password,$db);
    }
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}
?>