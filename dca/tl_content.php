<?php

$GLOBALS['TL_DCA']['tl_content']['palettes']['countCE'] = '{type_legend},type,headline;{count_legend},count_from,count_to,count_text;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space;{invisible_legend:hide},invisible,start,stop';

$GLOBALS['TL_DCA']['tl_content']['fields']['count_from'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['count_from'],
	'inputType'               => 'text',
	'default'                 => 0,
	'eval'                    => array('mandatory'=>true, 'rgxp'=>'digit', 'maxlength' => 20, 'tl_class'=>'w50'),
	'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['count_to'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['count_to'],
	'inputType'               => 'text',
	'default'                 => 100,
	'eval'                    => array('mandatory'=>true, 'rgxp'=>'digit', 'maxlength' => 20, 'tl_class'=>'w50'),
	'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['count_text'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['count_text'],
	'inputType'               => 'textarea',
	'default'                 => '%s',
	'eval'                    => array('mandatory'=>true, 'allowHtml'=>true, 'tl_class'=>'clr'),
	'sql'                     => "blob NOT NULL"
);
