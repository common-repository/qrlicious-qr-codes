<?php
class PLCHF_QRLICIOUS_QRCODES__Validation_no_special_chars extends PLCHF_QRLICIOUS_QRCodes_Options{	
	
	/**
	 * Field Constructor.
	 *
	 * Required - must call the parent constructor, then assign field and value to vars, and obviously call the render field function
	 *
	 * @since PLCHF_QRLICIOUS_QRCodes_Options 1.0.1
	*/
	function __construct($field, $value, $current){
		
		parent::__construct();
		$this->field = $field;
		$this->field['msg'] = (isset($this->field['msg']))?$this->field['msg']:__('You must not enter any special characters in this field, all special characters have been removed.', 'plchf_qrlicious_qrcodesopts');
		$this->value = $value;
		$this->current = $current;
		$this->validate();
		
	}//function
	
	
	
	/**
	 * Field Render Function.
	 *
	 * Takes the vars and validates them
	 *
	 * @since PLCHF_QRLICIOUS_QRCodes_Options 1.0.1
	*/
	function validate(){
		
		if(!preg_match('/[^a-zA-Z0-9_ -]/s', $this->value) == 0){
			$this->warning = $this->field;
		}
		
		$this->value = preg_replace('/[^a-zA-Z0-9_ -]/s', '', $this->value);
				
	}//function
	
}//class
?>