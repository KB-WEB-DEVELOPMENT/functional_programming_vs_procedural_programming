<?php

function transposeFormInput()
{
	$untransposedContacts = include("contacts.php");
	
	$arraySize = count($untransposedContacts);
 
	$flattenedArray = array_merge(...$untransposedContacts);

	$tr = [];
	
	foreach($flattenedArray as $key => $val) {
   
		if (fmod($key,3)==0) {
			$tr["person 1"][$key] = $val;
		}

		if (fmod($key,3)==1) {
			$tr["person 2"][$key] = $val;
		}
		
		if (fmod($key,3)==2) {
			$tr["person 3"][$key] = $val;
		}		
	}	
		
	return $tr;
}		

$start = microtime(true);

$transposedContacts = transposeFormInput();

echo microtime(true) - $start; // 0.0038280487060547 microseconds


