<?php require_once('../private/initialize.php');
session_start();

    $woorden = ['baken','actie','beter','breuk','conus',''
                . 'droom','enkel','cavia','email','fruit',''
                 . 'maten','lingo','paard','patat','quota',''
                   . 'riool','scene','snaar','smaak','vloer'];
    
    $rand = rand(0,count($woorden));
    $woord = $woorden[$rand];
    $hetwoord = strtoupper("zaten");
    
    
        
        $juistantwoord = str_split($hetwoord, 1);
        $guessed = json_decode($_POST['data'], true);
       
// checkt welke character gelijk is tussen beide arrays.
        print_r($guessed);
       

        if(isset($guessed)){
            analyzeGuess($guessed, $juistantwoord);
        }
        

        
        
 // deze functie controleert hoeveel er goed of fout geraden zijn. + telt de e.v.t punten op.       
function analyzeGuess($guessed, $juistantwoord){
     $result_match = [''];
        
     if($guessed == $juistantwoord){
        echo '<audio autoplay>;
              <source src="audio/geraden2.mp3" type="audio/mpeg">;
              </audio>';
              
         
         if($a == 0){ $punten += 10;}
            elseif ($a == 1){ $punten += 8;}
            elseif ($a == 2){ $punten += 6;}
            elseif ($a == 3){ $punten += 4;}
            elseif ($a == 4){ $punten += 2;}
            
            $_SESSION['win'] = true;
            //verstuur punten gewonnen pot naar database.
            
            
         
     }else {
        for ($i = 0;$i < 5;$i++) {
            if ($guessed[$i] == $juistantwoord[$i]) {
             // A correct guess 
                echo "goede guess ".$guessed[$i]; //groene achtergrond maken van deze letters met geluid.
             } else {
               
             } 
                 echo "verkeerde keus".$guessed[$i];
                 
                 
                 $_SESSION['win'] = false;
                 $_SESSION['reset']= true;
               


// controlleer of letters in array zitten en skip naar volgende ROW. voor een nieuwe ronde.
                 
        }
        echo '<audio autoplay>;
                  <source src="audio/fout.mp3" type="audio/mpeg">;
                  </audio>';
    }
}  

