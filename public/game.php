<?php session_start();?>
<?php require_once('../private/initialize.php');?>

<?php include(SHARED_PATH . '/header.php');?>


    
<main class=main>
        <div id="wrapper">
          <h2>Spel</h2>
        </div>
        <div id=speelveld>
<?php


//    echo var_dump(str_split($hetwoord, 1));
   
        createTable();
        createAlphabet();

echo '<div id=fetcharray></div';
?>

        </div>
            
    </main>
   </body>
</html>

