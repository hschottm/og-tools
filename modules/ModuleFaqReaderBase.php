<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2013 Leo Feyer
 *
 * @package Faq
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Run in a custom namespace, so the class can be replaced
 */
namespace Aurealis;

if (class_exists("\FaqExtensions\ModuleFaqReader"))
{
	class ModuleFaqReaderBase extends \FaqExtensions\ModuleFaqReader
	{
		
	}
}
else
{
	class ModuleFaqReaderBase extends \Contao\ModuleFaqReader
	{
		
	}
}
