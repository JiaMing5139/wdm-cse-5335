

function validate(){
    var username = document.forms["form1"]["username"];               
    var password = document.forms["form1"]["password"]; 
                
    if (username.value == "" || password.value == "" )
    {
        if (username.value == "")                                  
        { 
            window.alert("Javascript Validation: Please enter your username.");
        } 
                          
        if (password.value == "")                        
        { 
            window.alert("Javascript Validation: Please enter your password."); 
        } 
        
    
    }    
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(username.value.match(mailformat))
    {
        return true;
    }
    else if((!username.value.match(mailformat)) && username.value!="")
    {
        window.alert("You have entered an invalid email address!");
        return false;
    }

}

  function  openResponsive () {
    var x = document.getElementById("myTopnav");
    if (x.className === "nav-container") {
        x.className += " responsive";
    } else {
        x.className = "nav-container";
    }
}
function closePopupWindow() {
    const Popupwindow = this.document.getElementById("LoginWindow");
    let removeTarget = this.document.getElementById("popupWindow");
    let target;
    if (Popupwindow.contains(removeTarget)) {
        target = Popupwindow;
        removeTarget = this.document.getElementById("popupWindow");
    }else {
        target = this.document.getElementById("RegisterWindow");
        removeTarget = this.document.getElementById("BigPopupWindow");
    }
    if(target && removeTarget)
    target.removeChild(removeTarget)
}

function openLoginPopupWindow() { 
    if(!sessionStorage.getItem("name")){
        closePopupWindow() ; // only have on window at same time
        const Popupwindow = this.document.getElementById("LoginWindow");
        const  divPop = this.document.createElement("div");
        divPop.className = "InieteDeSesiem"
        divPop.id = "popupWindow"
        divPop.innerHTML ="<img id = 'close' onclick='closePopupWindow()' src='image/close.png'> </img>\n" +
            "    <form action=\"loginValidation.php\" name=\"form1\" method=\"post\">\n" +
            "<div class=\"content_container\">\n" +
            "    <img src='image/logo.png'>\n" +
            "    <h2>CENTRO AUGUSTO MIJARES </h2>\n" +
            "    <h3>Iniciar Sesion</S></h3>\n" +
            "    <div>\n" +
            "        <input type=\"email\" id=\"user\"  name=\"username\" placeholder=\"Nombre de Usuario o Correo\" required>\n" +
            "        <input type=\"password\" id=\"password\" name=\"password\" placeholder=\"Contrasena\" required>\n" +
            "        <div>\n" +
            "            <button class=\"submitbutton\" type=\"submit\" onclick=\"validate()\" value=\"ENTRAR\" id=\"submit\">ENTRAR</button>\n" +
            "        </div>\n" +
            "    </div>\n" +
            "</div>\n" +
            "</form>"
        Popupwindow.appendChild(divPop);
    }
    else
    {
        alert("Already logged in!!");
    }
}

function openRegisterWindow(){
    closePopupWindow() ;
    const Popupwindow = this.document.getElementById("RegisterWindow");
    const  divPop = this.document.createElement("div");
    divPop.className = "Registru"
    divPop.id = "BigPopupWindow"
    divPop.innerHTML = "  <img id = 'close' onclick='closePopupWindow()' src='image/close.png'> </img>\n" +
    "    <form action=\"register.php\" name=\"form2\" method=\"post\">\n" +
        "<div class=\"content_container\">\n" +
        "<img src=\"image/logo.png\">\n" +
        "<h4>Registro</h4>\n" +
        "\n" +
        "    <div class=\"col1\">\n" +
        "        <div align=\" left\">\n" +
        "            <div>\n" +
        "            <input placeholder=\"Nombre\" name=\"Fname\" required> <input type=\"email\" placeholder=\"Correo\" name=\"Email\" required>\n" +
        "            </div>\n" +
        "            <div>\n" +
        "                <input type=\"password\" placeholder=\"Contrasena\" id=\"pass\" name=\"password\" onkeyup=\"check();\" required> <input type=\"password\" placeholder=\"Repter Contrasena\" id=\"con-pass\" onkeyup=\"check();\" name=\"con-pass\" required>\n" +
        "                 <span id='message'></span>" +
        "            </div>\n" +
        "            <div>\n" +
        "                <input style=\"width: 750px\" placeholder=\"Direccion\" name=\"address\">\n" +
        "            </div>\n" +
        "            <div style=\"display: flex\">\n" +
        "                <button type=\"submit\" id=\"btn\" onclick=\"validateReg\" style=\"margin-left: 20px\" >Guardar</button>\n" +
        "            </div>\n" +
        "        </div>\n" +
        "        <div class=\"col2\">\n" +
        "            <img src=\"image/logo.png\">\n" +
        "            <h2>CENTRO AUGUSTO MIJARES</h2>\n" +
        "        </div>\n" +
        "\n" +
        "    </div>\n" +
        "</div>\n" +
        "</form>"
    Popupwindow.appendChild(divPop);

}


function validateReg(){
    var username = document.forms["form2"]["Fname"];
    var email = document.forms["form2"]["Email"];               
    var password = document.forms["form2"]["password"];  
    var con_pass= document.forms["form2"]["con-pass"];
                    
    if (username.value == "" || password.value == "" || email.value=="" || con_pass=="" )
    {
        if (username.value == "")                                  
        { 
            window.alert("Javascript Validation: Please enter your name.");
        } 
         
        if (email.value == "")                                  
        { 
            window.alert("Javascript Validation: Please enter your email.");
        }

        if (con-pass.value == "")                                  
        { 
            window.alert("Javascript Validation: Please enter confirm password");
        }

        if (password.value == "")                        
        { 
            window.alert("Javascript Validation: Please enter your password."); 
        } 
    }    
    return true;
}


var check = function() {

    if(!passwordRule(document.getElementById('pass').value)){
        document.getElementById('message').style.color = 'red';
        document.getElementById('message').innerHTML = 'Password should have 8 to 10  characters';
        return;
    }
    if (document.getElementById('pass').value ==
        document.getElementById('con-pass').value && document.getElementById('pass').value != '') {
        //document.getElementById('btn').disabled=false;  
        document.getElementById('message').style.color = 'green';
        document.getElementById('message').innerHTML = 'matching';
    } else {
        document.getElementById('message').style.color = 'red';
        document.getElementById('message').innerHTML = 'not matching';
    }
}

function passwordRule(pasw){
    console.assert(typeof pasw !== "string");
 //   var rule = '^(?=.*[\\w])(?=.*[\\W])[\\w\\W]{8,}$'
     return  pasw.length >= 8 &&  pasw.length <= 10;

}



