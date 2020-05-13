//Window object
//show messag

window.alert("Nebras Babakan");

function ShowMessage(msg) {

    document.getElementById("message").innerHTML += "<p>" + msg + "</p>";
}

//function alert

function alert(msg) {
    var today2 = new Date();
    ShowMessage("Aktuelle Bilder ");
}


