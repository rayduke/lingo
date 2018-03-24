<?php require_once('../private/initialize.php');?>

<?php include(SHARED_PATH . '/header.php');?>

<?php
	
        ?> 
        <main class=main>

            
            
            
            <div class=login-box>
                <img src="img/avatar2.png" class=avatar>
                <h1>Inschrijven</h1>
                    <form class="signup-form" action="includes/signup.inc.php" method="POST">
                     <p>Voornaam</p> 
                     <input type=input id=gbnaam placeholder="Enter Voornaam"><br><br>
                     <p>Achternaam</p> 
                     <input type="text" class="input" name="last" placeholder="Achternaam"><br>
                     <p>E-mail</p> 
                     <input type="text" class="input" name="email" placeholder="E-mail"><br>
                     <p>Gebruikersnaam</p> 
                     <input type="text" class="input" name="uid" placeholder="Gebruikersnaam"><br>
                     <p>Wachtwoord</p> 
                     <input type="text" class="input" name="pwd" placeholder="Wachtwoord"><br>
                     <button type="submit" class="button" name="submit">Inschrijven</button>
                     
                    </form>  
                    </div>
         
             
           
              </form>
            </div>
          
        </main>
	
         
			<h2>Inschrijven</h2>
			 <!--om geen gevoelige data in de url te krijgen moet er met post gezonden worden-->
				<input type="text" class="input" name="first" placeholder="Voornaam"><br>
                                
				
                                <button type="submit" class="button" name="submit">Inschrijven</button>
			</form>
]    
	</section>
    </body>
</html>	