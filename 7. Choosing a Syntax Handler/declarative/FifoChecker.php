<?php

namespace App\Classes;

use Illuminate\Support\Collection;

class FifoChecker {
    
    public function check(string $file):string
    {
        $violations = is_file($file) ? "This is a valid Fifo type file." : "This is an invalid Fifo type file.";      
        return $violations;
    }
}