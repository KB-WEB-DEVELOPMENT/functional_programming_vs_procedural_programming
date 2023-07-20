<?php

namespace App\Classes;

use Illuminate\Support\Collection;

class CheckedFile {
	
    public function __construct(  
        public string $file,
        public string $violations,
    ){}
}