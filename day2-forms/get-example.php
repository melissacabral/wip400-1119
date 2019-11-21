<?php 
error_reporting( E_ALL & ~E_NOTICE );  
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form with GET method</title>

	<style type="text/css">
		.feedback{
			background-color: burlywood;
			padding:.5em;
			margin:1em 0;
		}
	</style>
</head>
<body>

<pre>
<?php print_r( $_GET ); ?>
</pre>




<?php if( ! empty( $_GET ) ){ ?>
	
	<div class="feedback">
		<p>Thank you for answering my survey!</p>
		<p>I also like 
		 <?php echo $_GET['fav_color']; ?>
		 and 
		 <?php echo $_GET['fav_animal'] ?>.</p>
	</div>

<?php }else{ ?>

	<form method="get" action="get-example.php" >
		<label>What's your favorite color?</label>
		<input type="text" name="fav_color">

		<br>

		<label>What's your favorite animal?</label>
		<input type="text" name="fav_animal">

		<br>

		<input type="submit">
	</form>

<?php } //end if GET not empty ?>


</body>
</html>