<?php

function getUniqueComments():array
{
	$pullRequests = include("pullRequests.php"); 
	
	$filter = "changed";

	$changedPullRequests = array_filter($pullRequests, function($pr) use ($filter){
		return ($pr['fileStatus'] == $filter);
	});

	$allComments = [];
	
	foreach ($changedPullRequests as $cpr) {
		$allComments[] = $cpr["comments"];
	}
	
	$nonNullComments = array_filter($allComments);
	
	$uniqueComments = array_unique($nonNullComments);
		
	return $uniqueComments;	
	      
}

$start = microtime(true);

$uniqueComments = getUniqueComments();

// var_dump($uniqueComments);

// echo microtime(true) - $start; 0.0016169548034668 microseconds
