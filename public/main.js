            
            
function letterkeus(id){
    var html = document.getElementsByTagName("html");
 
    var http = new XMLHttpRequest();
    var url = "game.php";
    var params = "letter="+id;
        http.open("GET", url, true);

                
        http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

        http.onreadystatechange = function() {
            if(http.readyState == 4 && http.status == 200) {
                html[0].children[1].children[1].children[1].children[0].children[0].children[0].children[0].innerText = id;
                console.log(id);
            }
        };
            http.send(params);
}

function signup(){
    window.location.href = "signup.php";
}