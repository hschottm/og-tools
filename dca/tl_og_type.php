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

/**
 * Table tl_og_type
 */
$GLOBALS['TL_DCA']['tl_og_type'] = array
(

	// Config
	'config' => array
	(
		'dataContainer'               => 'Table',
		'enableVersioning'            => true,
		'sql' => array
		(
			'keys' => array
			(
				'id' => 'primary',
			)
		)
	),

	'fields' => array
	(
		'id' => array
		(
			'sql'                     => "int(10) unsigned NOT NULL auto_increment"
		),
		'name' => array
		(
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		'category' => array
		(
			'sql'                     => "varchar(255) NOT NULL default ''"
		)
	)
);

?>