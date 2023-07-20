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
        
        $messages = getMessages();

        $start = microtime(true);

        $implodedMessages =  collect($messages)->map(function ($message) {
                                    return "- {$message}\n";
                             })->implode('');

        $timespan = microtime(true) - $start;
        
        dd($timespan); //0.00013899803161621 microseconds
    }
}	
