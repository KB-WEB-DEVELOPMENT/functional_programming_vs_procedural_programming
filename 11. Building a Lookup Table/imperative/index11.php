<?php
function getLookupTable():array
{
	$employees = include("employees.php"); 
	
	$emailLookup = [];
	
	foreach ($employees as $emp) {

		$emailLookup[$emp["email"]] = $emp["name"];
	}
	
	return $emailLookup;
}

$start = microtime(true);

$emailLookup = getLookupTable();

// var_dump($emailLookup);

// echo microtime(true) - $start; 0.0016350746154785 microseconds

