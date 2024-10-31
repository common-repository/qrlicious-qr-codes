<?php
class PLCHF_QRLICIOUS_QRCODES__Validation_preg_replace extends PLCHF_QRLICIOUS_QRCodes_Options{	
	
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
		
		$this->value = preg_replace($this->field['preg']['pattern'], $this->field['preg']['replacement'], $this->value);
				
	}//function
	
}//class
?>