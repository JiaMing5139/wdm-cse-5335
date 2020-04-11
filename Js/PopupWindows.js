

// function validate(){
//     console.log("vaildate")
//     var username = document.getElementById("user").value;
//     var password = document.getElementById("password").value;
//     window.location.replace("User.html")
//     if ( username == "abcd" && password == "abcd"){
//         sessionStorage.setItem("username",username);

// }

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
    closePopupWindow() ; // only have on window at same time
    const Popupwindow = this.document.getElementById("LoginWindow");
    const  divPop = this.document.createElement("div");
    divPop.className = "InieteDeSesiem"
    divPop.id = "popupWindow"
    divPop.innerHTML ="<img id = 'close' onclick='closePopupWindow()' src='image/close.png'> </img>\n" +
        "    <form action=\"loginValidation.php\" method=\"post\">\n" +
        "<div class=\"content_container\">\n" +
        "    <img src='image/logo.png'>\n" +
        "    <h2>CENTRO AUGUSTO MIJARES </h2>\n" +
        "    <h3>Iniciar Sesion</S></h3>\n" +
        "    <div>\n" +
        "        <input type=\"text\" id=\"user\"  name=\"username\" placeholder=\"Nombre de Usuario o Correo\">\n" +
        "        <input type=\"password\" id=\"password\" name=\"password\" placeholder=\"Contrasena\">\n" +
        "        <div>\n" +
        "            <button class=\"submitbutton\" type=\"submit\" value=\"ENTRAR\" id=\"submit\">ENTRAR</button>\n" +
        "        </div>\n" +
        "    </div>\n" +
        "</div>\n" +
        "</form>"
     Popupwindow.appendChild(divPop);

}

function openRegisterWindow(){
    closePopupWindow() ;
    const Popupwindow = this.document.getElementById("RegisterWindow");
    const  divPop = this.document.createElement("div");
    divPop.className = "Registru"
    divPop.id = "BigPopupWindow"
    divPop.innerHTML = "  <img id = 'close' onclick='closePopupWindow()' src='image/close.png'> </img>\n" +
    "    <form action=\"register.php\" method=\"post\">\n" +
        "<div class=\"content_container\">\n" +
        "<img src=\"image/logo.png\">\n" +
        "<h4>Registro</h4>\n" +
        "\n" +
        "    <div class=\"col1\">\n" +
        "        <div>\n" +
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
        "                <button type=\"submit\" id=\"btn\" style=\"margin-left: 20px\" disabled>Guardar</button>\n" +
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

var check = function() {
    if (document.getElementById('pass').value ==
      document.getElementById('con-pass').value) {
        document.getElementById('btn').disabled=false;  
      document.getElementById('message').style.color = 'green';    
      document.getElementById('message').innerHTML = 'matching';
    } else {
      document.getElementById('message').style.color = 'red';
      document.getElementById('message').innerHTML = 'not matching';
    }
  }

