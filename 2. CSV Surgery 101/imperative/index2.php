<?php

$shifts = include("ids.php");

$ids = [];

$start = microtime(true);

foreach ($shifts as $shift) {
   if (strrpos($shift, '_') !== false) {
		$underscorePosition = strrpos($shift, '_');
		$substringOffset = $underscorePosition + 1;
		$ids[] = substr($shift, $substringOffset);
  } else {
	    $ids[] = $shift;
  }	  
}
// var_dump($ids);

// echo microtime(true) - $start; 6.0081481933594E-5 microseconds
