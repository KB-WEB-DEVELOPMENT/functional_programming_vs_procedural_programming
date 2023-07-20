<?php
require 'BlockChecker.php';
require 'CharChecker.php';
require 'DirChecker.php';
require 'FifoChecker.php';
require 'FileChecker.php';
require 'LinkChecker.php';
require 'NullChecker.php';
require 'Socketchecker.php';
require 'UnknownChecker.php';
require 'CheckedFile.php';

class Nitpicker {

    public function checkFile(string $file):object
    {

        $violations = $this->getCheckerFor(file:$file)->check(file:$file);
        $checkedFile =  new CheckedFile(file:$file,violations:$violations);
        
        return $checkedFile;
    }

    public function getCheckerFor(string $file):object
    {
        $checker = match(filetype($file)) {

            'fifo' => new FifoChecker($file),
            'char' => new CharChecker($file),
            'dir' => new DirChecker($file),
            'block' => new BlockChecker($file),
            'link' => new LinkChecker($file),
            'file' => new FileChecker($file),
            'socket' => new SocketChecker($file),
            'unknown' => new UnknownChecker($file),
             default => new NullChecker($file),		
		};
        return $checker;
    }

}