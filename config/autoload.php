<?php

ClassLoader::addNamespaces(array
(
	'Contao'
));

ClassLoader::addClasses(array
(
	'Contao\ContentCountCE' => 'system/modules/count_ce/elements/ContentCountCE.php'
));

TemplateLoader::addFiles(array
(
	'ce_count'      => 'system/modules/count_ce/templates/elements'
));