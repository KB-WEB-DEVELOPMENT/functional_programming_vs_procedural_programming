<?php

function rankCompetition()
{
	$scores = include("scores.php");

	$sortingColumn = array_column($scores, 'score');
	
	array_multisort($sortingColumn,SORT_DESC,$scores);

	for ($i = 0; $i < count($scores); $i++) {
		
		$scores[$i]["rank"] = $i+1;
	} 
	
	$keysScoresArray = array_column($scores, 'score');
 
	$uniqueKeysScoresArray = array_unique($keysScoresArray); 
	
	$duplicateKeysScoresArray = array_diff_assoc($keysScoresArray,$uniqueKeysScoresArray);
  
	 foreach($duplicateKeysScoresArray as $key => $val) {
		
		$scores[$key]["rank"] = $scores[$key-1]["rank"];
		
	}

	return $scores; 
}
	

$start = microtime(true);

$s = rankCompetition();

// echo "<pre>";print_r($s);echo "</pre>";

echo microtime(true) - $start; // 0.0062758922576904 microseconds
