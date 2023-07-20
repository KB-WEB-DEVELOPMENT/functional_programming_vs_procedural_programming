<?php

class NullChecker {

    public function check(string $file):string
    {
        $violations = "The filetype of this file is unknown.";

        return $violations;
    }
}