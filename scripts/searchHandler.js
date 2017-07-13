function searchFunction(str) {
    if (str === "") {
        document.getElementById("results").innerHTML = "";
        return;
    } else {
        var xmlhttp;
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function () {
            if (this.readyState === 4 && this.status === 200) {
                document.getElementById("results").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "http://localhost/p1.4/proj/Fanstille/model/search_process.php?q=" + str, true);
        xmlhttp.send();
    }
}