<?php
 
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Illuminate\Support\Collection;

use App\Classes\GitHubScore;

class CollectionController extends Controller
{    
	public function show()
    {    
      $gitHubObj = new GitHubScore(username:"KB-WEB-DEVELOPMENT");
      
      $kamiScore = $gitHubObj->score(); //$timespan = 0.23328900337219  microseconds

      $sebastianScore = $gitHubObj->getScoreForUser("sebastianbergmann");

      $timespan = microtime(true) - $start; //$timespan = 0.04991602897644 microseconds
      
    }
}	
