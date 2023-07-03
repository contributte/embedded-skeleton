<?php declare(strict_types = 1);

namespace App\Model;

use Contributte\Utils\Strings;
use Latte\Loaders\FileLoader as FileLoaderLatte;

class ExtraFileLoader extends FileLoaderLatte
{

	protected string $delimiter = '~';

	/** @var array<string> */
	protected array $widgets = [];

	/**
	 * @param array<string> $widgets
	 */
	public function setWidgets(array $widgets): void
	{
		$this->widgets = $widgets;
	}

	public function addWidget(string $name, string $template): void
	{
		$this->widgets[$name] = $template;
	}

	/**
	 * @param array<string> $widgets
	 */
	public function withWidgets(array $widgets): self
	{
		$this->setWidgets($widgets);

		return $this;
	}

	public function setDelimiter(string $delimiter): void
	{
		$this->delimiter = $delimiter;
	}

	public function withDelimiter(string $delimiter): self
	{
		$this->setDelimiter($delimiter);

		return $this;
	}

	public function getContent(string $fileName): string
	{
		if (str_starts_with($fileName, $this->delimiter)) {
			$widget = Strings::substring($fileName, strlen($this->delimiter));

			$fileName = $this->widgets[$widget] ?? $fileName;
		}

		return parent::getContent($fileName);
	}

	public function getReferredName(string $file, string $referringFile): string
	{
		if (str_starts_with($file, $this->delimiter)) {
			return $file;
		}

		return parent::getReferredName($file, $referringFile);
	}

}
