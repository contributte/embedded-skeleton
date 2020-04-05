<?php declare(strict_types = 1);

namespace App\Model;

use Nette\Application\IRouter;
use Nette\Application\Routers\Route;
use Nette\Application\Routers\RouteList;

class RouterFactory
{

	public static function createRouter(): IRouter
	{
		$router = new RouteList();
		$router[] = new Route('<presenter>/<action>', 'Home:default');

		return $router;
	}

}
