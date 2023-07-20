<?php

namespace App\Classes;

use Illuminate\Support\Collection;

class FileChecker {

    public function check(string $file):string
    {

      $violations = is_file($file) ? "This is a valid file type file." : "This is an invalid file type file.";      
      return $violations;
    }
}