<?php 

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use Rabin\API\SayHello as SayHello;

echo SayHello::world();

