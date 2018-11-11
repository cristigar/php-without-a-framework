<?php
declare(strict_tyoes=1);

use App\HelloWorld;
use DI\ContainerBuilder;
use function DI\create;

require_once dirname(__DIR__).DIRECTORY_SEPARATOR.'vendor'.DIRECTORY_SEPARATOR.'autoload.php';

$containerBuilder = new ContainerBuilder();
$containerBuilder->useAutowiring(false);
$containerBuilder->useAnnotations(false);
$containerBuilder->addDefinitions([
    HelloWorld::class => create(HelloWorld::class),
]);
$container = $containerBuilder->build();

$helloWorld = $container->get(HelloWorld::class);
$helloWorld->announce();
