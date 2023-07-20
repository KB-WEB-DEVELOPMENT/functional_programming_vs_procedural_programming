<?php

function hasMessageFor(string $emailAddress):bool
{
	$emailMessagesArray = include("emailMessages.php");
	
	return (in_array($emailAddress,$emailMessagesArray["recipients"])) ? true : false;  

}

$start = microtime(true);

echo hasMessageFor("jane@example.com") . "<br/>"; // 1

// echo microtime(true) - $start; 0.00035881996154785 microseconds

