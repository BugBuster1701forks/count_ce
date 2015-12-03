<?php

array_insert($GLOBALS['TL_CTE'], 3, array
(
	'jquery' => array
	(
		'countCE'      => 'ContentCountCE'
	)
));

$GLOBALS['TL_JQUERY']['countUpJS']   = '<script src="system/modules/count_ce/assets/countUp.js/dist/countUp.js"></script>';
$GLOBALS['TL_JQUERY']['waypointsJS'] = '<script src="system/modules/count_ce/assets/waypoints/lib/jquery.waypoints.min.js"></script>';
$GLOBALS['TL_JQUERY']['countCEJS']   = '<script src="system/modules/count_ce/assets/script.js"></script>';
