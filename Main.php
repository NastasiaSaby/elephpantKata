<?php

require 'vendor/autoload.php';

$hello = new \Source\Hello();
echo $hello->sayHello($argv[1]);