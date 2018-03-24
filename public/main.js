if (typeof i == 'undefined') {
        var i = 0;
 
}  
var woordGuess = new Array();  

 
function letterkeus(id){
                woordGuess[i] = document.getElementById("vak0"+i).innerText = id;
                
                
                   
                var element = document.getElementById("vak0"+i).innerText = id;
                
                
                if(i == 4){
                    
                    var data = woordGuess
                    var xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function(){
                    if(xhttp.readyState == 4 && xhttp.status == 200) {
                        
                    document.getElementById("fetcharray").innerHTML = this.responseText;
                    }
                };
                data = JSON.stringify(data);                
                xhttp.open("POST", 'gamecheck.php', true);
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhttp.send("data="+data);
                console.log(data);
    
                }else{
                     
                 
                i++;

              
                } 


}   


function signup(){
    window.location.href = "signup.php";
}

function checkGuess(){
    
   
}