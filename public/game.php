
<?php require_once('../private/initialize.php');?>

<?php include(SHARED_PATH . '/header.php');?>
    
<main class=main>
        <div id="wrapper">
          <h1>Spel</h1>
        </div>
        <div id=speelveld>
<?php

        
//        <?php


    $woorden = ['baken','actie','beter','breuk','conus',''
                . 'droom','enkel','cavia','email','fruit',''
                 . 'maten','lingo','paard','patat','quota',''
                   . 'riool','scene','snaar','smaak','vloer'];
    
    $rand = rand(0,count($woorden));
    $woord = $woorden[$rand];
    $hetwoord = "baken";
    

    
   
      
    echo var_dump(str_split($woord, 1));
//        
//        if ($guess === "$hetwoord[0]"){
//            echo "JA";
//        }
//    
    
        createTable();
        createAlphabet();
  


?>

        </div>
            
    </main>
   </body>
</html>

