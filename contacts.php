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
        <a href="equipo.html">equipo</a>
        <a onclick="openLoginPopupWindow()">Iniete De Sesiem</a>
        <a onclick="openRegisterWindow()">Registru</a>
        <a href="User.html" id="userTag" style="display: none;color: #454cde">User</a>
    </div>
    <div id="wrapper" class="User">
    <div class="titleRow">

        <h1>Welcome</h1>
        <h2 id="username">User:</h2>
        <text onclick="signout()">sign out</text>

    </div>
    <hr>


    <div class="vertical-menu">

        <a href="project.php" id="project" >Project</a>
        <a href="event.php" id="event" >Event</a>
        <a href="contacts.php" id="contact" >Contact</a>
    </div>

    <div class="table_container">
        <h3 id="clickedName">Contacts</h3>
        <button id="iddButton">Add</button>
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
    </body>
    
    
    
    </html>

