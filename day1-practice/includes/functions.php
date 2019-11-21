<?php

//create a new function
function do_stuff( $message ){
	//any existing functions can go in here
	echo 'I Just did stuff<br>';
	echo $message;
	echo '<br>';
}

//function that makes the date/time in a human-friendly format
function human_friendly_date( $date = 'today' ){
	$output = new DateTime( $date );
	echo $output->format('l, F j');
}



//no close php on functions files