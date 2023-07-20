<?php
 
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Illuminate\Support\Collection;

use App\Functions\funcs;

class CollectionController extends Controller
{
    
    public function show5(Request $request)
    {    
       $binary = $request->binary;
       
       $start = microtime(true);

       $sum = collect(str_split($binary))
                    ->reverse()
                    ->values()
                    ->map(function ($column, $exponent) {
                        return $column * (2 ** $exponent);
                    })
                    ->sum();        
    
        $timespan = microtime(true) - $start;

        dd($timespan); // 8.082389831543E-5 microseconds (for $binary = 11111111111111111111)

    }
}	
