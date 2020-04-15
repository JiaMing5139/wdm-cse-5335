<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>eventos</title>
    <link rel="stylesheet" type="text/css" href="style/mijares.css">
    <script type="text/javascript" src="Js/PopupWindows.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<!--    <script>-->
<!--        if(sessionStorage.getItem('username')==null){-->

<!--        }-->
<!--    </script>-->

<div class="nav-container" id="myTopnav">
    <img src="image/logo.png">
    <a href="index.html">inicio</a>
    <a href="semblanza.html">semblanza</a>
    <a href="centro augusto mijares.html">centro augusto mijares</a>
    <a href="proyectos.php">proyectos</a>
    <a href="eventos.php" style="color: #454cde">eventos</a>
    <a href="http://jxp8516.uta.cloud/wordpress/">blog</a>
    <a href="videos.php">videos</a>
    <a href="equipo.php">equipo</a>
    <a onclick="openLoginPopupWindow()">Iniete De Sesiem</a>
    <a onclick="openRegisterWindow()">Registru</a>
    <a href="project.php" id="userTag" style="display: none">User</a>
    <a href="javascript:void(0);" class="icon" onclick="openResponsive()">
        <i class="fa fa-bars"></i>
    </a>
</div >
<div id="wrapper" class="eventos">
    <div>
        <?php
        ob_start();
        include "query.php";

        if($result = queryEvents()){
            echo '    <div class="titleLogo">
         <h1>Here are all the events</h1>
          <h1>please check them!</h1>
                </div>';
            $rowcount=mysqli_num_rows($result);
            if($rowcount >0) {
                while ($row = $result->fetch_assoc()) {
                    echo '  <div id="row">
                 <div style="vertical-align: top">
                     <p> Event Type:<br>
                    ' . $row["EventType"] . '
                      </p>
                         <p> Description:<br>
                    ' . $row["EventDescription"] . '
                     </p>
                         <p> Date:<br>
                           ' . $row["Date"] . '
                      </p>
                  </div>
                  <img src="image/evento.png" alt="">
                 </div>
   ';

                }
            }else{
                echo '    <div class="titleLogo">
         <h1>There are no events! try to upload new events!</h1>
                </div>';

            }

        }else {

            echo '    <div class="titleLogo">
         <h1>Query data failed ,please try again! or contact admin</h1>
                </div>';

        }
        ?>
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
<script type="text/javascript" src="Js/afterOnload.js"></script>