<?php require_once('../private/initialize.php');

?>

<!DOCTYPE HTML>

<html>
    <head>
<!--        <link rel="stylesheet" media="all" href="../stylesheets/style.css" />
        <link rel="stylesheet" media="all" href="../stylesheets/style.css" />-->
        <link rel="stylesheet" media="all" href="<?php echo rel_url('/stylesheets/style.css'); ?>" />
     <meta charset="utf-8" />
     <meta name="viewport" content="width=device-width" initial-scale="1"/>
        <script>
            function letterkeus(id){
                var html = document.getElementsByTagName("html");
 
                var http = new XMLHttpRequest();
                var url = "game.php";
                var params = "letter="+id;
                http.open("GET", url, true);

                
                http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

                http.onreadystatechange = function() {
                    if(http.readyState == 4 && http.status == 200) {
                    html[0].children[1].children[1].children[1].children[0].children[0].children[0].children[0].innerText = id;
                    console.log(id);
                        }
                    }
                http.send(params);
            }

        </script>
        <style>

        </style>
        
        
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
<!--                
                <p></p>
                <center>
                    <input type=text id=guess maxlength=5 placeholder="Raad het woord"> 
                <input type=submit value="Enter" onclick="invullen()">
                </center>-->
            </div>
            
        </main>
    </body>
</html>

