function validate(){
var username = document.getElementById("user").value;
var password = document.getElementById("password").value;
if ( username == "abcd" && password == "abcd"){
sessionStorage.setItem("username",username);    
window.location = "inicio.html"; // Redirecting to other page.
return false;
}
else{
    alert("Invalid Credentials")
}
}