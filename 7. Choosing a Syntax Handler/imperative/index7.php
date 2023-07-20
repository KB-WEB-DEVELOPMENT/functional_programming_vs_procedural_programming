<?php

require 'Nitpicker.php';

$nitpicker = new Nitpicker();

$someFile = (string)null;

$start = microtime(true);

$checkedFile = $nitpicker->checkFile(file:$someFile);

// var_dump($checkedFile); 

// echo microtime(true) - $start; 1.5020370483398E-5 microseconds
