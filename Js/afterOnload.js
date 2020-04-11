






function afterLoadWindow() {
    showUserTag()
}

function showUserTag() {
    if(sessionStorage.getItem('name')){
        console.log(sessionStorage.getItem('name'));
        this.document.getElementById("userTag").style.display = "inline-block"
    }
}

function ifLogin() {
    if(sessionStorage.getItem("name")){

    }
}

this.window.onload = afterLoadWindow();

