<?php

function getGitHubScore(string $username):int
{
	  $opts = [
            'http' => [
                'method' => 'GET',
                'header' => [
                        'User-Agent: PHP'
                ]
            ]
       ];

       $context = stream_context_create($opts);

       $url = "https://api.github.com/users/" . $username . "/events";

       $content = file_get_contents($url, false, $context);

	   $events = json_decode($content, true);
	   	 				
	   $eventTypes = [];
 
	   foreach ($events as $event) {
			$eventTypes[] = $event['type'];
	   }
 
	   $score = 0;
		
	   foreach ($eventTypes as $eventType) {
			$score = match($eventType) {
					'PushEvent' => $score += 5,
					'CreateEvent' => $score += 4,
					'IssuesEvent' => $score += 3,
					'CommitCommentEvent' => $score += 2,					
					default => $score += 1,
			};
		}
	
		return $score;
}
