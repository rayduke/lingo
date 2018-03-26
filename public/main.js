if (typeof i == 'undefined') {
        var i = 0;
        var a = 0;
//        document.getElementById(("vak"+a+""+0)).woordGuess[0].innerText.display;

}  
var array = new Array;
var woordGuess = new Array();  

 
function letterkeus(id,array){
                
                woordGuess[i] = document.getElementById("vak"+a+""+i).innerText = id; //hier worden de letters in de array gezet
                      
                        
                console.log(a);
                if(i == 4){
                    
                    a++;        //rij van veld
//                  
                    var data = woordGuess;
                    var xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function(){
                    if(xhttp.readyState == 4 && xhttp.status == 200) {
                    document.getElementById("fetcharray").innerHTML = this.responseText;
                    
                    veranderkleur(this.responseText,array);
                    
                    var array2 = this.responseText;
                    array2.split(" ", 6)
                    var firstletter = array2.substring(26, 27);
                    document.getElementById("vak"+a+"0").innerText = firstletter;
                    console.log(firstletter);
             
                    }
                };
                data = JSON.stringify(data);                
                xhttp.open("POST", 'gamecheck.php', true);
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhttp.send("data="+data);
//                console.log(data);
                if( a == 5 ){       //als dit voorkomt is het hele speelveld vol
                    
                    setTimeout(function () { veldleegmaken(); }, 5000);

                    a = 0;
                }
                
                return i=0;

                }else{
                  i++;              
                } 
            

}   



function veranderkleur(hetantwoord,array){               //verandert kleur na vergelijking met het woord.
  
        
        
        array = hetantwoord.split(" ", 5);
        console.log(array);
        
         

        for (var i = 0; i < array.length; i++) {
            if (array[i] === 'fout') {
            document.getElementById('vak'+(a-1)+i).style.backgroundColor='red';
            

            }
        }
          
          

        for (var i = 0; i < array.length; i++){    
            if(array[i] === 'goed'){
            document.getElementById('vak'+(a-1)+i).style.backgroundColor='green'; 
           
                
           
            
            }
        
        }
        
        for (var i = 0; i < array.length; i++){    
            if(array[i] === 'half'){
         
            document.getElementById('vak'+(a-1)+i).style.backgroundColor='yellow'; 
            }
        }
    }
  
  


  function startTimer(duration, display) {
    var timer = duration, minutes, seconds;
    setInterval(function () {               //elke 1000ms gaat deze functie door de setInterval af
        minutes = parseInt(timer / 60, 10); //The parseInt() function parses a string and returns an integer.
        seconds = parseInt(timer % 60, 10); //het getal tijd wordt hier opgedeeld in minuten en seconden
        
        document.getElementById("tijd").value = timer;
        
        minutes = minutes < 10 ? "0" + minutes : minutes;   //om de weergave in twee aaneengesloten cijfers te houden
        seconds = seconds < 10 ? "0" + seconds : seconds;   //idem^^
        
        display.textContent = minutes + ":" + seconds;  //hiermee wordt de tijd weergegeven in html met het DOM
        
        if (--timer < 0) {
            document.getElementById("divy").innerHTML = "de resterende tijd is op!";    //verbergt de doorlopende setInterval
        }
    }, 1000);
}
    
function timer(tijd) {
    document.getElementById("knop").onclick = "nul()";   //voorkomt resetten van timer door weer op de startknop te drukken
    var fiveMinutes = tijd,
    display = document.querySelector('#time');
    startTimer(fiveMinutes, display);
    };      

//window.oncontextmenu = function(){      //anti-cheat functie tijdens timer countdown
//    alert("dit is valsspelen!")
//};


function veldleegmaken(){
    for(p = 0; p < 5; p++){
        for (q = 0; q < 5; q++){
            
            document.getElementById("vak"+p+""+q).innerText = "";  //maak veld weer leeg
            document.getElementById("vak"+p+""+q).style.backgroundColor = "#1f6794";
        }
    }
}
resultaatgeluid(woordGuess);
function resultaatgeluid(array){
    if(array == 'fout'){
        var audio = new Audio('audio/fout.mp3');
            audio.play();
            
    }
    
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
                                
                    
    };
};

