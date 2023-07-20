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

        $items = getData();

        $start = microtime(true);

        $transpose = collect(array_map(function (...$items) {
                        return $items;
                     },...$items))->toArray();

        $timespan = microtime(true) - $start;

        dd($timespan); // 2.5033950805664E-5  microseconds
        
    }
}	
