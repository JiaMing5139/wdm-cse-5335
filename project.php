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
include "dbConn.php";

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
        <a href="proyectos.php">proyectos</a>
        <a href="eventos.php">eventos</a>
         <a href="http://jxp8516.uta.cloud/wordpress/">blog</a>
        <a href="videos.html">videos</a>    
        <a href="equipo.php">equipo</a>
        <a href="openLoginPopupWindow">Iniete De Sesiem</a>
        <a onclick="openRegisterWindow()">Registru</a>
        <a href="project.php" id="userTag" style="color: #454cde">User</a>
    <a href="javascript:void(0);" class="icon" onclick="openResponsive()">
        <i class="fa fa-bars"></i>
    </a>

    </div>
<div id="wrapper" class="User">
    <div class="titleRow">
        <h1>Welcome</h1>
        <h2 id="username">User: <?php echo $_SESSION["name"] ?> </h2>
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
        <h3 id="clickedName">Project</h3>
        <div>
            <div class="displayTag">
                <p><b>Project ID</p>
                <p><b>Project Name</p>
                <p><b>Project Description</p>
                <p><b>ImageURL</p>
                <p><b>Date</p>
                <p><b>Edit</p>
            </div>
            
            <?php 
                $sql="Select * from project where UserID='".$_SESSION["id"]."'";
                $result=$conn->query($sql);
                while($row=$result->fetch_assoc()){
                    echo "<div class='displayTag1'>";
                    echo "<p id='projectid' >" .$row["ProjectID"]. "</p>" ;
                    echo "<p id='pn".$row["ProjectID"]."'>" .$row["ProjectName"]. "</p>";
                    echo "<p id='pd".$row["ProjectID"]."'>" .$row["ProjectDescription"]. "</p>";
                    echo "<img id='imgsrc".$row["ProjectID"]."' src='".$row["imgUrl"]."'>" ;
                    echo "<p id='date".$row["ProjectID"]."'>" .$row["Date"]. "</p>";
                    echo "<div class='box'>";
                    echo "<a  class='button' href='#popup1' onclick='btnEdit(".$row['ProjectID'].")'> Edit </a>";
                    echo "</div>";
                    echo "</div>";
                }
            ?>
        </div>
        <div class='box'>        
            <a class='button' id="iddButton" href='#popup2'>Add</a>
        </div>
    </div>

    <div id="popup2" class="overlay">
	<div class="edit-popup">
    <a class="close" href="#">&times;</a>
    <form action="insertintoproject.php" method="post" enctype="multipart/form-data" class="form-container">
          <p>Project Name:</p>
          <input type="text" id="inprojectname" name="projectname" required>

          <p>Project Description:</p>
          <textarea id="inprojdesc" name="projdesc" rows="5" width="50%"></textarea>
                  
          <p> Want to add image?<p>
          <input type="file" id="inimgfile" name="imgfile" >      

          <p>Date:</p>
          <input type="Date" id="indate"  name="date" required> 

          <button type="submit" class="btn" >Add</button>
        </form>
        </div>
    </div>


</div>
    <div id="popup1" class="overlay">
	<div class="edit-popup">
    <a class="close" href="#">&times;</a>
    <form action="editproject.php" method="post" enctype="multipart/form-data" class="form-container">
        <table>  
        <tr>
            <td  style="color: #888888; font-weight:normal;">Project ID:</td>
            <td style="color: #888888; font-weight:normal;">Project Name:</td>
            </tr>
        <tr>
          <td><input type="text" id="id" name="id"  required readonly="yes"></td>
           
          
          <td><input type="text" id="projectname" name="projectname" required><td>
              
          </tr>
            </table>
          <p>Project Description:</p>
          <textarea id="projdesc" name="projdesc" rows="5" width="50%"></textarea>
        
          <p>Image:</p>
          <img id="image" name="image" width="150px"  >
          
          <p> Want to change image?<p>
          <input type="file" id="imgfile" name="imgfile" >      

          <p>Date:</p>
          <input type="Date" id="date"  name="date" required>

          <button type="submit" class="editbtn" name="editbtn" >Edit</button>
          <button type="submit" class="deletebtn" name="deletebtn" >Delete</button>
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
      function btnEdit(x) {
        document.getElementById('id').value=x;
        pd=document.getElementById("pd"+x).innerHTML;
        pn=document.getElementById("pn"+x).innerHTML;
        date=document.getElementById("date"+x).innerHTML; 
        img=document.getElementById("imgsrc"+x).src;
        document.getElementById('projectname').value=pn;
        document.getElementById('projdesc').value=pd;
        document.getElementById('date').value=date;
        document.getElementById('image').src=img;
      }

      
      
      function closeForm() {
        document.getElementById("popup1").style.display="none";
      }
    </script>
    
    </body>
    
    
    
    </html>