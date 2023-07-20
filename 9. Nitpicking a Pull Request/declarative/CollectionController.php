<?php
 
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

use App\Functions\funcs;

use App\Classes\PullRequest;

class CollectionController extends Controller
{

    public function show()
    {    
      $pullRequests = getPullRequests(); 
      
      $pr = new PullRequest();
      
      $start = microtime(true);

      $uniqueNonEmptyComments = $pr->changedFiles($pullRequests)
                                   ->checkFile()
                                   ->comments()
                                   ->removeDuplicate()
                                   ->getNonEmpty();
    
      $timespan = microtime(true) - $start;

      dd($timespan); // 0.0016999244689941 microseconds 

    }

}
