    if (typeof i == 'undefined') {
        var i = 0;
    
}        
   
function letterkeus(id){
 
        var data = {Id:id}
//              
//                i = i + id;
//                alert(i);
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function(){
                    if(xhttp.readyState == 4 && xhttp.status == 200) {
     
//               alert(this.responseText);
                
                var element = document.getElementById("vak0"+i).innerText = id; 
                    if(i == 4){
                        var woordguess = [];
                        
                        
                        
                    }else{
                        i++;
                    } 
                 
                    }
                };
                data = JSON.stringify(data);                
                xhttp.open("POST", 'gamecheck.php', true);
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhttp.send("data="+data);
                
         
    }

    
    
//    var html = document.getElementsByTagName("html");
// 
//    var http = new XMLHttpRequest();
//    var url = "game.php?letter="+id;
////    var params = "letter="+id;   
////              "boot.php?cora="+a+b
//        http.open("GET", url, true);
//
//                
//        http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
//
//        http.onreadystatechange = function() {
//            if(http.readyState == 4 && http.status == 200) {
//                html[0].children[1].children[1].children[1].children[0].children[0].children[0].children[0].innerText = id;
//                console.log(id);
//            }
//        };
//            http.send(id);
//}

function signup(){
    window.location.href = "signup.php";
}