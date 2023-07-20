<?php

namespace App\Classes;

use Illuminate\Support\Collection;

class GitHubScore
{
    public function __construct(  
        public string $username 
    ){}

    public static function getScoreForUser($username):int
    {
        return (new self(username:$username))->score();
    }
   
    public function score(): int
    {
        return $this->events()
                    ->pluck('type')
                    ->map(function ($eventType) {
                           return $this->lookupScore($eventType);
                    })
                    ->sum();
    }

    private function events():Collection
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

        $url = "https://api.github.com/users/" . $this->username . "/events";

        $content = file_get_contents($url, false, $context);

        return collect(json_decode($content, true));

    }

    private function lookupScore(string $eventType):Collection|int
    {
        return collect([
                    'PushEvent' => 5,
                    'CreateEvent' => 4,
                    'IssuesEvent' => 3,
                    'CommitCommentEvent' => 2,
                ])
                ->get($eventType, 1);
    }
 }