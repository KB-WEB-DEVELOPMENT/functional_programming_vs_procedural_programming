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
        
        $shifts = getIds();

        $start = microtime(true);

        $shiftIds =  collect($shifts)->map(function ($shift) {
            return collect(explode('_', $shift))->last();
         });

        $timespan = microtime(true) - $start;
        
        dd($timespan);  // 0.00060510635375977 microseconds 

    }
}	
