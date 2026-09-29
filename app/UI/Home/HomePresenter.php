<?php declare(strict_types = 1);

namespace App\UI\Home;

use App\UI\BasePresenter;
use Nette\Application\Attributes\Persistent;

class HomePresenter extends BasePresenter
{

	#[Persistent]
	public int $counter = 0;

	public function renderDefault(): void
	{
		$this->template->counter = $this->counter;
	}

	public function handleIncrement(): void
	{
		$this->counter++;

		if ($this->isAjax()) {
			$this->redrawControl('ajaxCard');
			$this->redrawControl('counter');
		} else {
			$this->redirect('this');
		}
	}

}
