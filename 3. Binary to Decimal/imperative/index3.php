<?php

function binToDec($bin) {
  return bindec($bin);
}

$start = microtime(true);

binToDec('11111111111111111111');

// echo microtime(true) - $start; 2.8610229492188E-6 microseconds



