<?php
class PLCHF_QRLICIOUS_QRCODES__Validation_str_replace extends PLCHF_QRLICIOUS_QRCodes_Options{	
	
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
		
		$this->value = str_replace($this->field['str']['search'], $this->field['str']['replacement'], $this->value);
				
	}//function
	
}//class
?>