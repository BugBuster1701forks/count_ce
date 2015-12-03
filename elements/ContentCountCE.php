<?php

namespace Contao;

class ContentCountCE extends \ContentElement
{
	protected $strTemplate = 'ce_count';

	protected function compile()
	{
		if (TL_MODE == 'BE')
		{
			$this->strTemplate = 'be_wildcard';

			$objTemplate = new \BackendTemplate($this->strTemplate);

			$this->Template = $objTemplate;
			$this->Template->title = $this->headline;
		}

		$replace = "<span class=\"cemaster\" data-from=\"" . $this->count_from . "\" data-to=\"" . $this->count_to . "\">" . $this->count_from . "</span>";
		$this->Template->count_text = sprintf($this->count_text, $replace);
	}
}
