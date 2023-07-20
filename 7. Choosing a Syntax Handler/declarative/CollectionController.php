<?php
 
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Illuminate\Support\Collection;

use App\Classes\Nitpicker;

class CollectionController extends Controller
{
    
    public function show9()
    {    
      $nitpicker = new Nitpicker();
      
      $someFile = (string)null;

      $start = microtime(true);

      $checkedFile = $nitpicker->checkFile(file:$someFile);
    
      $timespan = microtime(true) - $start;

      dd($timespan); // 5.6982040405273E-5 microseconds
      
    }
}	
