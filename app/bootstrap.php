<?php declare(strict_types = 1);

use Nette\Configurator;

require __DIR__ . '/../vendor/autoload.php';

$configurator = new Configurator();

//$configurator->setDebugMode(true);
//$configurator->setDebugMode(['10.0.0.1']);
$configurator->enableTracy(__DIR__ . '/../var/log');

$configurator->setTimeZone('Europe/Prague');
$configurator->setTempDirectory(__DIR__ . '/../var/tmp');

$configurator->createRobotLoader()
	->addDirectory(__DIR__)
	->register();

$configurator->addConfig(__DIR__ . '/config/config.neon');

if (file_exists(__DIR__ . '/config/config.local.neon')) {
	$configurator->addConfig(__DIR__ . '/config/config.local.neon');
}

$container = $configurator->createContainer();

return $container;
