<?php
class PLCHF_QRLICIOUS_QRCODES__Validation_no_html extends PLCHF_QRLICIOUS_QRCodes_Options{	
	
	/**
	 * Field Constructor.
	 *
	 * Required - must call the parent constructor, then assign field and value to vars, and obviously call the render field function
	 *
	 * @since PLCHF_QRLICIOUS_QRCodes_Options 1.0
	*/
	function __construct($field, $value, $current){
		
		parent::__construct();
		$this->field = $field;
		$this->field['msg'] = (isset($this->field['msg']))?$this->field['msg']:__('You must not enter any HTML in this field, all HTML tags have been removed.', 'plchf_qrlicious_qrcodesopts');
		$this->value = $value;
		$this->current = $current;
		$this->validate();
		
	}//function
	
	
	
	/**
	 * Field Render Function.
	 *
	 * Takes the vars and validates them
	 *
	 * @since PLCHF_QRLICIOUS_QRCodes_Options 1.0
	*/
	function validate(){
		
		$newvalue = strip_tags($this->value);
		
		if($this->value != $newvalue){
			$this->warning = $this->field;
		}
		
		$this->value = $newvalue;
				
	}//function
	
}//class
?>