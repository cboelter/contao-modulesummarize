<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2013 Leo Feyer
 *
 * @package   ModuleSummarize
 * @author    Christopher Bölter
 * @license   LGPL
 * @copyright boelter.eu - Christopher Bölter
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'Boelter',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Modules
	'Boelter\ModuleSummarize' => 'system/modules/modulesummarize/modules/ModuleSummarize.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'mod_summarize_default' => 'system/modules/modulesummarize/templates/modules',
	'mod_summarize_plain'   => 'system/modules/modulesummarize/templates/modules',
));
