<?php
session_start();
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>User</title>
    <link rel="stylesheet" type="text/css" href="style/mijares.css">
    <script type="text/javascript" src="Js/User.js"></script>
    <script type="text/javascript" src="Js/PopupWindows.js"></script>
</head>

<body>

<?php 
include 'dbConn.php';
ob_start();
?>
<div class="nav-container">
        <img src="image/logo.png">
        <a href="index.html">inicio</a>
        <a href="semblanza.html">semblanza</a>
        <a href="centro augusto mijares.html" >centro augusto mijares</a>
        <a href="proyectos.php">proyectos</a>
        <a href="eventos.php">eventos</a>
         <a href="http://jxp8516.uta.cloud/wordpress/">blog</a>
        <a href="videos.php">videos</a>    
        <a href="equipo.html">equipo</a>
        <a onclick="openLoginPopupWindow()">Iniete De Sesiem</a>
        <a onclick="openRegisterWindow()">Registru</a>
        <a href="User.html" id="userTag" style="color: #454cde">User</a>
    <a href="javascript:void(0);" class="icon" onclick="openResponsive()">
        <i class="fa fa-bars"></i>
    </a>
    </div>
<div id="wrapper" class="User">
    <div class="titleRow">
        <h1>Welcome</h1>
        <h2 id="username">User: <?php echo $_SESSION["name"] ?></h2>
        <text onclick="signout()" >sign out</text>

    </div>
    <hr>

    <div class="vertical-menu">
        <a href="project.php" id="project" >Project</a>
        <a href="event.php" id="event" >Event</a>
        <a href="contacts.php" id="contact" >Contact</a>
        <a href="video.php" id="video" >Videos</a>
        
    
    <?php 
        $uid=$_SESSION['id'];
        $query="Select Role from user where UserID='".$uid."'";
        $r=$conn->query($query);
        while($row = $r->fetch_assoc()) {
            if($row["Role"]=='Admin'){
                echo '<a href="messages.php" id="message" >Messages</a>';
            }
        }
    ?>
    </div>

    <div class="table_container">
        <h3 id="clickedName">Event</h3>
        <div>
            <div class="displayTag">
                <!-- <p ><b>User ID</p> -->
                <p style='padding-right:60px;'><b>Email From</p>
                <p style='padding-left:60px;'><b>Message</p>
            </div>
        
    <?php 
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
    </div>



<script>
function btnMark(x) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      alert("Marked as read");
      document.getElementById('ajx').innerHTML=this.responseText;
    } 
  };
  xhttp.open("GET", "markread.php?id="+x, true);
  xhttp.send();
}        


</script>
</div>
    <footer style="padding-top: 200px;">
        <div class="container">
            <div id="bootom-container" >
                <hr>
                <text>Copyright @2020 all rights reserved | This template is made with <text id="name">❤</text> by <text id="name">Jimmy and ashu</text></text>
                <div id="iconGroup" style="float: right">
                    <img src="image/facebook.png" class="facebook" alt="">
                    <img src="image/twitter.png" class="twitter" alt="">
                    <img src="image/basketball.png" alt="">
                    <img src="image/Be.png" alt="">
                </div>
            </div>
        </div>
    </footer>
    <div id="LoginWindow"></div>
    <div id="RegisterWindow"></div>

    <div id="LoginWindow"></div>
    <div id="RegisterWindow"></div>
    </body>
    
    </html>

