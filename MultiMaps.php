<?php
/**
 * MultiMaps - An extension allows users to display maps and coordinate data using multiple mapping services
 *
 * @link https://www.mediawiki.org/wiki/Extension:MultiMaps Documentation
 * @file MultiMaps.php
 * @defgroup MultiMaps
 * @ingroup Extensions
 * @author Pavel Astakhov <pastakhov@yandex.ru>
 * @licence GNU General Public Licence 2.0 or later
 */

// Check to see if we are being called as an extension or directly
if ( !defined( 'MEDIAWIKI' ) ) {
	die( 'This file is an extension to MediaWiki and thus not a valid entry point.' );
}

// Register this extension on Special:Version
$wgExtensionCredits['parserhook'][] = array(
	'path'		   => __FILE__,
	'name'		   => 'MultiMaps',
	'version'		=> '0.0.1',
	'url'			=> 'https://www.mediawiki.org/wiki/Extension:MultiMaps',
	'author'		 => array( '[[mw:User:Pastakhov|Pavel Astakhov]]' ),
	'descriptionmsg' => 'multimaps-desc'
);

// Tell the whereabouts of files
$dir = __DIR__;

// Allow translations for this extension
$wgExtensionMessagesFiles['MultiMaps'] = $dir . '/MultiMaps.i18n.php';
$wgExtensionMessagesFiles['MultiMapsMagic'] = $dir . '/MultiMaps.i18n.magic.php';

// Include the settings file.
require_once $dir . '/Settings.php';

// Specify the function that will initialize the parser function.
$wgHooks['ParserFirstCallInit'][] = function( Parser &$parser ) {
   $parser->setFunctionHook( 'MAG_MULTIMAPS', 'MultiMaps::renderParserFunction_showmap' );
   return true;
};

//Preparing classes for autoloading
// TODO: $wgAutoloadClasses = array_merge( $wgAutoloadClasses, include 'MultiMaps.classes.php' );
$wgAutoloadClasses['MultiMaps'] =				   $dir . '/MultiMaps.body.php';
$wgAutoloadClasses['MultiMapsServices'] =		   $dir . '/includes/Services.php';

$wgAutoloadClasses['MultiMaps\\BaseService'] =	  $dir . '/includes/BaseService.php';
$wgAutoloadClasses['MultiMaps\\Bounds'] =		   $dir . '/includes/Bounds.php';
$wgAutoloadClasses['MultiMaps\\GeoCoordinate'] =	$dir . '/includes/GeoCoordinate.php';
$wgAutoloadClasses['MultiMaps\\Point'] =			$dir . '/includes/Point.php';

$wgAutoloadClasses['MultiMaps\\BaseMapElement'] =   $dir . '/includes/mapelements/BaseMapElement.php';
$wgAutoloadClasses['MultiMaps\\Marker'] =		   $dir . '/includes/mapelements/Marker.php';
$wgAutoloadClasses['MultiMaps\\Line'] =			 $dir . '/includes/mapelements/Line.php';
$wgAutoloadClasses['MultiMaps\\Polygon'] =		  $dir . '/includes/mapelements/Polygon.php';
$wgAutoloadClasses['MultiMaps\\Rectangle'] =		$dir . '/includes/mapelements/Rectangle.php';
$wgAutoloadClasses['MultiMaps\\Circle'] =		   $dir . '/includes/mapelements/Circle.php';

//define modules that can later be loaded during the output
$wgResourceModules['ext.MultiMaps'] = array(
	'styles' => array('resources/multimaps.css'),
	'localBasePath' => $dir,
	'remoteExtPath' => 'MultiMaps',
	'group' => 'ext.MultiMaps',
	);

// Leaflet service
$wgAutoloadClasses["MultiMaps\Leaflet"] =  $dir . '/services/Leaflet/Leaflet.php';
$wgResourceModules['ext.MultiMaps.Leaflet'] = array(
	'scripts' => array( 'ext.leaflet.js' ),
	'localBasePath' => $dir . '/services/Leaflet',
	'remoteExtPath' => 'MultiMaps/services/Leaflet',
	'group' => 'ext.MultiMaps',
	);

$wgHooks['UnitTestsList'][] = 'efMultiMapsRegisterUnitTests';
function efMultiMapsRegisterUnitTests( &$files ) {
		$testDir = __DIR__ . '/tests/phpunit';
		$files = array_merge( $files, glob( "$testDir/includes/*Test.php" ) );
		$files = array_merge( $files, glob( "$testDir/includes/mapelements/*Test.php" ) );
		$files = array_merge( $files, glob( "$testDir/services/*Test.php" ) );
		$files = array_merge( $files, glob( "$testDir/services/Leaflet/*Test.php" ) );
		return true;
}