<?php

########################################################################
# Extension Manager/Repository config file for ext "ad_google_maps_plugin_kml".
#
# Auto generated 25-04-2011 12:50
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'ad: Google Maps Plugin KML-Layer',
	'description' => 'Extends the extension ad: Google Maps (ad_google_maps) with a KML layer.',
	'category' => 'plugin',
	'shy' => 0,
	'version' => '0.0.0',
	'dependencies' => 'ad_google_maps',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'beta',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 1,
	'lockType' => '',
	'author' => 'Arno Dudek',
	'author_email' => 'webmaster@adgrafik.at',
	'author_company' => 'ad:grafik',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'typo3' => '4.5.0-',
			'extbase' => '1.3.0-',
			'fluid' => '1.3.0-',
			'ad_google_maps' => '1.1.0-',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:17:{s:9:"ChangeLog";s:4:"c76b";s:21:"ext_conf_template.txt";s:4:"43a1";s:12:"ext_icon.gif";s:4:"f587";s:14:"ext_tables.php";s:4:"0611";s:14:"ext_tables.sql";s:4:"9785";s:25:"Classes/Api/Layer/Kml.php";s:4:"52e0";s:34:"Classes/Domain/Model/Layer/Kml.php";s:4:"f950";s:36:"Classes/Plugin/Options/Layer/Kml.php";s:4:"e9a9";s:42:"Classes/MapBuilder/Layer/Kml.php";s:4:"5cd1";s:34:"Configuration/TypoScript/setup.txt";s:4:"4d87";s:48:"Resources/Private/Language/locallang_extconf.xml";s:4:"15ce";s:44:"Resources/Private/Language/locallang_tca.xml";s:4:"5dd5";s:54:"Resources/Private/Language/locallang_tca_csh_layer.xml";s:4:"09be";s:38:"Resources/Public/Icons/TCA/IconKml.gif";s:4:"4460";s:73:"Resources/Public/JavaScript/Plugin/Tx_AdGoogleMapsPluginKml_Plugin_Kml.js";s:4:"eec7";s:32:"Resources/Public/KmlTest/cta.kml";s:4:"62b2";s:14:"doc/manual.sxw";s:4:"9cc8";}',
	'suggests' => array(
	),
);

?>