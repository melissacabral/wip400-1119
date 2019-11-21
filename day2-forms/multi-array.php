<?php 
//create the array
$products = array(
	1 => array(
		'name' => 'Laptop',
		'price' => 1499.99,
		'description' => 'A decent little laptop',
	),
	2 => array(
		'name' => 'Binder',
		'price' => 4.99,
		'description' => 'Just holds paper',
	),
	3 => array(
		'name' => 'Blue Pens',
		'price' => 6.25,
		'description' => 'The best color pens',
	),
);
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Multi-dimensional Array Example</title>
</head>
<body>

<h2>Show the whole array</h2>
<pre>
<?php print_r($products) ?>
</pre>

<h2>Show one item</h2>
<pre>
<?php print_r($products[1]); ?>
</pre>

<h2>Show just the name of the first product</h2>
<?php echo $products[1]['name']; ?>

<h1>Product Catalog:</h1>

<?php 
foreach( $products as $product_id => $product_info ){ 
	//check what is in $product_info
	//print_r($product_info);
	?>
	<div class="product">
		<h2><?php echo $product_info['name']; ?></h2>
		<p><?php echo $product_info['description']; ?></p>
		<span class="price">$<?php echo $product_info['price']; ?></span>
	</div>
<?php 
} //end foreach 
?>

</body>
</html>