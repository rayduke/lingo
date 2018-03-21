<?php require_once('../private/initialize.php');?>

<?php include(SHARED_PATH . '/header.php');?>
   
        <main class=main>
            <div id="wrapper">
            <h1>Login</h1>
            </div>
            <div id=login>
             <table id=table>
               <tr>
                <div class=input>   
                 <td>Gebruikersnaam: </td>
                 <td><input type=input id=gbnaam placeholder=Gebruikersnaam></td>
                </div>
                <tr>
                 <div class=input>   
                  <td>Password: </td>
                  <td><input type=password id=wachtw placeholder=achternaam></td>
                </div> 
                </tr> 
                <div class=buttons>
                  <input type="button" value=signup class=button id=signup onclick="signup()">
                  <input type="button" value=login class=button id=inlog onclick="login()">
                </div>
               </div>
             
             </table>
            </div>
           
        </main>
    </body>
</html>

