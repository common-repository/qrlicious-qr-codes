<?php
class PLCHF_QRLICIOUS_QRCodes_Options_textarea extends PLCHF_QRLICIOUS_QRCodes_Options{	
	
	/**
	 * Field Constructor.
	 *
	 * Required - must call the parent constructor, then assign field and value to vars, and obviously call the render field function
	 *
	 * @since PLCHF_QRLICIOUS_QRCodes_Options 1.0
	*/
	function __construct($field = array(), $value ='', $parent){
		
		parent::__construct($parent->sections, $parent->args, $parent->extra_tabs);
		$this->field = $field;
		$this->value = $value;
		//$this->render();
		
	}//function
	
	
	
	/**
	 * Field Render Function.
	 *
	 * Takes the vars and outputs the HTML for the field in the settings
	 *
	 * @since PLCHF_QRLICIOUS_QRCodes_Options 1.0
	*/
	function render(){
		
		$class = (isset($this->field['class']))?$this->field['class']:'large-text';
		
		$placeholder = (isset($this->field['placeholder']))?' placeholder="'.esc_attr($this->field['placeholder']).'" ':'';
		
		echo '<textarea id="'.$this->field['id'].'" name="'.$this->args['opt_name'].'['.$this->field['id'].']" '.$placeholder.'class="'.$class.'" rows="6" >'.esc_attr($this->value).'</textarea>';
		
		echo (isset($this->field['desc']) && !empty($this->field['desc']))?'<br/><span class="description">'.$this->field['desc'].'</span>':'';
		
	}//function
	
}//class
?>