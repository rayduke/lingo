<?php session_start();?>
<?php require_once('../private/initialize.php');?>

<?php include(SHARED_PATH . '/header.php');?>


    
<main class=main>
        <div id="wrapper">
          <h2>Spel</h2>
        </div>
        <div id=speelveld>
           <audio autoplay>
               <source src="audio/start.mp3" type="audio/mpeg">
                  </audio>            
            <progress id="tijd" value="60" max="60"></progress>
            <button id="knop" onclick="timer(60);">Start!</button>
            <div id="divy">de resterende tijd is <span id="time">01:00</span>minuten</div>
        <?php


        //    echo var_dump(str_split($hetwoord, 1));
          if (isset($_SESSION['u_uid'])) {    
                createTable();
                createAlphabet();
          }else{
              echo "<span id=error>Niet ingelogd, Log in om het spel te starten.</span>";
          }

        echo '<div id=fetcharray></div';
        echo '<div id=div></div>';
        ?>

        </div>
            
            
    </main>
   </body>
</html>

