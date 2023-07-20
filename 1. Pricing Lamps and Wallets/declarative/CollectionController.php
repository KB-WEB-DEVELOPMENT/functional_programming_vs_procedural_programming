<?php
 
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Illuminate\Support\Collection;

class CollectionController extends Controller
{
    
    public function show()
    {       

        $start = microtime(true);
        
        $data = file_get_contents(storage_path() . "/products.json");
   
        $productJson = json_decode($data,true); 
    
        $products = collect($productJson['products']);
    
        $sum =  $products->filter(function ($product) {
                    return collect(['Lamp', 'Wallet'])->contains($product['product_type']);
                })->flatMap(function ($product) {
                        return $product['variants'];
                    })->sum('price');

        $timespan = microtime(true) - $start;
        
        dd($timespan); // 0.0013389587402344 microseconds 

    }
}	
