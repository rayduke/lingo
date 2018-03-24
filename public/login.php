<?php require_once('../private/initialize.php');?>

<?php include(SHARED_PATH . '/header.php');?>

   <script>
            function inschrijven(){
                window.location.href = "signup.php";
              }
        </script>
        <main class=main>

            
            
            
            <div class=login-box>
                <img src="img/avatar2.png" class=avatar>
                <h1>Log in</h1>
                    
                    
                          <?php	//in deze php wordt er in de loginpagina gekeken of de gebruiker al is ingelogd door de session u_id te checken
                            if (isset($_SESSION['u_id'])) {                                     //form action geeft de url aan waar de verzonden info heen gaat
                                    echo '<form action="../private/shared/loginsystem/logout.inc.php" method="POST">      
                                          <button type="submit" class="button" name="submit">Uitloggen</button></form>'; //submit zorgt ervoor dat de gebruiker naar de logout.inc.php gaat en daar worden de sessions leeg gemaakt en de gebruiker gaat terug naar de indez
                            }else{
//                                             
                                    echo  '<form>
                                            <p>Gebruikersnaam</p> 
                                              <input type=input id=gbnaam placeholder="Vul je gebruikersnaam in"><br><br>
                                            <p>Wachtwoord</p> 
                                              <input type=password id=wachtw placeholder="Vul je wachtwoord">
                                             
                                              <input type="button" value=signup name=signup class=button onclick="inschrijven()">
                                              <input type="button" value=login name=pwd class=button id=inlog onclick="login()">
                                            <form>';
                                          
//                                    
//                                      
//                                         <div id="wrapper">
//                                            echo '<form action="includes/login.inc.php" method="POST">      
//                                          <input type="text" class="input" name="uid" placeholder="Gebruikersnaam/e-mail"><br>
//                                          <input type="text" class="input" name="pwd" placeholder="Wachtwoord">
//                                          <button type="submit" class="button" name="submit">Inloggen</button></form>
//                                          <a class="button" href="signup.php" >Inschrijven</a>'; //submit stuurt de logingegevens naar de login.inc.php waar ze worden gecheckt en opgeslagen in de session
                            }           //hierboven staat een link om aan te melden als je nog geen gebruiker bent
                    ?>               
                     
                     
                     
                     
                     
                     
                     
                    </div>
         
             
           
              </form>
            </div>
          
        </main>
    </body>
</html>

