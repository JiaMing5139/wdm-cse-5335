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

    
    <!-- ----------------HTML Validation-------------------------------------------------------------------->
    <div class="table_container">
        <h3 id="clickedName" style="margin-left:350px;" >Contact Us</h3>
        <form action="contacts.php" method="post" class="form-container"> 
        <div>
            <div style="margin-bottom:20px;">
                <input type="text" id='name' name='name' style="height:25px; width:450px; margin-left:200px;" value='<?php echo $_SESSION["name"] ?>' required>
                 
            </div>
            <div style="margin-bottom:20px;">
                <input type='email' id='email' name='email' placeholder="Email" style="height:25px; width:450px; margin-left:200px;" required>
                
            </div>
            <div style="margin-bottom:20px;">
                <textarea id="message" name='message' placeholder="Your message" style="height: 100px; width:450px; margin-left:200px;" required></textarea>
            </div>
        <button type="submit" name="submit"  id="iddButton" style="height: 30px; width:150px; margin-left:350px;" onclick="validateform()" >Send Message</button>
    </div>
</div>
    
<?php 

echo '<script>
            function validateform()
            {
                var email = document.forms["form"]["email"];               
                var msg = document.forms["form"]["message"];  
                            
                if (email.value == "" || msg.value == ""  || (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email.value) == false))
                {
                    if (email.value == "")                                  
                    { 
                        window.alert("Javascript Validation: Email is required.");
                    } 
                                
                    if((/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email.value) == false))  
                    {
                        window.alert("Javascript Validation: E-mail address is not in valid formet.");
                    }
                    if (msg.value == "")
                    { 
                        window.alert("Javascript Validation: Message is required."); 
                    } 
                }    
                return true;
            }
        </script>';





if(isset ($_POST['submit']))
{
        
    $msg=$_POST["message"];
    $email=$_POST["email"];
    $name=$_POST["name"];
    $subject="Message from ".$email;
    
//    ----------------------------PHP Validation-------------------------------------------------------
    
    if(empty($name) or empty($email) or empty($msg) or (!filter_var($email, FILTER_VALIDATE_EMAIL)))
    {
        if(empty($name)) 
        {
            echo "<div class=\"work-quote\" style=\"margin-left: 550px\">Name is required</div>";
            echo "<br>";
        }

        if(empty($email)) 
        {
            echo "<div class=\"work-quote\" style=\"margin-left: 550px\">Email is required.</div>";
            echo"<br>";
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            echo "<div class=\"work-quote\" style=\"margin-left: 550px\">E-mail address is not in valid formet.</div>";
            echo "<br>";
        }
        if (empty($msg)) 
        {
            echo "<div class=\"work-quote\" style=\"margin-left: 550px\">Message is required.</div>";
            echo "<br>";
        }
    }
    else
    {
        require_once('phpmailer/PHPMailerAutoload.php');
        try
        {
            $mail=new PHPMailer(true);
            $mail->SMTPDebug = 2;
            $mail->SMTPAuth=true;
            $mail->SMTPSecure='ssl';
            $mail->Host='smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Port=465;
            $mail->isHTML();
            $mail->Username='centro.mijares@gmail.com';
            $mail->Password='abcd1234@';
            $mail->Subject=$subject;
            $mail->SetFrom("ashutoshmehta65@gmail.com", $name);
            $mail->Body=$msg;
            $mail->AddAddress('centro.mijares@gmail.com');
            $mail->send();
        }
        catch(Exception $e){
            echo $e->getMessage();
        }    
    }
}
?>


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


