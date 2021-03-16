<?php

	//variablat
	$number = 1;
	$float = 12.32;
	$text = 'Hello World';

	//If statements... ne kete rast nuk i krahason datatype
	if( 1 == '1') {
		echo 'True';
	}else {
		echo 'False';
	}

	//Krahasohen edhe datatype
	if( 1 === '1') {
		echo 'True';
	}else {
		echo 'False';
	}

	// Arrays...mundemi mu shkru ne dy menyra
	$vargu = ['Filan', 1, 'John'];
	$vargu1 = array('Filan', 1, 'John');

	// Array associative
	$people = [
		'id' => 1,
		'name' => 'Filan',
		'mbiemri' => 'Fisteku'
	];

	//Foreach loop
	foreach($vargu as $values)
	{
		echo "{$values} <br>";
	}

	//While loop
	$i = 0;
	while($i < sizeof($vargu)) {
		echo $vargu[$i]. '<br>';
		$i++;
	}

	//functions
	function dd($value)
	{
		echo '<pre>';
			die(var_dump($value));
		echo '</pre>';
	}

	//include dhe require
	include 'path/to/your/header';
	require 'path/to/your/header';

	//Predefined Variables
	$GLOBALS
	$_SERVER
	$_REQUEST
	$_POST
	$_GET
	$_FILES
	$_ENV
	$_COOKIE
	$_SESSION
	
	//PHP & JSON

	json_encode();
	json_decode();

	//Show information about some variables:
	print_r($variable);
	var_dump($variable);
	
	 if($_SESSION['permission']==1){ 
	 
	 // ja shfaqim permbajtjen }
	}else{
		header("Location: index.php");
	}
	
	if( isset($_SESSION['name']) ){
		header("Location: index");
	}else{
		echo "Session name not exist";
	}
?>

