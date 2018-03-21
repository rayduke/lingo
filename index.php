<?php require_once('private/initialize.php');


            
            ?>

<!DOCTYPE HTML>

<html>
    <head>
     <meta charset="utf-8" />
     <meta name="viewport" content="width=device-width" initial-scale="1"/>
        <script>
              function signup(){
                   var signup =  document.getElementById('signup').value;     
                   document.location = "index.php?signup="+signup;
              
              }
              function login(){
                   var gbnaam = document.getElementById('gbnaam').value;
                   var wachtw = document.getElementById('wachtw').value;
                   document.location = "index.php?gbnaam="+gbnaam+"&wachtw="+wachtw;
              }      
              
        
     
        </script>
        <style>
            body{
                background: url('img/lingo.png') fixed no-repeat ;;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }
            
            
            h1{
                text-align: center;
                font-size: 50px;
                margin: 5px;
                color: black;
            }
            
            .main{
                margin-top: 100px;
            }
            
            
            #login{
                width: 400px;
                height: 200px;
                box-sizing: inline;
                background-color: rgba(0, 0 , 0, 0.74);
                border-radius: 5px;
                color: white;
                margin: auto;
            }
            
            table{
                margin: auto;
        
            }
            
            #table .input{
                margin-top: 100px;
                /*float: left;*/
                /*box-sizing: border-box;*/
            }
            
            .button{
                text-align: center;
                
                padding: 10px;
                float:left;
                background: white;
                margin: 2px;
                color: black;
                border-radius: 10%;
                
            }
            input{
                font-size: 17px;
                
            }
            
            #signup, #inlog{
/*               margin-bottom:75px;*/
            }            
        </style>
        
        
    </head>
    <body>
        <header>
            
            
        </header>
   
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

