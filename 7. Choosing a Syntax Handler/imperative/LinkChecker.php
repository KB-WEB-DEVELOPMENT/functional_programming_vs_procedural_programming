<?php

class LinkChecker {

    public function check(string $file):string
    {
        $violations = is_file($file) ? "This is a valid link type file." : "This is an invalid link type file.";      
        return $violations;
    }
}