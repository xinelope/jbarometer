<?php
defined( '_JEXEC' ) or die( 'Restricted Access' );
if(!defined('DS')) define('DS', DIRECTORY_SEPARATOR);
require_once(dirname(__FILE__).DS.'helper.php');
$jbaro = new JBarometerHelper();
$stand = $jbaro->getKompParas('stand');
$standdatum = $jbaro->getKompParas('standdatum');
$etappe1 = $jbaro->getKompParas('etappe1');
$datum1 = $jbaro->getKompParas('datum1');
$zielsumme = $jbaro->getKompParas('zielsumme');
$zieldatum = $jbaro->getKompParas('zieldatum');
$diff = $etappe1 - $stand; 
require_once(JModuleHelper::getLayoutPath('mod_jbarometer'));
?>
