<?php
class PLCHF_QRLICIOUS_QRCodes_Options_multi_text extends PLCHF_QRLICIOUS_QRCodes_Options{	
	
	/**
	 * Field Constructor.
	 *
	 * Required - must call the parent constructor, then assign field and value to vars, and obviously call the render field function
	 *
	 * @since PLCHF_QRLICIOUS_QRCodes_Options 1.0.5
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
	 * @since PLCHF_QRLICIOUS_QRCodes_Options 1.0.5
	*/
	function render(){
		
		$class = (isset($this->field['class']))?$this->field['class']:'regular-text';
		
		echo '<ul id="'.$this->field['id'].'-ul">';
		
		if(isset($this->value) && is_array($this->value)){
			foreach($this->value as $k => $value){
				if($value != ''){
				
					echo '<li><input type="text" id="'.$this->field['id'].'-'.$k.'" name="'.$this->args['opt_name'].'['.$this->field['id'].'][]" value="'.esc_attr($value).'" class="'.$class.'" /> <a href="javascript:void(0);" class="plchf_qrlicious_qrcodesopts-multi-text-remove">'.__('Remove', 'plchf_qrlicious_qrcodesopts').'</a></li>';
					
				}//if
				
			}//foreach
		}else{
		
			echo '<li><input type="text" id="'.$this->field['id'].'" name="'.$this->args['opt_name'].'['.$this->field['id'].'][]" value="" class="'.$class.'" /> <a href="javascript:void(0);" class="plchf_qrlicious_qrcodesopts-multi-text-remove">'.__('Remove', 'plchf_qrlicious_qrcodesopts').'</a></li>';
		
		}//if
		
		echo '<li style="display:none;"><input type="text" id="'.$this->field['id'].'" name="" value="" class="'.$class.'" /> <a href="javascript:void(0);" class="plchf_qrlicious_qrcodesopts-multi-text-remove">'.__('Remove', 'plchf_qrlicious_qrcodesopts').'</a></li>';
		
		echo '</ul>';
		
		echo '<a href="javascript:void(0);" class="plchf_qrlicious_qrcodesopts-multi-text-add" rel-id="'.$this->field['id'].'-ul" rel-name="'.$this->args['opt_name'].'['.$this->field['id'].'][]">'.__('Add More', 'plchf_qrlicious_qrcodesopts').'</a><br/>';
		
		echo (isset($this->field['desc']) && !empty($this->field['desc']))?' <span class="description">'.$this->field['desc'].'</span>':'';
		
	}//function
	
	
	/**
	 * Enqueue Function.
	 *
	 * If this field requires any scripts, or css define this function and register/enqueue the scripts/css
	 *
	 * @since PLCHF_QRLICIOUS_QRCodes_Options 1.0.5
	*/
	function enqueue(){
		
		wp_enqueue_script(
			'plchf_qrlicious_qrcodesopts-field-multi-text-js', 
			PLCHF_QRLICIOUS_QRCODES_URL.'fields/multi_text/field_multi_text.js', 
			array('jquery'),
			time(),
			true
		);
		
	}//function
	
}//class
?>