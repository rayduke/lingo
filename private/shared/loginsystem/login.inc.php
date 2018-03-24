<?php

session_start();

    include 'dbh.inc.php';   //connectie met de database wordt hier in gemaakt.

    $uid = $_POST['uid'];   //vanuit invoervelden in bestand login worden hier de gegevens in vars gestopt
    $pwd = $_POST['pwd'];

    //de volgende if statements checken allerlei dingen om errors te voorkomen
	
if (empty($uid) || empty($pwd)) {                       //check voor lege velden
        header("Location: ../index.php?login=empty");
        exit();
}else{
        $sql = "SELECT * FROM users WHERE user_uid='$uid' OR user_email='$uid'"; //omdat er zowel een email als een gebruikersnaam kan worden ingevoerd zit er een OR operator in de sql
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck < 1) {                                     //hier wordt gecheckt of de gebruiker bestaat
                header("Location: ../index.php?login=errortest22");
                exit();
        }else{
                if($row = mysqli_fetch_assoc($result)) {            //het ophalen van het WW

                        $hashedPwdCheck = password_verify($pwd, $row['user_pwd']); //vergelijken van hashed pwd met het ingevoerde ww. 
                        if ($hashedPwdCheck == false){                             //vergelijking klopt niet
                                header("Location: ../index.php?login=incorrect");

                                exit();
                        }elseif ($hashedPwdCheck == true){          //inloggen user. in de sessions worden de gegevens van de user opgeslagen
                        $_SESSION['u_id'] =$row['user_id'];
                        $_SESSION['u_first'] =$row['user_first'];
                        $_SESSION['u_last'] =$row['user_last'];
                        $_SESSION['u_email'] =$row['user_email'];
                        $_SESSION['u_uid'] =$row['user_uid'];
                        header("Location: ../index.php?login=success");
                        exit();
                        }
                }			
        }
}
	
	
	
	
	

	
