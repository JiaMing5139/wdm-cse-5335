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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

<?php 
include 'dbConn.php';
if(empty($_SESSION["name"])){?>
    <script>
        alert("Please login first!!!");
        setTimeout(function(){window.location ='index.html';}, 500);
    </script>
    <?php
}
else{
?>
    <div class="nav-container" id="myTopnav">
        <img src="image/logo.png">
        <a href="index.html">inicio</a>
        <a href="semblanza.html">semblanza</a>
        <a href="centro augusto mijares.html" >centro augusto mijares</a>
        <a href="proyectos.php">proyectos</a>
        <a href="eventos.php">eventos</a>
         <a href="http://jxp8516.uta.cloud/wordpress/">blog</a>
        <a href="videos.php">videos</a>    
        <a href="equipo.php">equipo</a>
        <a onclick="openLoginPopupWindow()">Iniete De Sesiem</a>
        <a onclick="openRegisterWindow()">Registru</a>
        <a href="project.php" id="userTag" style="color: #454cde">User</a>
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
    </div>

    <div class="table_container">
        <h3 id="clickedName">Event</h3>
        <div>
            <div class="displayTag">
                <p><b>Event ID</p>
                <!-- <p ><b>User ID</p> -->
                <p><b>Event Type</p>
                <p><b>Event Description</p>
                <p><b>Date</p><p><b>Edit</p>
            </div>
            
            <?php 
                $sql="Select * from events where UserID='".$_SESSION["id"]."'";
                $result=$conn->query($sql);
                while($row=$result->fetch_assoc()){
                    echo "<div class='displayTag1'>";
                    echo "<p id='eventid'>" .$row["EventID"]. "</p>" ;
                    // echo "<p id='ui".$row["EventID"]."' hidden>" .$row["UserID"]. "</p>";
                    echo "<p id='et".$row["EventID"]."'>" .$row["EventType"]. "</p>";
                    echo "<p id='ed".$row["EventID"]."'>" .$row["EventDescription"]. "</p>";
                    echo "<p id='date".$row["EventID"]."'>" .$row["Date"]. "</p>";
                    echo "<div class='box'>";
                    echo "<a  class='button' href='#popup1' onclick='btnEdit(".$row['EventID'].")'> Edit </a>";
                    echo "</div>";
                    echo "</div>";
                    echo "</br>";
                }
            ?>
            
        </div>
        <div class='box'>
            <script>
                function openpop() {
                    window.location.href='#popup2';
                }
            </script>
            <button class='button' id="iddButton" href='#popup2' onclick="openpop()">
                                    Add
            </button>
        </div>
    </div>

    <div id="popup2" class="overlay">
	<div class="edit-popup">
    <a class="close" href="#">&times;</a>
    <form action="insertintoevent.php" method="post" enctype="multipart/form-data" class="form-container">
          <p>Event ID:</p> 
          <input type="text" id="inid" name="ineventid"  required readonly> 
          
          <!-- <p>User ID:</p>
          <input type="text" id="inuserid" name="inuserid" required> -->

          <p>Event Type:</p>
          <input type="text" id="ineventtype" name="ineventtype" required>
 

          <p>Event Description:</p>
          <textarea id="ineventdescription" name="ineventdescription" rows="5" width="50%"></textarea>      

          <p>Date:</p>
          <input type="Date" id="indate"  name="indate" required> 

          <button type="submit" class="btn" >Add</button>
          <!-- <button type="button" class="btn cancel" onclick="closeForm()">Close</button>  -->

        </form>
        </div>
    </div>

    <div id="popup1" class="overlay">
	<div class="edit-popup">
    <a class="close" href="#">&times;</a>
    <form action="editEvent.php" method="post" enctype="multipart/form-data" class="form-container">
          <p>Event ID:</p> 
          <input type="text" id="eid" name="eventid"  required readonly="yes">
          
          <!-- <p>User ID:</p>
          <input type="text" id="userid" name="userid" required readonly="yes"> -->
          
          <p>Event Type:</p>
          <input type="text" id="eventtype" name="eventtype" required>

          <p>Event Description:</p>
          <textarea id="eventdescription" name="eventdescription" rows="5" width="50%"></textarea>
        
          <p>Date:</p>
          <input type="Date" id="date"  name="date" required>

          <button type="submit" class="Editbtn" name="editbtn" >Edit</button>
          <button type="submit" class="Deletebtn" name="deletebtn" >Delete</button>
        </form>
        </div>
    </div>


</div>
    <footer>
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
    
            <?php } ?>
    <script>


    function btnEdit(x) 
    {  
          
        //ui=document.getElementById("ui"+x).innerHTML;
        et=document.getElementById("et"+x).innerHTML;
        ed=document.getElementById("ed"+x).innerHTML;
        date=document.getElementById("date"+x).innerHTML;
        document.getElementById('eid').value=x;
        //document.getElementById('userid').value=ui;
        document.getElementById('eventtype').value=et;
        document.getElementById('eventdescription').value=ed;
        document.getElementById('date').value=date;
    }

      
    function closeForm() {
        document.getElementById("popupForm").style.display="none";
    }
    </script>
</body>
    
    
    
    </html>

