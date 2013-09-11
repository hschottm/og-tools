<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2013 Helmut Schottmüller
 *
 * @package og-tools
 * @link    https://github.com/hschottm/og-tools
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */

$GLOBALS['TL_DCA']['tl_faq']['palettes']['default'] = str_replace('{expert_legend', '{og_legend},og_add;{expert_legend', $GLOBALS['TL_DCA']['tl_faq']['palettes']['default']);
$GLOBALS['TL_DCA']['tl_faq']['palettes']['__selector__'][] = 'og_add';
$GLOBALS['TL_DCA']['tl_faq']['subpalettes']['og_add'] = 'og_title,og_url,og_site_name,og_type,og_images,og_description,,og_locale,og_determiner,og_see_also';

$GLOBALS['TL_DCA']['tl_faq']['fields']['og_add'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['MSC']['og_add'],
	'exclude'                 => true,
	'filter'                  => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('submitOnChange'=>true),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_faq']['fields']['og_title'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['MSC']['og_title'],
	'exclude'                 => true,
	'search'                  => true,
	'sorting'                 => true,
	'flag'                    => 1,
	'inputType'               => 'text',
	'eval'                    => array('mandatory'=>true, 'maxlength'=>255),
	'sql'                     => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_faq']['fields']['og_url'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['MSC']['og_url'],
	'exclude'                 => true,
	'search'                  => true,
	'sorting'                 => true,
	'flag'                    => 1,
	'inputType'               => 'text',
	'eval'                    => array('mandatory'=>false, 'maxlength'=>255, 'rgxp'=>'url'),
	'sql'                     => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_faq']['fields']['og_site_name'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['MSC']['og_site_name'],
	'exclude'                 => true,
	'search'                  => true,
	'sorting'                 => true,
	'flag'                    => 1,
	'inputType'               => 'text',
	'eval'                    => array('mandatory'=>true, 'maxlength'=>255),
	'sql'                     => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_faq']['fields']['og_locale'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['MSC']['og_locale'],
	'exclude'                 => true,
	'search'                  => true,
	'sorting'                 => true,
	'flag'                    => 1,
	'inputType'               => 'text',
	'eval'                    => array('mandatory'=>false, 'maxlength'=>10, 'tl_class'=>'w50'),
	'sql'                     => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_faq']['fields']['og_type'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['MSC']['og_type'],
	'exclude'                 => true,
	'search'                  => true,
	'sorting'                 => true,
	'flag'                    => 1,
	'inputType'               => 'select',
	'foreignKey'              => 'tl_og_type.name',
	'eval'                    => array('doNotCopy'=>true, 'chosen'=>true, 'mandatory'=>true, 'includeBlankOption'=>false, 'tl_class'=>'w50'),
	'sql'                     => "int(10) unsigned NOT NULL default '0'"
);

$GLOBALS['TL_DCA']['tl_faq']['fields']['og_images'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['MSC']['og_images'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50 m12'),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_faq']['fields']['og_description'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['MSC']['og_description'],
	'exclude'                 => true,
	'search'                  => true,
	'inputType'               => 'textarea',
	'eval'                    => array('mandatory'=>false, 'allowHtml'=>false, 'helpwizard'=>false),
	'sql'                     => "text NULL"
);

$GLOBALS['TL_DCA']['tl_faq']['fields']['og_determiner'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['MSC']['og_determiner'],
	'exclude'                 => true,
	'search'                  => true,
	'sorting'                 => true,
	'flag'                    => 1,
	'inputType'               => 'text',
	'eval'                    => array('mandatory'=>false, 'maxlength'=>20, 'tl_class'=>'w50'),
	'sql'                     => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_faq']['fields']['og_see_also'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['MSC']['og_see_also'],
	'exclude'                 => true,
	'search'                  => true,
	'sorting'                 => true,
	'flag'                    => 1,
	'inputType'               => 'text',
	'eval'                    => array('mandatory'=>false, 'maxlength'=>255, 'rgxp'=>'url'),
	'sql'                     => "varchar(255) NOT NULL default ''"
);

