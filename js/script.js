const games = document.getElementById("games");

// sends a XML HTTP request to /json
const xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function generateHTML() {
    if (this.readyState == 4 && this.status == 200) {

        // gets response from server and cuts non-json string (because of web hosting add)
        var response = xhttp.responseText.substring(
            xhttp.responseText.indexOf("[{"),
            xhttp.responseText.lastIndexOf("}]") + 2
        );
        console.log(response);

        // gets json from XML HTTP response and converts it to array
        var object = JSON.parse(response);
        var data = [];
        for (var i in object) {
            data.push(object[i]);
        }
        console.log(data);

        // for each game in array creates html and adds it to games div
        for (let game of data) {
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