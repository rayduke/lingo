<?php
function rel_url($pad){
    if($pad[0] != '/'){
        $pad = "/" . $pad;
    }
    return WWW_ROOT . $pad;
}
    
    function createTable(){
   
        echo "<table id=vakken>";

        for($xas = 0; $xas < 5; $xas++){
                echo "<tr id=row>";
                for($yas = 0; $yas < 5; $yas++){
                  echo "<td class=navy  id=vak".$xas."".$yas."></td>";

                } echo "</tr>";
        } echo "</table>";
    }  

    
    function createAlphabet(){
        echo "<table id=alfa>";
            $row = -1;
        
         for($i = 0; $i < 2; $i++){
    
            echo "<tr>";
                for($u = 0; $u <14; $u++){
                $row++;   
                echo '<td class=letters><button onclick="letterkeus(this.id)" id='.chr(65 + $row).' class=alfa>'.chr(65 + $row).'</button></td>';
             }
         }  echo "</tr>";
     }  echo "</table>"; 


    
