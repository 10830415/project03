<?php
include_once 'header.php';
?>
	<form action="includes/signup.inc.php" method="post">
		<h2>SIGNUP</h2>

		<label>Full Name</label>
		<input type="text" name="name" placeholder="Full name..."><br>

		<label>E-mail</label>
		<input type="text" name="email" placeholder="Email..."><br>

		<label>User Name</label>
		<input type="text" name="uid" placeholder="Username..."><br>

		<label>Password</label>
		<input type="password" name="pwd" placeholder="Password..."><br>

		<label>Repeat Password</label>
		<input type="password" name="pwdrepeat" placeholder="Repeat Password..."><br>

		<button type="submit" name="submit">SIGN UP</button>

	<?php
	if (isset($_GET["error"])){
		if ($_GET["error"] == "emptyinput") {
			echo "<p>Fill in all fields!</p>";
		}
		else if ($_GET["error"] == "invaliduid") {
			echo "<p>Choose a proper username!</p>";
		}
		else if ($_GET["error"] == "invalidemail") {
			echo "<p>Choose a proper email!</p>";
		}
		else if ($_GET["error"] == "passwordsdontmatch") {
			echo "<p>Passwords don't match!</p>";
		}
		else if ($_GET["error"] == "stmtfailed") {
			echo "<p>Something went wrong. Try again!</p>";
		}
		else if ($_GET["error"] == "usernametaken") {
			echo "<p>Username/Email taken!</p>";
		}
		else if ($_GET["error"] == "none") {
			echo "<p>You have signed up!</p>";
			$_SESSION["success"] = "success";
			header("location: login.php");
		}
		
	}
	?>
	</form>

	

	<?php
	include_once 'footer.php';
	?>
</body>