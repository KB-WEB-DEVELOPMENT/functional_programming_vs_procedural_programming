<?php
 
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Illuminate\Support\Collection;

use App\Classes\InMemoryMailer;

class CollectionController extends Controller
{
    
    public function show()
    {    
      $inMemoryMailer = new InMemoryMailer();
    
      $start = microtime(true);   

      $boolResult = $inMemoryMailer->hasMessageFor(email:'mail2@gmail.com');
      
      $timespan = microtime(true) - $start;

      dd($timespan); // 5.3882598876953E-5 microseconds

    }
}	
