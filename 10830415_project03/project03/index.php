<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Home</title>

<?php
include_once 'header.php';
?>

    <div class="container">
    	<?php
                if(isset($_SESSION["useruid"])){
                    echo "<p style =  'font-size: 50px; font-family: sans-serif; text-align:center; color:#fff;'>Hello " . $_SESSION["useruid"] . "</p>";
                }  
                else{
                	echo "<p style =  'font-size: 50px; font-family: sans-serif; text-align:center; color:#fff;'>Please Login / Sign In</p>";
                }
                ?>
    </div>    
<?php
    include_once 'footer.php';
?>


</body>
</html>