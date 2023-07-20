<?php
 
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Illuminate\Support\Collection;

use App\Functions\funcs;

class CollectionController extends Controller
{
    
    public function show()
    {    
        $lastYear = getLastYear();
        $thisYear = getThisYear();

        $start = microtime(true);

        $diff =  collect($thisYear)->zip($lastYear)->map(function ($thisAndLast) {
                return round($thisAndLast[0] - $thisAndLast[1],2);
        })->toArray();
        
        $timespan = microtime(true) - $start;

        dd($timespan);  // 0.00071811676025391 microseconds
    }
}	
