<?php require_once('../private/initialize.php');
session_start();

    $woorden = ['baken','actie','beter','breuk','conus',''
                . 'droom','enkel','cavia','email','fruit',''
                  . 'maten','lingo','paard','patat','quota',''
                    . 'riool','scene','snaar','smaak','vloer'];
    
    $rand = rand(0,count($woorden));        //geeft random getal tussen 0 en de hoeveelheid woorden in de bovenstaande array
    $woord = $woorden[$rand];               //woord wordt in var gestopt door random nummer kan het elk woord zijn
    $hetwoord = strtoupper("zaten");       //woord bestaat nu alleen uit hoofdletters 
    
   
        
        $juistantwoord = str_split($hetwoord, 1);         //elke letter in plaats in array      
        $guessed = json_decode($_POST['data'], true);
        
        
        $eersteletter = json_encode($juistantwoord[0]);

// checkt welke character gelijk is tussen beide arrays.
        
       

        if(isset($guessed)){
            analyzeGuess($guessed, $juistantwoord);
        }
        

        
        
 // deze functie controleert hoeveel er goed of fout geraden zijn. + telt de e.v.t punten op.       
function analyzeGuess($guessed, $juistantwoord){        
        
           //ontvangen van ingevulde array $guessed    volledig goed antwoord
        

          
                for ($i = 0;$i < 5;$i++) {      //antwoord os niet goed en wordt hier per letter vergeleken. alleen bij een volle array
                    if($guessed[$i]==$juistantwoord[$i]){
                        echo ("goed ");//groen vak en volgende rij is hetzelfde//groene achtergrond maken van deze letters met geluid.
                        
                    }elseif (in_array ( $guessed[$i] , $juistantwoord )) {
                        echo ("half ");//geel balletje
                    }elseif (!in_array ( $guessed[$i] , $juistantwoord )) {
                        echo ("fout ");//geen kleurverandering en volgende rij wordt leeg
                    }
                }
//                echo   '<audio autoplay>;
//                        <source src="audio/fout.mp3" type="audio/mpeg">;
//                        </audio>';
            }


//         if($a == 0){ $punten += 10;}
//            elseif ($a == 1){ $punten += 8;}
//            elseif ($a == 2){ $punten += 6;}
//            elseif ($a == 3){ $punten += 4;}
//            elseif ($a == 4){ $punten += 2;}
            
            //$_SESSION['win'] = true;
                 echo $eersteletter;   //verstuur punten gewonnen pot naar database.