<?php declare(strict_types = 1);

namespace App\Presenters;

use Nette\Application\UI\Presenter;
use Nette\Bridges\ApplicationLatte\Template;

/**
 * Base presenter for all application presenters.
 *
 * @property-read Template $template
 */
abstract class BasePresenter extends Presenter
{

	protected function beforeRender(): void
	{
		parent::beforeRender();

		$this->template->widgets = (object) [
			'dropdown' => __DIR__ . '/../widgets/dropdown.latte',
			'modal' => __DIR__ . '/../widgets/modal.latte',
		];
	}

}
