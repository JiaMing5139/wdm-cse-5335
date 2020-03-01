






function afterLoadWindow() {
    showUserTag()
}

function showUserTag() {
    if(sessionStorage.getItem('username') != null){
        this.document.getElementById("userTag").style.display = "inline-block"
    }
}


this.window.onload = afterLoadWindow();

