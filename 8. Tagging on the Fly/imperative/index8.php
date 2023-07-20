<?php

function normalizeTagstoIds():array
{
	$tags = include("tags.php");
		
	$normalizedTags = [];
	
	for($i=0;$i<count($tags);$i++) { 	
		if (is_numeric($tags[$i])) {
			$normalizedTags["id"][$i] = $tags[$i];
		} else {
			$normalizedTags["name"][$i] = $tags[$i];
		  }
	
	}	
	return $normalizedTags;
}

$start = microtime(true);

$normalizedTags = normalizeTagstoIds();

// var_dump($normalizedTags);

// echo microtime(true) - $start; 0.00051498413085938 microseconds
