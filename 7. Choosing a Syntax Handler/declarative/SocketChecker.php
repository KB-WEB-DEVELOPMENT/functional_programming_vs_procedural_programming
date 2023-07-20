<?php

namespace App\Classes;

use Illuminate\Support\Collection;

class SocketChecker {

    public function check(string $file):string
    {
        $violations = is_file($file) ? "This is a valid socket type file." : "This is an invalid socket type file.";      
        return $violations;
    }
}