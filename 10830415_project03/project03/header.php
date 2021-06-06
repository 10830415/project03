
<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>PROJECT 1</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="head&foot.css">
</head>
<body>
    <div class="fixed-header">
        <div class="container">
            <nav>
                <a href="index.php">Home</a>
                <a href="#">About</a>
                <a href="#">Profile</a>
                <?php
                if(isset($_SESSION["useruid"])){
                    echo "<a href='vote.php'>Vote</a>";
                    echo "<a href='includes/logout.inc.php'>Log out</a>";
                }
                else{
                    echo "<a href='signup.php'>Sign Up</a>";
                    echo "<a href='login.php'>Login</a>";
                }             
                ?>
            </nav>
        </div>
    </div>
    