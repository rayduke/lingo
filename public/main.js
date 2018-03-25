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
                if( i == 5 ){
                    a = 0;
//                    window.location.reload();
                }
                
                return i=0;
               
                
                
    
                }else{
                     
                 
                i++;

              
                } 


}   

//
//
//function ontvangenAntwoord(){
//
//            var xmlhttp = new XMLHttpRequest();
//        xmlhttp.onreadystatechange = function() {
//            if (this.readyState == 4 && this.status == 200) {
//                var myObj = JSON.parse(this.responseText);
//                document.getElementById("demo").innerHTML = myObj.name;
//            }
//        };
//        xmlhttp.open("GET", "gamecheck.php", true);
//        xmlhttp.send();
//    
//}

function audioafspelen(){
    
}

function letterafspelen(id){


    switch (id){
        case 'A':   
                    var audio = new Audio('audio/a.mp3');
                    audio.play();
                    break;
                    
        case 'B':   
                    var audio = new Audio('audio/b.mp3');
                    audio.play();
                    break;
                    
        case 'C':   
                    var audio = new Audio('audio/c.mp3');
                    audio.play();
                    break;
        case 'D':   
                    var audio = new Audio('audio/d.mp3');
                    audio.play();
                    break;
                    
        case 'E':   
                    var audio = new Audio('audio/e.mp3');
                    audio.play();
                    break;
                    
        case 'F':   
                    var audio = new Audio('audio/f.mp3');
                    audio.play();
                    break;
                    
        case 'G':   
                    var audio = new Audio('audio/g.mp3');
                    audio.play();
                    break;
        case 'H':   
                    var audio = new Audio('audio/h.mp3');
                    audio.play(); 
                    break;
        case 'I':   
                    var audio = new Audio('audio/i.mp3');
                    audio.play();
                    break;
                    
        case 'J':   
                    var audio = new Audio('audio/j.mp3');
                    audio.play();
                    break;
                    
        case 'K':   
                    var audio = new Audio('audio/k.mp3');
                    audio.play();
                    break;
        case 'L':   
                    var audio = new Audio('audio/l.mp3');
                    audio.play();
                    break;
                    
        case 'M':   
                    var audio = new Audio('audio/m.mp3');
                    audio.play();
                    break;
                    
        case 'N':   
                    var audio = new Audio('audio/n.mp3');
                    audio.play();
                    break;
                    
        case 'O':   
                    var audio = new Audio('audio/o.mp3');
                    audio.play();
                    break;
        case 'P':   
                    var audio = new Audio('audio/p.mp3');
                    audio.play(); 
                    break;
                    
                   
        case 'Q':   
                    var audio = new Audio('audio/q.mp3');
                    audio.play();
                    break;
        case 'R':   
                    var audio = new Audio('audio/r.mp3');
                    audio.play(); 
                    break;
        case 'S':   
                    var audio = new Audio('audio/s.mp3');
                    audio.play();
                    break;
                    
        case 'T':   
                    var audio = new Audio('audio/t.mp3');
                    audio.play();
                    break;
                    
        case 'U':   
                    var audio = new Audio('audio/u.mp3');
                    audio.play();
                    break;
        case 'V':   
                    var audio = new Audio('audio/v.mp3');
                    audio.play();
                    break;
                    
        case 'W':   
                    var audio = new Audio('audio/w.mp3');
                    audio.play();
                    break;
                    
        case 'X':   
                    var audio = new Audio('audio/x.mp3');
                    audio.play();
                    break;
                    
        case 'Y':   
                    var audio = new Audio('audio/y.mp3');
                    audio.play();
                    break;
        case 'Z':   
                    var audio = new Audio('audio/z.mp3');
                    audio.play(); 
                    break;
                                
                    
    }
    
}


function veranderkleur(){
    //verandert kleur na vergelijking met het woord. 
}


function countdown(){
    alert("countdown");
}

function veldleegmaken(){
    
}