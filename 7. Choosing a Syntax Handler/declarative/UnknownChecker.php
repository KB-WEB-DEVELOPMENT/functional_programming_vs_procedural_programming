<?php

namespace App\Classes;

use Illuminate\Support\Collection;

class UnknownChecker {

    public function check(string $file):string
    {
        $violations = is_file($file) ? "This is a valid unknown type file." : "This is an invalid unknown type file.";      
        return $violations; 
    }
}