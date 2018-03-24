<?php require_once('../private/initialize.php');?>

<?php include(SHARED_PATH . '/header.php');?>
   
        <main class=main>

            
            
            
            <div class=login-box>
                <img src="img/avatar2.png" class=avatar>
                <h1>Log in</h1>
                    <form>
                     <p>Gebruikersnaam</p> 
                     <input type=input id=gbnaam placeholder="Enter Gebruikersnaam"><br><br>
                     <p>Wachtwoord</p> 
                     <input type=password id=wachtw placeholder="Enter Achternaam">
                     <input type="button" value=signup class=button id=signup onclick="signup()">
                     <input type="button" value=login class=button id=inlog onclick="login()">
                    </div>
         
             
             </ul>
              </form>
            </div>
          
        </main>
    </body>
</html>

