<?php 
session_start();
if(!isset($_SESSION['username'])) {
    header("Location: login.php");
    die();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<center>
        <img src="images/contactUs.jpg" alt="" width="600" height="200" class="img-responsive">
    </a>
    <br>
    <br>
</center>
</body>
</html>