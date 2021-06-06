<?php
//Ginving php the information about our database in order to connect to it
$severName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "phpproject01";

//Opens up a connection to the database
//Procedual php, mysqli
$conn = mysqli_connect($severName, $dBUsername, $dBPassword, $dBName);

//If connection failed...
if(!$conn){
	die("Connection failed: " . mysqli_connect_error());
}