if(sessionStorage.getItem('username')==null){
    console.log("openLoginPopupWindow")
    openLoginPopupWindow();
}






function openLoginPopupWindow() {
    const Popupwindow = this.document.getElementById("PopUp");
    const  divPop = this.document.createElement("div");
    divPop.className = "InieteDeSesiem"
    divPop.id = "popupWindow"
    divPop.innerHTML ="    <img id = 'close' onclick='closePopupWindow()' src='static/close.png'> </img>\n" +
        "    <form action=\"\" method=\"post\">\n" +
        "<div class=\"content_container\">\n" +
        "    <img src=\"static/logo.png\">\n" +
        "    <h2>CENTRO AUGUSTO MIJARES </h2>\n" +
        "    <h3>Iniciar Sesion</S></h3>\n" +
        "    <div>\n" +
        "        <input type=\"text\" id=\"user\" placeholder=\"Nombre de Usuario o Correo\">\n" +
        "        <input type=\"password\" id=\"password\"  placeholder=\"Contrasena\">\n" +
        "        <div>\n" +
        "            <button class=\"submitbutton\" type=\"button\" value=\"ENTRAR\" id=\"submit\" onclick=\"validate()\">ENTRAR</button>\n" +
        "        </div>\n" +
        "    </div>\n" +
        "</div>\n" +
        "</form>"
     Popupwindow.appendChild(divPop);

}

function closePopupWindow() {
    const Popupwindow = this.document.getElementById("PopUp");
    const removeTarget = this.document.getElementById("popupWindow");
    Popupwindow.removeChild(removeTarget)
}

