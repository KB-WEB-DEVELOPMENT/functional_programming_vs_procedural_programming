<?php

function buildComment():string
{
	$messagesArray = include("messages.php");
	
	$comment = '';
 
	foreach ($messagesArray as $message) {
		$comment .= "- {$message}\n";
	}
	return $comment;
}

$start = microtime(true);

buildComment();

// echo microtime(true) - $start; 0.00059890747070312 microseconds
