<?php if( DEBUG_MODE ){ ?>
<div class="debug-output">
	<h2>POST data:</h2>
	<pre><?php print_r( $_POST ); ?></pre>

	<h2>COOKIE data:</h2>
	<pre><?php print_r( $_COOKIE ); ?></pre>

	<h2>GET data:</h2>
	<pre><?php print_r( $_GET ); ?></pre>

	<h2>SESSION data:</h2>
	<pre><?php print_r( $_SESSION); ?></pre>
</div>
<?php } ?>