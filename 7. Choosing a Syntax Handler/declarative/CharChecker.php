<?php

namespace App\Classes;

use Illuminate\Support\Collection;

class CharChecker {

    public function check($file):string
    {
        $violations = is_file($file) ? "This is a valid char type file." : "This is an invalid char type file.";      
        return $violations;
    }
}