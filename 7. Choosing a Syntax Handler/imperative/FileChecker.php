<?php

class FileChecker {

    public function check($file):string
    {
        $violations = is_file($file) ? "This is a valid file type file." : "This is an invalid file type file.";      
        return $violations;
    }
}