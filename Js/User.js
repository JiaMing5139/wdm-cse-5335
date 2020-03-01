function signout() {
    sessionStorage.removeItem("username")
    window.location.replace("inicio.html")
}

function projectClick() {
   const table =  this.document.getElementById("displayTag");
   const Name =  this.document.getElementById("clickedName");
   Name.innerText = 'Project'
    table.innerHTML = "    <tr>\n" +
        "                <th>Project ID</th>\n" +
        "                <th>Title</th>\n" +
        "                <th>Leader</th>\n" +
        "                <th>Description</th>\n" +
        "                <th>Edit</th>\n" +
        "            </tr>\n" +
        "            <tr>\n" +
        "                <td>1</td>\n" +
        "                <td>Project1</td>\n" +
        "                <td>Germany</td>\n" +
        "                <td>Test text Test text Test text Test text Test text Test text Test text Test text Test text</td>\n" +
        "                <td><button>edit</button></td>\n" +
        "            </tr>\n" +
        "            <tr>\n" +
        "                <td>2</td>\n" +
        "                <td>Project2</td>\n" +
        "                <td>Mexico</td>\n" +
        "                <td>Test text Test text Test text Test text Test text Test text Test text Test text Test text</td>\n" +
        "                <td><button>edit</button></td>\n" +
        "            </tr>\n" +
        "            <tr>\n" +
        "                <td>3</td>\n" +
        "                <td>Project3</td>\n" +
        "                <td>Austria</td>\n" +
        "                <td>Test text Test text Test text Test text Test text Test text Test text Test text Test text</td>\n" +
        "                <td><button>edit</button></td>\n" +
        "            </tr>\n"+
        "            <tr>\n" +
        "                <td>3</td>\n" +
        "                <td>Project4</td>\n" +
        "                <td>Austria</td>\n" +
        "                <td>Test text Test text Test text Test text Test text Test text Test text Test text Test text</td>\n" +
        "                <td><button>edit</button></td>\n" +
        "            </tr>\n"+
        "            <tr>\n" +
        "                <td>4</td>\n" +
        "                <td>Project5</td>\n" +
        "                <td>Austria</td>\n" +
        "                <td>Test text Test text Test text Test text Test text Test text Test text Test text Test text</td>\n" +
        "                <td><button>edit</button></td>\n" +
        "            </tr>\n"

}

function eventClick() {

    const table =  this.document.getElementById("displayTag");
    const Name =  this.document.getElementById("clickedName");
    Name.innerText = 'Event'
    table.innerHTML = "    <tr>\n" +
        "                <th>Event ID</th>\n" +
        "                <th>Title</th>\n" +
        "                <th>Time</th>\n" +
        "                <th>Description</th>\n" +
        "                <th>Edit</th>\n" +
        "            </tr>\n" +
        "            <tr>\n" +
        "                <td>1</td>\n" +
        "                <td>Event1</td>\n" +
        "                <td>Monday</td>\n" +
        "                <td>Test text Test text Test text Test text Test text Test text Test text Test text Test text</td>\n" +
        "                <td><button>edit</button></td>\n" +
        "            </tr>\n" +
        "            <tr>\n" +
        "                <td>2</td>\n" +
        "                <td>Event2</td>\n" +
        "                <td>Tuesday</td>\n" +
        "                <td>Test text Test text Test text Test text Test text Test text Test text Test text Test text</td>\n" +
        "                <td><button>edit</button></td>\n" +
        "            </tr>\n" +
        "            <tr>\n" +
        "                <td>3</td>\n" +
        "                <td>Event3</td>\n" +
        "                <td>Sunday</td>\n" +
        "                <td>Test text Test text Test text Test text Test text Test text Test text Test text Test text</td>\n" +
        "                <td><button>edit</button></td>\n" +
        "            </tr>\n"+
        "            <tr>\n" +
        "                <td>3</td>\n" +
        "                <td>Event4</td>\n" +
        "                <td>Friday</td>\n" +
        "                <td>Test text Test text Test text Test text Test text Test text Test text Test text Test text</td>\n" +
        "                <td><button>edit</button></td>\n" +
        "            </tr>\n"+
        "            <tr>\n" +
        "                <td>4</td>\n" +
        "                <td>Event5</td>\n" +
        "                <td>Monday</td>\n" +
        "                <td>Test text Test text Test text Test text Test text Test text Test text Test text Test text</td>\n" +
        "                <td><button>edit</button></td>\n" +
        "            </tr>\n"+
    "            <tr>\n" +
    "                <td>4</td>\n" +
    "                <td>Event6</td>\n" +
    "                <td>Monday</td>\n" +
    "                <td>Test text Test text Test text Test text Test text Test text Test text Test text Test text</td>\n" +
    "                <td><button>edit</button></td>\n" +
    "            </tr>\n"+
    "            <tr>\n" +
    "                <td>4</td>\n" +
    "                <td>Event7</td>\n" +
    "                <td>Monday</td>\n" +
    "                <td>Test text Test text Test text Test text Test text Test text Test text Test text Test text</td>\n" +
    "                <td><button>edit</button></td>\n" +
    "            </tr>\n"

}

function contactClick() {
    const table =  this.document.getElementById("displayTag");
    const Name =  this.document.getElementById("clickedName");
    Name.innerText = 'Contact'
    table.innerHTML = "    <tr>\n" +
        "                <th>Name</th>\n" +
        "                <th>Phone</th>\n" +
        "                <th>emailaddress</th>\n" +
        "                <th>Edit</th>\n" +
        "            </tr>\n" +
        "            <tr>\n" +
        "                <td>Alfreds Futterkiste</td>\n" +
        "                <td>6822394212</td>\n" +
        "                <td>home@gmail.com</td>\n" +
        "                <td><button>edit</button></td>\n" +
        "            </tr>\n" +
        "            <tr>\n" +
        "                <td>Centro comercial Moctezuma</td>\n" +
        "                <td>6822394212</td>\n" +
        "                <td>home@gmail.com</td>\n" +
        "                <td><button>edit</button></td>\n" +
        "            </tr>\n" +
        "            <tr>\n" +
        "                <td>Ernst Handel</td>\n" +
        "                <td>R6822394212</td>\n" +
        "                <td>home@gmail.com</td>\n" +
        "                <td><button>edit</button></td>\n" +
        "            </tr>\n"
}

function refresUserName() {
   const name =  sessionStorage.getItem("username")
    nameString = name?"User:" +  name:"User:" + "Null"
    this.document.getElementById('username').innerText = nameString
}