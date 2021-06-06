<?php
include "includes/dbh.inc.php";



	//Query the database
	$get_results = "SELECT * FROM votes";
	$res = mysqli_query($conn, $get_results);
	if(mysqli_num_rows($res) > 0) {
		while($userData = mysqli_fetch_assoc($res)) {
			$vote1 = $userData["person1"];
			$vote2 = $userData["person2"];
			$vote3 = $userData["person3"];
		}
	}

	//Find to total votes
	$total = 0;
	for( $i=0; $i<3; $i++) {
		$total = $vote1 + $vote2 + $vote3;
}

	$percent1 = ($vote1/$total)*100;
	$percent2 = ($vote2/$total)*100;
	$percent3 = ($vote3/$total)*100;


?>



<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Voting System</title>
		<link rel="stylesheet" href="style_vote.css"/>
		<link rel="stylesheet" href="results.css">
	</head>
<body>
	<div class="header">
  <a href="#default" class="logo">CompanyLogo</a>
  <div class="header-right">
    <a class="active" href="index.php">Home</a>

    <a href="includes/logout.inc.php">Log Out</a>
  </div>
</div>
	<div class="main">
		<div class="inner">
			<div class="person">
				<p>Person 1: <?php echo number_format($percent1, 2, '.', ',') ?></p>
			</div>

				<div class="person">
				<p>Person 2: <?php echo number_format($percent2, 2, '.', ',') ?></p>
			</div>

				<div class="person">
				<p>Person 3: <?php echo number_format($percent3, 2, '.', ',') ?></p>
			</div>
		</div>
	</div>
</body>
</html>