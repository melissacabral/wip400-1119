<?php 
session_start();
define( 'DEBUG_MODE', true );

//kill the page if the user is not logged in
if( $_SESSION['loggedin'] != 1 ){
	//die('You are not allowed to see this');
	header('Location:login.php');
}	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Password Protected Area</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.3.0/milligram.min.css">
</head>
<body>
	<a href="login.php?action=logout">Log Out</a>

	<h1>SECRET</h1>
	This will be password protected!

<?php include('includes/debug-output.php'); ?>

</body>
</html>