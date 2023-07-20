<?php

class DirChecker {

    public function check(string $file):string
    {
        $violations = is_file($file) ? "This is a valid dir type file." : "This is an invalid dir type file.";      
        return $violations;
    }
}