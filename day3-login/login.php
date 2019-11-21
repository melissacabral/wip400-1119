<?php 
session_start();
define( 'DEBUG_MODE', true );


//if they followed the logout link, destroy the session and cookie data
// URI will look like login.php?action=logout
if( $_GET['action'] == 'logout' ){
	//unset all cookies
	setcookie( 'loggedin', '', time() - 99999 );

	//unset all session vars
	$_SESSION = array();

	if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    	);
	}

	session_destroy();

	//redirect to a clean url with no query string
	header('Location:login.php');
}//end if logout


//only parse the form if the user submitted the form
if( isset($_POST['did_login']) ){
	//temporary correct credentials
	// @TODO change this so it works with a database
	$correct_username = 'melissa';
	$correct_password = 'phprules';

	//get the data that the user typed in
	$username = $_POST['username'];
	$password = $_POST['password'];

	//compare it to the correct User and password. if they match, redirect to the secret page
	if( $correct_username == $username AND $correct_password == $password ){
		//success
		//keep track of this user for 1 week
		setcookie( 'loggedin', 1, time() + 60 * 60 * 24 * 7 );
		$_SESSION['loggedin'] = 1;
		//redirect
		header('Location:secret.php');
	}else{
		//error
		$feedback = 'Your username/password combo is incorrect. Try again.';
	}
} //end if did_login
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Log In to your account</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.3.0/milligram.min.css">

	<style type="text/css">
		.feedback{
			background-color: pink;
			padding:.3em;
		}
	</style>
</head>
<body>

	<div class="login-form">
		<h1>Log In</h1>


		<?php 
		//if there is feedback to show, show it
		if( isset( $feedback ) ){ ?>
		<div class="feedback">
			<?php echo $feedback; ?>
		</div>
		<?php } //endif feedback is set ?>

		<form method="post" action="login.php">

			<label for="the_username">Username</label>
			<input type="text" name="username" id="the_username">

			<label for="the_password">Password</label>
			<input type="password" name="password" id="the_password">

			<input type="submit" value="Log In">
			
			<input type="hidden" name="did_login" value="1">

		</form>

		<div class="cookiemessage">
			This site uses cookies. 
			<a href="tos.php">Read our Terms of Service</a>
		</div>
	</div>

	<?php include('includes/debug-output.php'); ?>


</body>
</html>