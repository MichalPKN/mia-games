console.log("cool games");
const xhttp = new XMLHttpRequest();
const games = document.getElementById("games");
const body = document.body;
xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var object = JSON.parse(xhttp.responseText);
        var data = [];
        for (var i in object) {
            data.push(object[i]);
        }
        console.log(data);
        var div = document.createElement("div");
        div.className = "game";
        div.innerText = "bruhhhhhhhhh";
        console.log(div);
        games.append(div);


    }
    console.log(games);
};
xhttp.open("GET", "app/database.php", true);
xhttp.send();