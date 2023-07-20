<?php

class CheckedFile {
	
    public function __construct(  
        public string $file,
        public string $violations,
    ){}
}