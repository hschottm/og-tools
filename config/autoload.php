<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @license LGPL-3.0+
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
	'Contao\OGTypeModel'           => 'system/modules/og-tools/models/OGTypeModel.php',

	// Modules
	'Aurealis\ModuleFaqReader'     => 'system/modules/og-tools/modules/ModuleFaqReader.php',
	'Aurealis\ModuleFaqReaderBase' => 'system/modules/og-tools/modules/ModuleFaqReaderBase.php',
));
