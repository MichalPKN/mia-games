console.log("cool games");
const xhttp = new XMLHttpRequest();
const games = document.getElementById("games");
xhttp.onreadystatechange = function generateHTML() {
    if (this.readyState == 4 && this.status == 200) {
        console.log(xhttp.responseText);
        var object = JSON.parse(xhttp.responseText);
        var data = [];
        for (var i in object) {
            data.push(object[i]);
        }
        console.log(data);
        for (let game of data) {
            console.log(game)
            var div = document.createElement("div");
            div.className = "game";
            var h2 = document.createElement("h2");
            h2.innerText = game["name"];
            var p = document.createElement("p");
            p.innerText = game["description"];
            div.append(h2, p)
            if (game["img"]) {
                var img = document.createElement("img");
                img.src = "data/img/" + game["img"];
                div.append(img)
            }
            games.append(div);
        }
    }
};
xhttp.open("GET", "json", true);
xhttp.send();