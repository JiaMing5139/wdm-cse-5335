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
if(empty($_SESSION["name"])){?>
    <script>
        alert("Please login first!!!");
        setTimeout(function(){window.location ='index.html';}, 500);
    </script>
    <?php
}
else{
?>
    <div class="nav-container">
        <img src="image/logo.png">
        <a href="index.html">inicio</a>
        <a href="semblanza.html">semblanza</a>
        <a href="centro augusto mijares.html" >centro augusto mijares</a>
        <a href="proyectos.html">proyectos</a>
        <a href="eventos.html">eventos</a>
         <a href="http://jxp8516.uta.cloud/wordpress/">blog</a>
        <a href="videos.html">videos</a>    
        <a href="equipo.php">equipo</a>
        <a onclick="openLoginPopupWindow()">Iniete De Sesiem</a>
        <a onclick="openRegisterWindow()">Registru</a>
        <a href="project.php" id="userTag" style="display: none;color: #454cde">User</a>
    </div>
    <div id="wrapper" class="User">
    <div class="titleRow">

        <h1>Welcome</h1>
        <h2 id="username">User:<?php echo $_SESSION["name"] ?></h2>
        <a href="signout.php">sign out</a>

    </div>
    <hr>


    <div class="vertical-menu">
        <a href="project.php" id="project" >Project</a>
        <a href="event.php" id="event" >Event</a>
        <a href="contacts.php" id="contact" >Contact</a>
        <a href="video.php" id="video" >Videos</a>
    </div>

    <div class="table_container">
        <h3 id="clickedName">Video</h3>
        <div>
            <div class="displayTag">
                <p><b>Video ID</p>
                <p><b>Video Type</p>
                <p><b>Description</p>
                <p><b>VideoUrl</p>
                <p><b>Date</p><p><b>Edit</p>
            </div>
            
            <?php 
                $sql="Select * from video where UserID='".$_SESSION["id"]."'";
                $result=$conn->query($sql);
                while($row=$result->fetch_assoc()){
                    echo "<div class='displayTag1'>";
                    echo "<p id='videoid' hidden>" .$row["VideoID"]. "</p>" ;
                    "<p id='ui".$row["VideoID"]."' hidden>" .$row["UserID"]. "</p>" ;
                    echo "<p id='vt".$row["VideoID"]."'>" .$row["VideoType"]. "</p>";
                    echo "<p id='vd".$row["VideoID"]."'>" .$row["Description"]. "</p>";
                    echo "<p id='vu".$row["VideoID"]."'>" .$row["VideoUrl"]. "</p>";
                    echo "<p id='date".$row["VideoID"]."'>" .$row["Date"]. "</p>";
                    echo "<div class='box'>";
                    echo "<a  class='button' href='#popup1' onclick='btnEdit(".$row['VideoID'].")'> Edit </a>";
                    echo "</div>";
                    echo "</div>";
                    echo "</br>";
                }
                
            ?>
            
        </div>
        <div class='box'>        
            <a class='button' id="iddButton" href='#popup2'>Add</button>
        </div>
    </div>

    <div id="popup2" class="overlay">
	<div class="edit-popup">
    <a class="close" href="#">&times;</a>
    <form action="insertintovideo.php" method="post" enctype="multipart/form-data" class="form-container">
          
          <!-- <p>User ID:</p>
          <input type="text" id="inuserid" name="inuserid" required> -->

          <p>Video Type:</p>
          <input type="text" id="invideotype" name="invideotype" required>
 

          <p>Video Description:</p>
          <textarea id="invideodescription" name="invideodescription" rows="5" width="50%"></textarea>      

          <p>Add VideoUrl?<p>
          <input type="file" id="invideofile" name="videofile" >      

          <p>Date:</p>
          <input type="Date" id="indate"  name="indate" required> 

          <button type="submit" class="btn" >Add</button>
          <button type="button" class="btn cancel" onclick="closeForm()">Close</button> 

        </form>
        </div>
    </div>

    <div id="popup1" class="overlay">
	<div class="edit-popup">
    <a class="close" href="#">&times;</a>
    <form action="editVideo.php" method="post" enctype="multipart/form-data" class="form-container">
          <p>Video ID:</p> 
          <input type="text" id="vid" name="videoid"  required readonly="yes">
          
          <p>Video Type:</p>
          <input type="text" id="videotype" name="videotype" required>

          <p>Video Description:</p>
          <textarea id="videodescription" name="videodescription" rows="5" width="50%"></textarea>
        
          <p>Video Url:</p>
          <input type="text" id="videoUrl" name="videourl" readonly="yes">

          <p> Want to change Video?<p>
          <input type="file" id="videofile" name="videofile" >

          <p>Date:</p>
          <input type="Date" id="date"  name="date" required>

          <button type="submit" class="Editbtn" name="editbtn" >Edit</button>
          <button type="submit" class="Deletebtn" name="deletebtn">Delete</button>
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
        vt=document.getElementById("vt"+x).innerHTML;
        vd=document.getElementById("vd"+x).innerHTML;
        vu=document.getElementById("vu"+x).innerHTML;
        date=document.getElementById("date"+x).innerHTML;
        
        document.getElementById('vid').value=x;
        // document.getElementById('userid').value=ui;
        document.getElementById('videotype').value=vt;
        document.getElementById('videoUrl').value=vu;
        document.getElementById('videodescription').value=vd;
        document.getElementById('date').value=date;
      }

      
      
      function closeForm() {
        document.getElementById("popupForm").style.display="none";
      }
    </script>
</body>
    
    
    
    </html>

