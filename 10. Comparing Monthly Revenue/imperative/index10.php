<?php

function getDifference():array
{
	$thisYear = include("thisYear.php"); 
	$lastYear = include("lastYear.php");      

	$deltas = [];
 
	foreach ($lastYear as $month => $monthlyRevenue) {
		
		$deltas[] = round($thisYear[$month] - $monthlyRevenue,2);
	}
	
	return $deltas;

}

$start = microtime(true);

getDifference();

// echo microtime(true) - $start; 0.00088286399841309 microseconds

