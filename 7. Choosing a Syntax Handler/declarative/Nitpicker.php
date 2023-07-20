<?php

namespace App\Classes;

use Illuminate\Support\Collection;

use App\Classes\BlockChecker;
use App\Classes\CharChecker;
use App\Classes\DirChecker;
use App\Classes\FifoChecker;
use App\Classes\FileChecker;
use App\Classes\LinkChecker;
use App\Classes\NullChecker;
use App\Classes\Socketchecker;
use App\Classes\UnknownChecker;

use App\Classes\CheckedFile;

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