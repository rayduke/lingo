<?php require_once('../private/initialize.php');?>

<?php include(SHARED_PATH . '/header.php');?>
    
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

