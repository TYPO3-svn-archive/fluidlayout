<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

t3lib_extMgm::addStaticFile($_EXTKEY, '/static', 'FLUIDTEMPLATE, auto configuration');

$TCA['tx_fluidlayout_template'] = array (
	'ctrl' => array (
		'title'     => 'LLL:EXT:fluidlayout/locallang_db.xml:tx_fluidlayout_template',		
		'label'     => 'name',	
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'default_sortby' => 'ORDER BY crdate',	
		'delete' => 'deleted',	
		'enablecolumns' => array (		
			'disabled' => 'hidden',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'icon_tx_fluidlayout_template.gif',
	),
);

$tempColumns = array (
    'tx_fluidlayout_template' => array (        
        'exclude' => 0,        
        'label' => 'LLL:EXT:fluidlayout/locallang_db.xml:pages.tx_fluidlayout_template',        
        'config' => array (
            'type' => 'select',
			'items' => array(
				'' => ''
			),
            'foreign_table' => 'tx_fluidlayout_template',    
            'foreign_table_where' => 'ORDER BY tx_fluidlayout_template.name',    
            'size' => 1
        )
    ),
	'backend_layout_next_level' => array (
		'config' => array (
			'type' => 'passthrough'
		)
	)
);

t3lib_div::loadTCA('pages');
t3lib_extMgm::addTCAcolumns('pages',$tempColumns,1);
t3lib_extMgm::addToAllTCAtypes('pages','tx_fluidlayout_template;;;;1-1-1', '', 'replace:backend_layout');


?>
