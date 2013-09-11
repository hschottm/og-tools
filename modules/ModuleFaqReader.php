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


/**
 * Class ModuleFaqPage
 *
 * @copyright  Helmut Schottmüller 2013
 * @author     Helmut Schottmüller <https://github.com/hschottm/og-tools>
 * @package    Faq
 */
class ModuleFaqReader extends \Contao\ModuleFaqReader
{

	/**
	 * Generate the module
	 */
	protected function compile()
	{
		\Contao\ModuleFaqReader::compile();
		$faq = \FaqModel::findPublishedByParentAndIdOrAlias(\Input::get('items'), $this->faq_categories);
		if ($faq != null)
		{
					if ($faq->og_add)
					{
						if (strlen($faq->og_title)) $GLOBALS['TL_HEAD'][] = '<meta property="og:title" content="' . specialchars($faq->og_title) . '"/>';
						if (strlen($faq->og_url)) 
						{
							$GLOBALS['TL_HEAD'][] = '<meta property="og:url" content="' . specialchars($faq->og_url) . '"/>';
						}
						else
						{
							$doc = new \DOMDocument();
							$doc->loadHTML($this->convertRelativeUrls('<img src="' . $this->replaceInsertTags('{{faq_url::' . \Input::get('items') . '}}') . '" />'));
							$imageTags = $doc->getElementsByTagName('img');
							$absoluteurl = '';
							foreach($imageTags as $tag) 
							{
								$absoluteurl = $tag->getAttribute('src');
							}
							if (strlen($absoluteurl))
							{
								$GLOBALS['TL_HEAD'][] = '<meta property="og:url" content="' . specialchars($absoluteurl) . '"/>';
							}
						}
						if (strlen($faq->og_site_name)) $GLOBALS['TL_HEAD'][] = '<meta property="og:site_name" content="' . specialchars($faq->og_site_name) . '"/>';
						$t = \OGTypeModel::findOneById($faq->og_type);
						if ($t)
						{
							if (strlen($faq->og_type)) $GLOBALS['TL_HEAD'][] = '<meta property="og:type" content="' .specialchars($t->name) . '"/>';
						}
						if ($faq->og_images)
						{
							$images = array();
							if (strlen($this->Template->src)) 
							{
								$doc = new \DOMDocument();
								$doc->loadHTML($this->convertRelativeUrls('<img src="' . $this->Template->src . '" />'));
								$imageTags = $doc->getElementsByTagName('img');
								foreach($imageTags as $tag) 
								{
									$images[] = $tag->getAttribute('src');
								}
							}
							$doc = new \DOMDocument();
							$doc->loadHTML($this->convertRelativeUrls($this->Template->answer));
							$imageTags = $doc->getElementsByTagName('img');
							foreach($imageTags as $tag) 
							{
								$images[] = $tag->getAttribute('src');
							}
							if (count($images))
							{
								foreach ($images as $url)
								{
									if (strlen($url)) $GLOBALS['TL_HEAD'][] = '<meta property="og:image" content="' . $url . '"/>';
								}
							}
						}
						if (strlen($faq->og_locale)) $GLOBALS['TL_HEAD'][] = '<meta property="og:locale" content="' . specialchars($faq->og_locale) . '"/>';
						if (strlen($faq->og_determiner)) $GLOBALS['TL_HEAD'][] = '<meta property="og:determiner" content="' . specialchars($faq->og_determiner) . '"/>';
						if (strlen($faq->og_description)) $GLOBALS['TL_HEAD'][] = '<meta property="og:description" content="' . specialchars($faq->og_description) . '"/>';
						if (strlen($faq->og_see_also)) $GLOBALS['TL_HEAD'][] = '<meta property="og:see_also" content="' . specialchars($faq->og_see_also) . '"/>';
					}
		}
	}
}
