<?php

//This file could be in the same dir like www/html/...
//it contains no HTML markup -> Secure

//mysqli_* is the most up-to-date mySQL extension -> I use it!

include_once 'db_connect.php';
include_once 'functions.php';

sec_session_start();

if(isset($_POST['email'], $_POST['p'])){
	$email = $_POST['email'];
	$password = $_POST['p']; //hashed password

	if (login($email, $password, $mysqli) == true) {
		//Login success
		header('Location: ../implementation/index.php');
	} else {
		//login failed
		header('Location: ../implementation/register.php');
	}
}else {
	//The correct POST variables were not sent to this page
	//echo 'No post variables set - process_login.php';
}