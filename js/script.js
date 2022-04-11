console.log("cool games");
const xhttp = new XMLHttpRequest();
const games = document.getElementById("games");
xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var object = JSON.parse(xhttp.responseText);
        var data = [];
        for (var i in object) {
            data.push(object[i]);
        }
        console.log(data);
        var div = document.createElement("div");
        div.innerText = "bruhhhhhhhhh";
        games.append(div);
    }
};
xhttp.open("GET", "app/database.php", true);
xhttp.send();