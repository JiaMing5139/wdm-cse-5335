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
    <a href="videos.html">videos</a>
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
        include "query.php";
        if($result = queryEvents()){
            echo '    <div class="titleLogo">
         <h1>Here are all the events</h1>
          <h1>please check them!</h1>
                </div>';

                 while ($row = $result->fetch_assoc()) {

                      echo '  <div id="row">
        <div style="vertical-align: top">
            <p> Event Type:<br>
                '.$row["EventType"].'
            </p>
             <p> Description:<br>
                '.$row["EventDescription"].'
            </p>
               <p> Date:<br>
                '.$row["Date"].'
            </p>
      
        </div>
        <img src="image/evento.png" alt="">
    </div>
    </div>';

                 }

        }else {

        }
    ?>
<!--    <div class="titleLogo">-->
<!--        <h1>MAESTRÍA EN GERENCIA DEL</h1>-->
<!--        <h1>TURISMO SOSTENIBLE</h1>-->
<!--    </div>-->

<!--    <div id="row">-->
<!--        <div >-->
<!--            <p> El Programa de Postrado Maestría en Gerencia del Turismo-->
<!--            Sostenible es una oportunidad de formación y actualización-->
<!--            profesional para el desarrollo del turismo en el Siglo XXI.-->
<!--            El Programa está integrado por las siguientes unidades curriculares:-->
<!--            Legislación Turística, Patrimonio Natural y Cultural, Mercadeo -->
<!--            Turístico Sostenible, Promoción del Turismo Sostenible, Formulación -->
<!--            y Evaluación de Proyectos de Turismo Sostenible, Comercialización y -->
<!--            Venta de Productos Turísticos Sostenibles, Legislación ambiental, -->
<!--            Educación Ambiental, Economía Ambiental, Planificación del Desarrollo -->
<!--            Turístico Sostenible, Turismo Sostenible y participación comunitaria. -->
<!--            Las líneas de investigación y generación de conocimiento de este programa -->
<!--            son: Turismo y Medioambiente; Planificación del Desarrollo Turístico -->
<!--            Sostenible; Patrimonio Cultural; Calidad y Certificación de la Sostenibilidad-->
<!--            Turística; Gestión de los Recursos Humanos en Empresas Turísticas. -->
<!--            Requisitos Académicos: Título Universitario de Pregrado Localidad: Isla de Margarita-->
<!--            </p>-->
<!--            <p>-->
<!--            Los Interesados deben enviar sus datos a :    -->
<!--            </p>-->
<!--            <p>-->
<!--            Dr. Rafael Torrealba (ULAC) No. Teléf. 0414-4650138 . Correo: raftor535@hotmail.com-->
<!--            Tamara Malaver (Centro Augusto Mijares) No. Télef. 0426-5864477.-->
<!--            Correo: tamaramalaver@gmail.com; centroaugustomijares@gmail.com-->
<!--            </p>-->
<!--            <p>-->
<!--            Programa de Postgrado aprobado por el Consejo Nacional de-->
<!--            Universidades (CNU): Resolución 063, Publicada en Gaceta Oficial-->
<!--            No.38.651 del 23 03 2007-->
<!--            </p>-->
<!--            <p>-->
<!--            Se reciben preinscripciones hasta el 15/04/2016-->
<!--            </p>-->
<!--            <p>-->
<!--            Saludos, gracias por difundir esta oferta académica y contribuir así con el desarrollo humano de nuestra gente.-->
<!--            </p>-->
<!--        </div>-->
<!--        <img src="image/evento.png" alt="">-->
<!--    </div>-->
<!--    </div>-->
<!---->
<!--</div>-->
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