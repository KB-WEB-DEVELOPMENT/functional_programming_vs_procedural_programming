<?php

$productsArray = (array)json_decode(file_get_contents("products.json"));

$totalCost = 0;

$arr = [];

$start = microtime(true);
        
for($x = 0; $x < count($productsArray["products"]); $x++)
{
	if ($productsArray["products"][$x]->product_type == 'Lamp' || $productsArray["products"][$x]->product_type == 'Wallet') {
 
		foreach ($productsArray["products"][$x]->variants as $productVariant) {
			$totalCost += $productVariant->price;
		}
	}
}

echo $totalCost . "<br/>";

// echo microtime(true) - $start; 7.5817108154297E-5 microseconds
