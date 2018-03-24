<?php require_once('../private/initialize.php');


    $woorden = ['baken','actie','beter','breuk','conus',''
                . 'droom','enkel','cavia','email','fruit',''
                 . 'maten','lingo','paard','patat','quota',''
                   . 'riool','scene','snaar','smaak','vloer'];
    
    $rand = rand(0,count($woorden));
    $woord = $woorden[$rand];
    $hetwoord = strtoupper("baken");
    
    
        
        $juistantwoord = str_split($hetwoord, 1);
        $guessed = json_decode($_POST['data'], true);
       
// checkt welke character gelijk is tussen beide arrays.
        print_r($guessed);
        $result_match = [''];
        $result_match = array_intersect($juistantwoord, $guessed);
        
       
        
        
        
        if(isset($guessed)){
            analyzeGuess($guessed, $juistantwoord);
        }
        

        
        
        
function analyzeGuess($guessed, $juistantwoord){
     
     if($guessed == $juistantwoord){
         echo ">>>GERADEN!!!!!!<<<";
         //final audio play
         
     }else {
        for ($i = 0;$i < 4;$i++) {
            if ($guessed[$i] == $juistantwoord[$i]) {
             // A correct guess 
                echo "correct Guess: ".$guessed[$i];
             } else {
            // Keep track of the guessed colors, for output later
                 
        }
    }
} 
}


 
        echo "<br>>>>>>>>>>>>>>>>>>>>><br>";
        print_r($juistantwoord);
        echo "<br>>>>>>>>>>>>>>>>>>>>><br>";

        print_r($result_match);


