function getCocktails() {
    var sortBy = document.getElementById('sortDrinks').value;
    var changeItem = "action=getCocktails"+"&sortBy="+sortBy;
    var xmlhttp = xmlRequest();
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            var changed_values = JSON.parse(xmlhttp.response); //todo:: auf undefined als type überpfüfen!
            console.log(changed_values);

        }
    };
    xmlhttp.open("POST", "index.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send(changeItem);
}