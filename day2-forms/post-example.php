<?php 
error_reporting( E_ALL & ~E_NOTICE );  
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form with POST method</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.3.0/milligram.min.css">
	<style type="text/css">
		body{
			max-width:30em;
			margin:0 auto;
		}
		.feedback{
			background-color: beige;
			padding:.5em;
			margin:1em 0;
		}

	</style>
</head>
<body>

<pre>
<?php print_r( $_POST ); ?>
</pre>




<?php if( ! empty( $_POST ) ){ ?>
	
	<div class="feedback">
		<p>Thank you for answering my survey!</p>
		<p>I also like 
		 <?php echo $_POST['fav_color']; ?>
		 and 
		 <?php echo $_POST['fav_animal'] ?>.</p>
	</div>

<?php }else{ ?>

	<form method="post" action="post-example.php" >
		<label>What's your favorite color?</label>
		<input type="text" name="fav_color">

		<br>

		<label>What's your favorite animal?</label>
		<input type="text" name="fav_animal">

		<br>

		<input type="submit">
	</form>

<?php } //end if POST not empty ?>


</body>
</html>