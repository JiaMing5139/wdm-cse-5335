<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Equipo</title>
    <link rel="stylesheet" type="text/css" href="style/mijares.css">
    <script type="text/javascript" src="Js/PopupWindows.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<!--    <script>-->
<!--        if(sessionStorage.getItem('username')==null){-->
<!---->
<?php
//    if(empty($_SESSION["name"])){?>
<!--        <script>-->
<!--            sessionStorage.setItem("name",0);-->
<!--        </script>-->
<!--    --><?php
//    }
//    else{ ?>
<!--        <script>sessionStorage.setItem("name",1);</script>-->
<!--    --><?php
//    }
//?>

<div class="nav-container" id="myTopnav">
    <img src="image/logo.png">
    <a href="index.html">inicio</a>
    <a href="semblanza.html">semblanza</a>
    <a href="centro augusto mijares.html">centro augusto mijares</a>
    <a href="proyectos.php">proyectos</a>
    <a href="eventos.php">eventos</a>
     <a href="http://jxp8516.uta.cloud/wordpress/">blog</a>
    <a href="videos.html">videos</a>
    <a href="equipo.php"style="color: #454cde">equipo</a>
    <a onclick="openLoginPopupWindow()">Iniete De Sesiem</a>
    <a onclick="openRegisterWindow()">Registru</a>
    <a href="project.php" id="userTag" style="display: none">User</a>
    <a href="javascript:void(0);" class="icon" onclick="openResponsive()">
        <i class="fa fa-bars"></i>
    </a>
</div >
<script>
    if(sessionStorage.getItem("name")==0)
    {
        document.getElementById("userTag").style.display="none";
    }
</script>

<div id="wrapper" class="equipo">
<div id="a">
    <img src="image/logo.png" alt="">
    <h2>SOMOS UN EQUIPO INTERDISCIPLINARIO</h2>
</div>
<div id="row1">
    <figure id="img">
        <img src="image/foto1.png" alt=""/>
        <figcaption> <b>ALEX RODRÍGUEZ D.</b><br><br>Lic. en Administración, Magister en Turismo,<br>
            Mención Mercadeo Turístico;<br> 
            Experiencia como docente universitario<br> 
            y promotor de emprendedores.<br>
            Teléf.: 0416-5971407<br>
            E-mail: arcaro0460@hotmail.com
        </figcaption>
      </figure>
    
    <figure id="img">
        <img src="image/foto2.png" alt=""/>
        <figcaption> <b>GISELA QUINTERO B.</b><br><br>Psicólogo amplia experiencia en desarrollo<br> 
            organizacional, gestión y desarrollo de<br>
            talento humano en instituciones públicas y 
            empresas privadas.<br>
            Teléf.: 0416-4957513<br>
            E-mail: mariaberroteranmaluenga@gmail.com<br>    
        </figcaption>
    </figure>
      
    <figure id="img">
        <img src="image/foto3.png" alt=""/>
        <figcaption> <b>JUDITH P. ALVARADO J.</b><br><br>Maestra, Actriz, Directora, Autora de Textos <br>
            Teatrales, Maestra de Actuación, Teatrista.<br>
            Teléf.: 0416-1949369<br>
            E-mail: juditha.alvarado@gmail.com    
        </figcaption>
    </figure>    
</div>


<div id="row2">
    <figure id="img">
        <img src="image/foto4.png" alt=""/>
        <figcaption> <b>ALEX RODRÍGUEZ D.</b><br><br>Lic. en Administración, Magister en Turismo,<br>
            Mención Mercadeo Turístico;<br> 
            Experiencia como docente universitario<br> 
            y promotor de emprendedores.<br>
            Teléf.: 0416-5971407<br>
            E-mail: arcaro0460@hotmail.com
        </figcaption>
      </figure>
    
    <figure id="img">
        <img src="image/foto5.png" alt=""/>
        <figcaption> <b>TAMARA MALAVER</b><br><br>Lic. en Relaciones Industriales, Magister<br> 
            en Gerencia de Empresas, Egresada del V <br>
            Programa PNUD de Formación en <br>
            Responsabilidad Social Empresarial;<br> experiencia en desarrollo
            organizacional,<br> gestión humana, docencia y
            promoción de<br> proyectos comunitarias.<br>
            Teléf.: 0426-5864477 <br>
            E-mail: tamaramalaver@gmail.com

        </figcaption>
    </figure>
      
    <figure id="img">
        <img src="image/foto6.png" alt=""/>
        <figcaption> <b>TERESITA GONZÁLEZ</b><br><br>Lic. en Sociología, Magister en Educación, <br>
            amplia experiencia en educación de nivel<br>
            medio y universitaria, promotora de la<br>
            estrategia pedagógica: Filosofía para Niños<br>
            Teléf.: 0412-0960917<br>
            E-mail: teresitadelacruz@gmail.com    
        </figcaption>
    </figure>
    
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
<script type="text/javascript" src="Js/afterOnload.js"></script>