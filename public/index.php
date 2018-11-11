<?php
declare(strict_tyoes=1);

require_once dirname(__DIR__).DIRECTORY_SEPARATOR.'vendor'.DIRECTORY_SEPARATOR.'autoload.php';

$helloWorld = new \App\HelloWorld();
$helloWorld->announce();
