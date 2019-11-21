<?php 
//define some variables and constants
$breakfast = 'coffee';

//define a constant
define( 'WHATEVER', 'this is the value of whatever' );

//for absolute paths in includes
define( 'SITEROOT', 'C:\xampp\htdocs\melissa\php\1119\day1-practice' );

//always use _once when including or requiring files that contain function definitions
include_once( 'includes/functions.php' );
?>
<!DOCTYPE html>
<html>
<head>
	<title>first php file </title>
	<style type="text/css">
		.bananas{
			background-color: yellow;
		}
		h2{
			color:fuchsia;
		}
		.menu{
			background-color: orange;
		}
	</style>	
	<meta charset="utf-8">
</head>
<body class="<?php echo 'bananas'; ?>">
	
	<?php 
	//call our function
	human_friendly_date( '11/18/2019' );
	human_friendly_date('tomorrow');
	human_friendly_date();

	?>

	<?php echo WHATEVER; ?>

	<h1>This is normal HTML</h1>
	<!-- this will be visible -->

	<?php include( SITEROOT . '/includes/nav-bar.php'); ?>
	
	<?php 
		//this is a php comment, it will be invisible to the user
		print('Hello World!');
		echo '<h2>happy monday</h2>';

		//display a varaible		
		echo $breakfast;	
	?>	

	<p>back to HTML out here</p>
</body>
</html>