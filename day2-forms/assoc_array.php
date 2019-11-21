<?php 
//create associative array
$pizza = array(
			//key => value
			'crust' 	=> 'crispy traditional',
			'sauce' 	=> 'red',
			'cheese'	=> 'three cheese blend',
			'toppings'	=> 'Sausage and Basil',
			'size'		=> 14,			 
		);

//add another item to the array
$pizza['special_instructions'] = 'Extra Crispy';

//change an existing value
$pizza['crust'] = 'Thin Crust';

//count items in the array
$count = count($pizza);
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Associative Array examples</title>
</head>
<body>
	<h1>Assoc. Arrays</h1>

	<h2>Show the whole array:</h2>
<pre>
<?php print_r($pizza); ?>
</pre>

	<h2>Show one item in array</h2>

	<?php echo $pizza['crust']; ?>

	<h2>Nice looking list with foreach:</h2>
	<h3><?php echo $count ?> total items</h3>

	<ul>
		<?php foreach ( $pizza as $key => $value ) {
			echo "<li>$key : <b>$value</b></li>";
		} ?>
	</ul>


</body>
</html>