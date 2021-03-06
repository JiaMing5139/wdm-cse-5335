<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>videos</title>
    <link rel="stylesheet" type="text/css" href="style/mijares.css">
    <script type="text/javascript" src="Js/PopupWindows.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="nav-container" id="myTopnav">
    <img src="image/logo.png">
    <a href="index.html">inicio</a>
    <a href="semblanza.html">semblanza</a>
    <a href="centro augusto mijares.html">centro augusto mijares</a>
    <a href="proyectos.php">proyectos</a>
    <a href="eventos.php">eventos</a>
    <a href="http://jxp8516.uta.cloud/wordpress/">blog</a>
    <a href="videos.php" style="color: #454cde">videos</a>
    <a href="equipo.php">equipo</a>
    <a onclick="openLoginPopupWindow()">Iniete De Sesiem</a>
    <a onclick="openRegisterWindow()">Registru</a>
    <a href="project.php" id="userTag" style="display: none">User</a>
    <a href="javascript:void(0);" class="icon" onclick="openResponsive()">
        <i class="fa fa-bars"></i>
    </a>
</div >
<div id="wrapper" class="video">
<div class="title">
    <img src="image/logo.png">
    <h3>You can check all the videos here!</h3>
</div>


    <?php
    include "query.php";
       if($result = queryVideos()){
    $rowcount=mysqli_num_rows($result);
    if($rowcount >0) {
        $index =  0;
        echo '<div class="flex">';
        while ($row = $result->fetch_assoc()) {
            if($index ===3){

                echo '</div>
               <div class="flex" >';
                $index = 0;
            }
            echo '    <div class="card"  style="">
        <video width="400" height="315" controls="controls">
            <source src="'. $row["VideoUrl"] .'" type="video/mp4">
        </video>
        <h4>'.$row["VideoType"].' </h4>
        <p>'.$row["Description"].' </p>
        </div>';
            $index ++;
        }
        echo '</div>';

    }else{
        echo '<div class="title">
    <h3>There are no videos! try to upload new videos!</h3>
</div>';
    }
       }else{
           echo '<div class="title">
    <h3>Query data failed ,please try again! or contact admin</h3>
</div>';
       }

    ?>
<!--<div class="flex">-->
<!--    <div class="card">-->
<!--         <iframe width="560" height="315" src="https://www.youtube.com/embed/44E6zSpaDwE"-->
<!--            frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
<!--        <h4>Dr. François Vallaeys</h4>-->
<!--        <p>-->
<!--            La Responsabilidad Social por François Vallaeys | Universidad Siglo 21 URL: https://www.youtube.com/watch?v=44E6zSpaDwE-->
<!--        </p>-->
<!--    </div>-->
<!--    <div class="card">-->
<!--        <iframe width="560" height="315" src="https://www.youtube.com/embed/do9dIcEIiwU" frameborder="0"-->
<!--                 allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
<!--        <h4>Dr. François Vallaeys</h4>-->
<!--        <p>-->
<!--            Panorama de la RSO en América Latina (SIRSO 2014)III SIMPOSIO DE LA RESPONSABILIDAD SOCIAL DE LAS ORGANIZACIONES URL: https://www.youtube.com/watch?v=do9dIcEIiwU-->
<!--        </p>-->
<!--    </div>-->
<!--    <div class="card">-->
<!--        <iframe width="560" height="315" src="https://www.youtube.com/embed/h4juTFzNYcs" frameborder="0" allow="accelerometer;-->
<!--        autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
<!--        <h4>UNIVERSIDAD DEL PACÍFICO​</h4>-->
<!--        <p>-->
<!--            CONFERENCIA: Responsabilidad Socialersitaria como modelo universitario para América Latina URL: https://www.youtube.com/watch?v=h4juTFzNYcs-->
<!--        </p>-->
<!--    </div>-->
<!---->
<!--</div>-->
<!---->
<!--<div class="flex" >-->
<!---->
<!--    <div class="card">-->
<!--        <iframe width="560" height="315" src="https://www.youtube.com/embed/W7y83cZ_s7g" frameborder="0"-->
<!--                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
<!--        <h4>Dr. François Vallaeys</h4>-->
<!--        <p>-->
<!--            EConferencia: CALIDAD EDUCATIVA Y RESPONSABILIDAD SOCIAL -Congreso Internacional de Calidad Educativa URL: https://www.youtube.com/watch?v=W7y83cZ_s7g-->
<!--        </p>-->
<!--    </div>-->
<!--    <div class="card" style="visibility: hidden">-->
<!--        <iframe width="560" height="315" src="https://www.youtube.com/embed/W7y83cZ_s7g" frameborder="0"-->
<!--                                                                             allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
<!--        <h4>Dr. François Vallaeys</h4>-->
<!--        <p>-->
<!--            EConferencia: CALIDAD EDUCATIVA Y RESPONSABILIDAD SOCIAL -Congreso Internacional de Calidad Educativa URL: https://www.youtube.com/watch?v=W7y83cZ_s7g-->
<!--        </p>-->
<!--        </div>-->
<!--    <div class="card"  style="visibility: hidden">-->
<!--        <iframe width="560" height="315" src="https://www.youtube.com/embed/W7y83cZ_s7g" frameborder="0"-->
<!--                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
<!--        <h4>Dr. François Vallaeys</h4>-->
<!--        <p>-->
<!--            EConferencia: CALIDAD EDUCATIVA Y RESPONSABILIDAD SOCIAL -Congreso Internacional de Calidad Educativa URL: https://www.youtube.com/watch?v=W7y83cZ_s7g-->
<!--        </p>-->
<!--    </div>-->
<!---->
<!--    <div class="card"  style="">-->
<!--        <video width="560" height="315" co>-->
<!--            <source src="video/2020-03-23%2004-35-55.mp4" type="video/mp4">-->
<!--        </video>-->
<!--    </div>-->
<!---->
<!--</div>-->
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