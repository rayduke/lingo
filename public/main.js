if (typeof i == 'undefined') {
        var i = 0;
        var a = 0;
 
}  
var woordGuess = new Array();  

 
function letterkeus(id){
                console.log(i);
   
                
                woordGuess[i] = document.getElementById("vak"+a+""+i).innerText = id;
                
                
                
           
//                var element = document.getElementById("vak0"+i).innerText = id;
                
                
                if(i == 4){
                    a++;
//                  
                    console.log(i);
                    console.log(a);
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
                return i=0;
                
                
    
                }else{
                     
                 
                i++;

              
                } 


}   



function ontvangenAntwoord(){

            var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var myObj = JSON.parse(this.responseText);
                document.getElementById("demo").innerHTML = myObj.name;
            }
        };
        xmlhttp.open("GET", "gamecheck.php", true);
        xmlhttp.send();
    
}



function playLetter(){
    //speelt de gekozen letter af bij het indrukken van een letter.
    
}


function veranderkleur(){
    //verandert kleur na vergelijking met het woord. 
}
