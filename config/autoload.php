<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2013 Leo Feyer
 *
 * @package Og-tools
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'Aurealis',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Models
	'Contao\OGTypeModel'       => 'system/modules/og-tools/models/OGTypeModel.php',

	// Modules
	'Aurealis\ModuleFaqReader' => 'system/modules/og-tools/modules/ModuleFaqReader.php',
));
