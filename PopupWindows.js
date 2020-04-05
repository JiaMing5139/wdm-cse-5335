

function validate(){
    console.log("vaildate")
    var username = document.getElementById("user").value;
    var password = document.getElementById("password").value;
    window.location.replace("User.html")
// if ( username == "abcd" && password == "abcd"){
    sessionStorage.setItem("username",username);

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

function openLoginPopupWindow(y) {  
    var x=document.body.innerHTML+"<div id=\"popup3\" class=\"overlay\">"+
    "<div class=\"popup3\">"+ 
        "<a class=\"close\" href=\"#\">&times;</a>"+
        "<div class=\"content_container\">\n" +
        "<img src=\"image/logo.png\">\n" +
        "<h4>Registro</h4>\n" +
        "\n" +
        "    <div class=\"col1\">\n" +
        "        <div>\n" +
        "            <div>\n" +
        "            <input placeholder=\"Nombre\"> <input placeholder=\"Correo\"><br><br>\n" +
        "            </div>\n" +
        "            <div>\n" +
        "                <input placeholder=\"Contrasena\"> <input placeholder=\"Repter Contrasena\"><br><br>\n" +
        "            </div>\n" +
        "            <div>\n" +
        "                <input style=\"width: 40%;\" placeholder=\"Direccion\"><br><br>\n" +
        "            </div>\n" +
        "            <div style=\"display: flex\">\n" +
        "                <button style=\"margin-left:0px\">Guardar</button><br><br>\n" +
        "            </div>\n" +
        "        </div>\n" +
        "        <div class=\"col2\" style=\"width:300px;float:right;position:absolute;top:40px;right:50px;\">\n" +
        "            <img src=\"image/logo.png\">\n" +
        "            <h2>CENTRO AUGUSTO MIJARES</h2>\n" +
        "        </div>\n" +
        "\n" +
        "    </div>\n" +
        "</div>"+
    "</div>"+
"</div>";
    document.body.innerHTML=x;

}

function openRegisterWindow(){
    closePopupWindow() ;
    const Popupwindow = this.document.getElementById("RegisterWindow");
    const  divPop = this.document.createElement("div");
    divPop.className = "Registru"
    divPop.id = "BigPopupWindow"
    divPop.innerHTML = "  <img id = 'close' onclick='closePopupWindow()' src='image/close.png'> </img>\n" +
        "<div class=\"content_container\">\n" +
        "<img src=\"image/logo.png\">\n" +
        "<h4>Registro</h4>\n" +
        "\n" +
        "    <div class=\"col1\">\n" +
        "        <div>\n" +
        "            <div>\n" +
        "            <input placeholder=\"Nombre\"> <input placeholder=\"Correo\">\n" +
        "            </div>\n" +
        "            <div>\n" +
        "                <input placeholder=\"Contrasena\"> <input placeholder=\"Repter Contrasena\">\n" +
        "            </div>\n" +
        "            <div>\n" +
        "                <input style=\"width: 750px\" placeholder=\"Direccion\">\n" +
        "            </div>\n" +
        "            <div style=\"display: flex\">\n" +
        "                <button style=\"margin-left: 20px\">Guardar</button>\n" +
        "            </div>\n" +
        "        </div>\n" +
        "        <div class=\"col2\">\n" +
        "            <img src=\"image/logo.png\">\n" +
        "            <h2>CENTRO AUGUSTO MIJARES</h2>\n" +
        "        </div>\n" +
        "\n" +
        "    </div>\n" +
        "</div>"

    Popupwindow.appendChild(divPop);

}



