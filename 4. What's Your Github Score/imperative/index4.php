<?php

require "githubscore.php";

$start = microtime(true);

$score = getGitHubScore(username:"bradtraversy");

// var_dump($score);

//echo microtime(true) - $start; 1.0471658706665 microseconds
