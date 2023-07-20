<?php

namespace App\Classes;

use Illuminate\Support\Collection;

class NullChecker {

    public function check(string $file):string
    {
        $violations = "The filetype of this file is unknown.";

        return $violations;
    }
}