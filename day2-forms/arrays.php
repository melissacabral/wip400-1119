<?php 
//create an array with many items
$pizza_toppings = array( 'sauce', 'olives', 'mushrooms', 'artichokes', 'red peppers', 'Caramelized Onions' );

$pizza_toppings[] = 'Pepperoni';

//shuffle($pizza_toppings);

//alphabetize the keys
sort($pizza_toppings);

//count the items
$count = count($pizza_toppings);
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Working with Arrays</title>
</head>
<body>

<h1>Arrays</h1>

<h2>Show the whole array:</h2>
<pre>
<?php print_r($pizza_toppings); ?>
</pre>

<h2>Show one item in the array:</h2>
<?php echo $pizza_toppings[3]; ?>


<h2>A nice looking list of all <?php echo $count; ?> toppings:</h2>

<ul>

	<?php 
	foreach ( $pizza_toppings as $topping ) {
		echo "<li>$topping</li>";
	} 
	?>

</ul>


</body>
</html>