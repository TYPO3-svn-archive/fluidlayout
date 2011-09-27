<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

$TCA['tx_fluidlayout_template'] = array (
	'ctrl' => $TCA['tx_fluidlayout_template']['ctrl'],
	'interface' => array (
		'showRecordFieldList' => 'hidden,name,file,layout_root_path,partial_root_path,backend_layout'
	),
	'feInterface' => $TCA['tx_fluidlayout_template']['feInterface'],
	'columns' => array (
		'hidden' => array (		
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'  => array (
				'type'    => 'check',
				'default' => '0'
			)
		),
		'name' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:fluidlayout/locallang_db.xml:tx_fluidlayout_template.name',		
			'config' => array (
				'type'     => 'input',
				'eval'     => 'trim,required',
			)
		),
		'file' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:fluidlayout/locallang_db.xml:tx_fluidlayout_template.file',		
			'config' => array (
				'type'     => 'input',
				'eval'     => 'trim,required',
				'wizards'  => array(
					'_PADDING' => 2,
					'link'     => array(
						'type'         => 'popup',
						'title'        => 'Link',
						'icon'         => 'link_popup.gif',
						'script'       => 'browse_links.php?mode=wizard',
						'JSopenParams' => 'height=300,width=500,status=0,menubar=0,scrollbars=1',
						'params' => array (
							'blindLinkOptions' => 'page,url,mail,spec,folder',
						)
					)
				)
			)
		),
		'layout_root_path' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:fluidlayout/locallang_db.xml:tx_fluidlayout_template.layout_root_path',		
			'config' => array (
				'type'     => 'input',
				'eval'     => 'trim',
				'wizards'  => array(
					'_PADDING' => 2,
					'link'     => array(
						'type'         => 'popup',
						'title'        => 'Link',
						'icon'         => 'link_popup.gif',
						'script'       => 'browse_links.php?mode=wizard',
						'JSopenParams' => 'height=300,width=500,status=0,menubar=0,scrollbars=1',
						'params' => array (
							'blindLinkOptions' => 'page,url,mail,spec,file',
						)
					)
				)
			)
		),
		'partial_root_path' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:fluidlayout/locallang_db.xml:tx_fluidlayout_template.partial_root_path',		
			'config' => array (
				'type'     => 'input',
				'eval'     => 'trim',
				'wizards'  => array(
					'_PADDING' => 2,
					'link'     => array(
						'type'         => 'popup',
						'title'        => 'Link',
						'icon'         => 'link_popup.gif',
						'script'       => 'browse_links.php?mode=wizard',
						'JSopenParams' => 'height=300,width=500,status=0,menubar=0,scrollbars=1',
						'params' => array (
							'blindLinkOptions' => 'page,url,mail,spec,file',
						)
					)
				)
			)
		),
		'backend_layout' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:fluidlayout/locallang_db.xml:tx_fluidlayout_template.backend_layout',		
			'config' => array (
				'type' => 'select',	
				'items' => array (
					array ('', 0)
				),
				'foreign_table' => 'backend_layout',
				'foreign_table_where' => 'ORDER BY backend_layout.title ASC',
			)
		),
	),
	'types' => array (
		'0' => array('showitem' => 'hidden;;1;;1-1-1, name, file, layout_root_path, partial_root_path, backend_layout')
	),
	'palettes' => array (
		'1' => array('showitem' => '')
	)
);
?>
