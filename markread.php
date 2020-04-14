<?php 
    $q = $_GET['id'];  
    include 'dbConn.php';
    $query="Delete from messages where  MessageID='".$q."'"; 
    $conn->query($query);

    $query="Select * from messages where Status=1";
        $result=$conn->query($query);
        while($row=$result->fetch_assoc()){
            echo "<div class='displayTag1' id='ajx'>";
            echo "<p id='eid".$row["MessageID"]."' style='padding-right:60px;' >" .$row["EmailID"]. "</p>" ;
            echo "<p id='msgid".$row["MessageID"]."' style='padding-left:60px;'>" .$row["Message"]. "</p>" ;
            echo "<div class='box'>";
            echo "<a  class='button' style='width:150px; text-align:center;' href='#popup1' onclick='btnMark(".$row['MessageID'].")'> Mark as Read!!</a>";
            echo "</div>";
            echo "</div>";
        } 
?>