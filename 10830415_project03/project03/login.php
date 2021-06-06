 <?php
include_once 'header.php';
?>

	<form action="includes/login.inc.php" method="post">
		<h2>LOGIN</h2>


		<input type="text" name="uid" placeholder="Username/Email..."><br>

		<input type="password" name="pwd" placeholder="Password..."><br>


		<button type="submit" name="submit">LOGIN</button>


	<?php
	if (isset($_GET["error"])){
		if ($_GET["error"] == "emptyinput") {
			echo "<p>Fill in all fields!</p>";
		}
		else if ($_GET["error"] == "wronglogin") {
			echo "<p>Incorrect information!</p>";
		}	
	}
	?>


	</form>



	<?php
	include_once 'footer.php';
	?>

</body>