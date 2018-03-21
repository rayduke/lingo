<?php require_once('../private/initialize.php');

?>

<!DOCTYPE HTML>

<html>
  <head>
     <link rel="stylesheet" media="all" href="<?php echo rel_url('/stylesheets/style.css'); ?>" />
     <script src="main.js"></script>
     <meta charset="utf-8" />
     <meta name="viewport" content="width=device-width" initial-scale="1"/>  
        
  </head>
    <body>
     <header>
            
            
     </header>
     <main class=main>
        <div id="wrapper">
          <h1>Spel</h1>
        </div>
        <div id=speelveld>
           
<?php
       
        $hetwoord = "bagel";
    
        createTable();
        createAlphabet();
  
        echo "<input type=button value=test onclick=letterkeus()>";
    
    
    
?>

        </div>
            
    </main>
   </body>
</html>

