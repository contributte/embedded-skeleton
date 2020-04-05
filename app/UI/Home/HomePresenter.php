<?php declare(strict_types = 1);

namespace App\UI\Home;

use App\UI\BasePresenter;
use RuntimeException;
use Tracy\Debugger;
use Tracy\ILogger;

class HomePresenter extends BasePresenter
{

	public function handleException(): void
	{
		throw new RuntimeException(sprintf('This is example error. Date is "%s"', date('d.m.Y HH:mm:ss')));
	}

	public function handleError(): void
	{
		Debugger::log(sprintf('This is example log. Date is "%s"', date('d.m.Y HH:mm:ss')), ILogger::ERROR);
	}

}
