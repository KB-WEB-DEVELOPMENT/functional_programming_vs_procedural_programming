<?php

class BlockChecker {

    public function check(string $file):string
    {
        $violations = is_file($file) ? "This is a valid block type file." : "This is an invalid block type file.";      
        return $violations;
    }
}