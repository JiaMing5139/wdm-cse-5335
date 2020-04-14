<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>proyectos</title>
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
    <a href="proyectos.php" style="color: #454cde">proyectos</a>
    <a href="eventos.php">eventos</a>
     <a href="http://jxp8516.uta.cloud/wordpress/">blog</a>
    <a href="videos.php">videos</a>
    <a href="equipo.html">equipo</a>
    <a onclick="openLoginPopupWindow()">Iniete De Sesiem</a>
    <a onclick="openRegisterWindow()">Registru</a>
    <a href="project.php" id="userTag" style="display: none">User</a>
    <a href="javascript:void(0);" class="icon" onclick="openResponsive()">
        <i class="fa fa-bars"></i>
    </a>
</div >
<div id="wrapper" class="proyectos">


    <?php
    include 'query.php';
   if($result = queryProject()){
    $rowcount=mysqli_num_rows($result);
    if($rowcount === 0) {

        echo  '<div>
    <div class="Heading">
        <img src="image/logo.png" alt="">
        <h2>Add a new project right now</h2>
        <h2>register your new account!</h2>
    </div>
</div>';
    }
    else
        echo  '<div>
    <div class="Heading">
        <img src="image/logo.png" alt="">
        <h2>All the projects is here!</h2>
        <h2>check the projects</h2>
    </div>
</div>';
    while ($row = $result->fetch_assoc()) {

    echo '<div id="row1">
    <img style="width: 500px ; height: 400px" src="'.$row["imgUrl"] .'" alt="" />
    <div style="vertical-align: top">
        <h3>'. $row["ProjectName"] .'
        <p>description:<p>
        <p>'. $row["ProjectDescription"] .'
        </p>
    </div>
</div>';
     }
   }else{
   echo '    <h3 class="Heading">Query data failed ,please try again! or contact admin</h3>';
   }
  ?>
<!--<div id="row2">-->
<!--    <div>-->
<!--        <p><b>Investigación:</b> Realizar investigación para comprender el impacto-->
<!--            de las empresas y las organizaciones en la creación de sostenibilidad-->
<!--            social y ambiental y valor económico.-->
<!--        </p>-->
<!--        <p><b>Asociación:</b> Interactuar con los actores sociales para asumir los-->
<!--            desafíos de la comunidad y sus organizaciones en materia de-->
<!--            responsabilidad social y ambiental.-->
<!--        </p>-->
<!--        <p><b>Diálogo:</b> Promover el diálogo y debate de todas las partes interesadas-->
<!--            sobre cuestiones criticas relacionadas con sostenibilidad y responsabilidad social.-->
<!--            Teniendo en cuenta estos principios, una posibilidad de implicar la responsabilidad-->
<!--            social en la universidad es a través del Servicio Comunitario. El propósito es que-->
<!--            esta actividad sea un punto de partida para la gestión y desarrollo de proyectos que-->
<!--            vaya en mejora de la calidad de vida del ciudadano dentro de la universidad y en la-->
<!--            sociedad donde este hace vida.Actualmente, el Centro Augusto Mijares tiene en marcha-->
<!--            una Propuesta de Responsabilidad Social – Desarrollo Humano Sustentable en la Universidad de Oriente.-->
<!--            La ejecución de este proyecto sería una oportunidad clave para llevar a la práctica el lema “Del pueblo-->
<!--            venimos / hacia el pueblo vamos” que sirve de norte a esta Casa de Estudios Superiores.-->
<!--        </p>-->
<!--        <button class="button1" type="button">Leer Mas</button>-->
<!--    </div>-->
<!--    <img src="image/descarga.jpg" alt="" />-->
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