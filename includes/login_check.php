<?php
//Checks if logged in, if not redirect to login.php!

include_once "includes/functions.php";
include_once "includes/db_connect.php";
sec_session_start();

if(login_check($mysqli)){
	$logged = 'in';
	/*
	echo "eingeloggt - permissions accepted!";
	echo "name " . $_SESSION['username'] ;*/

}else{
	/*$logged = 'out';
	echo "Whaaat? Who are you?";*/
	header('Location: login.php');
}