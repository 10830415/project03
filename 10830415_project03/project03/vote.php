<?php
session_start();

if(!isset($_SESSION["success"])) {
	header("location: index.php");
}
 
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Voting System</title>
		<link rel="stylesheet" href="style_vote.css"/>
		<script src="navigate.js"></script>
	</head>
<body>



<div class="header">
  <a href="#default" class="logo">CompanyLogo</a>
  <div class="header-right">
    <a class="active" href="index.php">Home</a>

    <a href="includes/logout.inc.php">Log Out</a>
  </div>
</div>

<div style="background: black; color: white; text-align: center; width: 100%; padding: 7px; font-size: 30px;"><h2>Vote for the candidate you want to win</h2></div>
<div class="container">
	<form action="vote.php" method="post" align="center">
		<img src ="images/person1.jpg" width="280" height="400" style="margin: 0px 50px 0px 50px;"/>
		<img src ="images/person2.jpg" width="280" height="400" style="margin: 0px 50px 0px 0px;"/>
		<img src ="images/person3.jpg" width="280" height="400"style="margin: 0px 50px 0px 0px;"/>




		<div class="main">

		    <div class="sub-main">
		      <button class="button-one" name="person1">Person 1</button>
		    </div><br>
				
		    <div class="sub-main">
		      <button class="button-one" name="person2">Person 2</button>
		    </div><br>
				
				
		    <div class="sub-main">
		      <button class="button-one" name="person3">Person 3</button>
		    </div>
		
		</div>
		
	</form>
</div>


<br><br><br><br><br><br>


<?php

$con = mysqli_connect("localhost","root","","phpproject01");

//If person1 gets picked
if(isset($_POST['person1']))
{
	$vote_person1 = "update votes set person1=person1+1";
	$run_person1 = mysqli_query($con,$vote_person1);

if($run_person1)
	{
		echo "<h2 align ='center'> Your vote has been cast for person1</h2>";
		echo "<h2 align ='center'><a href='vote.php?results'>View Results</a></h2>";
	}
}


if(isset($_POST['person2']))
{
	$vote_person2 = "update votes set person2=person2+1";
	$run_person2 = mysqli_query($con,$vote_person2);

	if($run_person2)
	{
		echo "<h2 align ='center'> Your vote has been cast for person2</h2>";
		echo "<h2 align ='center'><a href='vote.php?results'>View Results</a></h2>";
	} 
}


if(isset($_POST['person3']))
{
	$vote_person3 = "update votes set person3=person3+1";
	$run_person3 = mysqli_query($con,$vote_person3);

	if($run_person3)
	{
		echo "<h2 align ='center'> Your vote has been cast for person3</h2>";
		echo "<h2 align ='center'><a href='vote.php?results'>View Results</a></h2>";
	} 
}


// New session added
if(isset($_GET['results']))
{
	$get_votes = "select * from votes";
	$run_votes = mysqli_query($con, $get_votes);
	$row_votes = mysqli_fetch_array($run_votes);


				$person1 = $row_votes['person1'];
				$person2 = $row_votes['person2'];
				$person3 = $row_votes['person3'];

	$total = $person1+$person2+$person3;


	$per_person1 = round($person1*100/$total) . "%";
	$per_person2 = round($person2*100/$total) . "%";
	$per_person3 = round($person3*100/$total) . "%";

	echo "
		<div style='background: orange'; padding: 0px; text-align: center;>
			<center>
				<h2>Updated Result</h2>

			<p style ='background: black; color: white; padding: 10px; width: 500px;'>
				<b> Person 1: </b> $person1 ($per_person1)

			<p style ='background: black; color: white; padding: 10px; width: 500px;'>
				<b> Person 2: </b> $person2 ($per_person2)

			<p style ='background: black; color: white; padding: 10px; width: 500px;'>
				<b> Person 3: </b> $person3 ($per_person3)
			</p>

		</div>
	";
}


?>




<div style="background: black; color: white; text-align: center; width: 100%; padding: 7px; font-size: 20px;"><h2>Company Name</h2></div>

</body>
</html>