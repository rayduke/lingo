<?php
	if(isset($_POST['submit'])) {
		session_start();
		session_unset();
		session_destroy();          //na uiloggen zijn alle user-info-data uit de sessions gehaald en ga je terug naar de index
		header("Location: ../../../index.php");   
		exit();
	}