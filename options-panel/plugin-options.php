<?php
if(!class_exists('PLCHF_QRLICIOUS_QRCodes_Options')){
	require_once( dirname( __FILE__ ) . '/options/options.php' );
}

/*
 * This is the meat of creating the optons page
 *
 * Override some of the default values, uncomment the args and change the values
 * - no $args are required, but there there to be over ridden if needed.
 *
 *
 */

function plchf_qrlicious_qrcodessetup_framework_options(){
	
	$args = array();
	
	// MAKE SURE THIS GETS SET TO SOMETHING UNIQUE
	$args['opt_name'] = 'plugin_chief_qrlicious_qrcodes';
	$args['dev_mode'] = false;
	$args['show_import_export'] = false;
	$args['menu_title'] = __('QRlicious', 'plchf_qrlicious_qrcodes_opts');
	$args['page_title'] = __('QRlicious QR Codes', 'plchf_qrlicious_qrcodes_opts');
	$args['page_slug'] = 'plchf_qrlicious_qrcodes_opts';
	// $args['page_type'] = 'submenu';
	// $args['page_parent'] = 'pluginchiefqrlicious_qrcodes';
	$args['allow_sub_menu'] = false;
	
	$args['help_tabs'][] = array(
		'id' => 'plchf_qrlicious_qrcodes_opts-1',
		'title' => __('Theme Information 1', 'plchf_qrlicious_qrcodes_opts'),
		'content' => __('<p>This is the tab content, HTML is allowed.</p>', 'plchf_qrlicious_qrcodes_opts')
	);
	$args['help_tabs'][] = array(
		'id' => 'plchf_qrlicious_qrcodes_opts-2',
		'title' => __('Theme Information 2', 'plchf_qrlicious_qrcodes_opts'),
		'content' => __('<p>This is the tab content, HTML is allowed.</p>', 'plchf_qrlicious_qrcodes_opts')
	);
	
	$sections = array();
	
	$sections[] = array(
		'icon' 	=> PLCHF_QRLICIOUS_QRCODES_URL.'img/glyphicons/glyphicons_258_qrcode.png',
		'title' => __('QR Code Preview Settings', 'plchf_qrlicious_qrcodes_opts'),
		'desc' 	=> __('<p class="description">This is the Description. Again HTML is allowed2</p>', 'plchf_qrlicious_qrcodes_opts'),
		'fields' => array(
						
		// text|textarea|editor|checkbox|multi_checkbox|radio|radio_img|button_set|select|multi_select|color|date|divide|info|upload
		//builtin validation includes: email|html|html_custom|no_html|js|numeric|url
						
			array(
				'id' => 'metabox_position',
				'type' => 'select',
				'title' => __('QR Code Metabox Position', 'plchf_qrlicious_qrcodes_opts'),
				'sub_desc' => __('Select the location of the Meta Box', 'plchf_qrlicious_qrcodes_opts'),
				'options' => array(
					'side' => 'Side',
					'advanced' => 'Advanced',
					'normal' => 'Normal',
				)
			),
			array(
				'id' => 'metabox_priority',
				'type' => 'select',
				'title' => __('QR Code Metabox Priority', 'plchf_qrlicious_qrcodes_opts'),
				'sub_desc' => __('Select the priority of the Meta Box', 'plchf_qrlicious_qrcodes_opts'),
				'options' => array(
					'high' => 'High',
					'core' => 'Core',
					'default' => 'Default',
					'low' => 'Low'
				)
			),
		)
	);
	
	$sections[] = array(
		'icon' 	=> PLCHF_QRLICIOUS_QRCODES_URL.'img/glyphicons/glyphicons_258_qrcode.png',
		'title' => __('QR Code Order Form', 'plchf_qrlicious_qrcodes_opts'),
		'fields' => array(
						
		// text|textarea|editor|checkbox|multi_checkbox|radio|radio_img|button_set|select|multi_select|color|date|divide|info|upload
		//builtin validation includes: email|html|html_custom|no_html|js|numeric|url
						
			array(
				'id' => 'show_order_form',
				'type' => 'select',
				'title' => __('QR Code Metabox Position', 'plchf_qrlicious_qrcodes_opts'),
				'sub_desc' => __('Select the location of the Meta Box', 'plchf_qrlicious_qrcodes_opts'),
				'options' => array(
					'show' => 'Show',
					'hide' => 'Hide',
				)
			),
		)
	);					
					
	$tabs = array();
	
	global $PLCHF_QRLICIOUS_QRCodes_Options;
	$PLCHF_QRLICIOUS_QRCodes_Options = new PLCHF_QRLICIOUS_QRCodes_Options($sections, $args, $tabs);
	
}

add_action('init', 'plchf_qrlicious_qrcodessetup_framework_options', 0);