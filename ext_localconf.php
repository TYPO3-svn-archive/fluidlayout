<?php
if (!defined ('TYPO3_MODE')) {
 	die ('Access denied.');
}

$GLOBALS['TYPO3_CONF_VARS']['FE']['addRootLineFields'] .= ',tx_fluidlayout_template';

$GLOBALS ['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][$_EXTKEY] = 'EXT:' . $_EXTKEY . '/class.tx_fluidlayout_tcemain.php:tx_fluidlayout_tcemain';
$GLOBALS ['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processCmdmapClass'][$_EXTKEY] = 'EXT:' . $_EXTKEY . '/class.tx_fluidlayout_tcemain.php:tx_fluidlayout_tcemain';

?>
