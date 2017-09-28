<?php
	
	$obj = new main();
	
	// set the $text string we're working with
	$text = '&nbsp; Hello, world! I am an example string and I will be used in the string examples!  ';
	
	// this array describes the transformations we're using (the keys), with descriptors where necessary, and provides the transformed $text
	$strFunctions = array(
		'print'        => $text,
		'strtolower'   => strtolower($text), 
		'str_shuffle'  => str_shuffle($text),
		'strlen'       => strlen($text),
		'rtrim'        => rtrim($text),
		'ucwords'      => ucwords($text),
		'strstr (looking for everything before "world")' 
					=> strstr($text, 'world', true),
		'hebrev'       => hebrev($text),
		'chop'         => chop($text),
		'number_format (8675309.0666)' 
					=> number_format(8675309.06666, 3, '.', ', ')
		);
	
	// output for String Functions section
	foreach ($strFunctions as $name=>$snip) {
		//$obj->openSection('s');
		$obj->printString($snip, $name);
		$obj->endSection();
	}

	// section separator
	echo '<br><br><br>';
	// now we set the array to work with, and the functions array
	$testArray = array(
		3617, 8888, 3, 224, .5, 10016, 98.6, 8888, .036852, 3.1415926535897932384
		);
	$arrFunctions = array(
		'array_chunk' => array_chunk($testArray, 6),
		'array_count_values' => array_count_values($testArray),
/*		'' => $testArray,
		'' => $testArray,
		'' => $testArray,
		'' => $testArray,
		'' => $testArray,
		'' => $testArray,
		'' => $testArray, */
		'array_rand' => array_rand($testArray)
		);
	
	// output for Array Functions
	foreach ($arrFunctions as $name=>$funct) {
		$obj->printArray($funct, $name);
		$obj->endSection();
	}

	class main {
		
		public function __construct() {
			echo 'Starting the function display: </br>';
			}

		public function printString($str, $funcName) {
			echo '<h1>String function demo - '.$funcName.'</h1>';
			print($str);
		}

		public function printArray($array, $funcName) {
			echo '<h1>Array Function demo - '.$funcName.'</h1>';
			echo '<pre>';
			print_r($array);
			echo '</pre>';
		}
		
		public function openSection($type) {
			$t = ($type=='s')?'String':'Array';
			echo '<h1>'.$t.' function demo - '.$funcName.'</h1>';
		}
		
		public function endSection() {
			echo '<hr>';
		}
    
		public function __destruct() {
			echo '</br> All done!';
		}

	}

?>