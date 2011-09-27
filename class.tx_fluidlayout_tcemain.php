<?php


class tx_fluidlayout_tcemain {

	/**
	 * Hook called by TYPO3 Core, before saving fieldArray to database
	 * 
	 * @param string $status
	 * @param string $table
	 * @param string $id
	 * @param array $fieldArray
	 * @param t3lib_TCEmain $pObj 
	 */
	public function processDatamap_postProcessFieldArray($status, $table, $id, &$fieldArray, $pObj) {
		
		if($table === 'pages') {
			if(array_key_exists('tx_fluidlayout_template', $fieldArray) === TRUE) {
				if(strlen($fieldArray['tx_fluidlayout_template']) > 0) {
					$record = t3lib_BEfunc::getRecord('tx_fluidlayout_template', $fieldArray['tx_fluidlayout_template'], 'backend_layout');
					$value = $record['backend_layout'];
				} else {
					$value = 0;
				}
				
				$fieldArray = array(
					'backend_layout' => $value,
					'backend_layout_next_level' => $value
				);
			}
		}
		
		
		if($table === 'tx_fluidlayout_template') {
			if(array_key_exists('backend_layout', $fieldArray) === TRUE) {
				
				$data = array();
				
				$fluidtemplateAsMainTemplate = t3lib_BEfunc::getRecordsByField('pages', 'tx_fluidlayout_template', $id);
				foreach($fluidtemplateAsMainTemplate as $page) {
					$data['pages'][$page['uid']]['backend_layout'] = $fieldArray['backend_layout'];
					$data['pages'][$page['uid']]['backend_layout_next_level'] = $fieldArray['backend_layout'];
				}
				
				$pObj->start($data, array());
				$pObj->process_datamap();

			}
		}
		
	}
	
}
?>
