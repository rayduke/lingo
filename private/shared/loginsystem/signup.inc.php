<?php

if (isset($_POST['submit'])) {          //hier wordt gecheckt of de submitknop is ingedrukt en dan pas worden de gegevens overgezet
	
	include_once 'dbh.inc.php';     //connectie met de database wordt hier in gemaakt.

	$first = $_POST['first'];       //vanuit invoervelden in bestand signup worden hier de gegevens in vars gestopt
	$last = $_POST['last'];
	$email = $_POST['email'];
	$uid = $_POST['uid'];
	$pwd = $_POST['pwd'];
	
	//de volgende if statements checken allerlei dingen om te voorkomen dat er rommel wordt opgeslagen in de database
	
	
	if (empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)) {     //check voor lege velden
		header("Location: signup.php?signup=empty");
		exit();
	} else {
		if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {    //check of de ingevoerde namen alleen letters bevatten en geen cijfers
			header("Location: signup.php?signup=invalid");
			exit();
                } else {
                            
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)){        //filter_var is een methode om een variabele te valideren. de FILTER_VALIDATE_EMAIL is specifiek om een email adres op zijn schrijfwijze te controleren (zie testbestand code.php
                        header("Location: ../signup.php?signup=email");
                        exit();
                }else{
                        $sql = "SELECT * FROM users WHERE user_uid='$uid'"; //hier wordt gecheckt of er al een gebruiker bestaat met dezelfde gebruikersnaam
                        $result = mysqli_query($conn, $sql);
                        $resultCheck = mysqli_num_rows($result);            //als er een rij geselecteerd kon worden dan komt hier een getal in de var die groter is dan 0
                                if ($resultCheck > 0) {                     //dat getal wordt hier vergeleken en als blijkt dat er al een rij bestaat en dus de gebruikersnaam in gebruik is dan faalt de inschrijving
                                header("Location: ../signup.php?signup=usertaken");
                                exit();
                                }else{
                                        
                                        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT); //hashen van WW
                                        
                                        //hier wordt de gebruiker in de database opgeslagen
                                        $sql ="INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES ('$first', '$last', '$email', '$uid', '$hashedPwd' );";
                                mysqli_query($conn, $sql);
                                header("Location: ../../../public/index.php?signup=success");
                                exit();
			}
		}
	}
}
}else{
	header("Location: ../signup.php");  //de pagina van succesvol ingeschreven
}