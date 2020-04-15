<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $db="csewdm";
// try {
//     $conn = new mysqli($servername,$username, $password,$db);
//     }
// catch(PDOException $e)
// {
//     echo "Connection failed: " . $e->getMessage();
// }
?>

<?php
$servername = "35.202.91.224";
$username = "root";
$password = "ashujimmy123";
$db="csewdm";
try {
    $conn = new mysqli($servername,$username, $password,$db);
    }
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}
?>