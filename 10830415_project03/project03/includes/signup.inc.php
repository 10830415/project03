<?php

session_start();
// This isset function is used to check if the user entered using the submit button
if(isset($_POST["submit"])){
 
	$name = $_POST["name"];
	$email = $_POST["email"];
	$username = $_POST["uid"];
	$pwd = $_POST["pwd"];
	$pwdRepeat = $_POST["pwdrepeat"];

//Access functions and database
	require_once 'dbh.inc.php';
	require_once 'functions.inc.php';

	if(emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) !== false){
		header("location: ../signup.php?error=emptyinput");
		exit();
	}
	if(invalidUid($username) !== false){
		header("location: ../signup.php?error=invaliduid");
		exit();
	}
	if(invalidEmail($email) !== false){
		header("location: ../signup.php?error=invalidemail");
		exit();
	}
	if(pwdMatch($pwd, $pwdRepeat) !== false){
		header("location: ../signup.php?error=passwordsdontmatch");
		exit();
	}
	if(uidExists($conn, $username, $email) !== false){
		header("location: ../signup.php?error=usernametaken");
		exit();
	}

//Creates a new row in the database and input's the client's details
	$_SESSION["success"] = "success";
	createUser($conn, $name, $email, $username, $pwd);

}

else{
	header("location: ../signup.php");
	exit();
}
