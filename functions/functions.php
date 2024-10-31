<?php

/* ---------------------------------------------------------------------------- */
/* Adds Meta Box to all Public Post Types
/* ---------------------------------------------------------------------------- */

	function plchf_qrlicious_qrcodes_custom_meta_box() {
		
		// Get Plugin Options
		global $plchf_qrlicious_qrcodes_options;
		$priority = $plchf_qrlicious_qrcodes_options['metabox_priority'];
		$position = $plchf_qrlicious_qrcodes_options['metabox_position'];
		
		
		$post_types = get_post_types( array( 'public' => true ) );
	    
	    foreach ( $post_types as $post_type ) {
	    
	    	add_meta_box( 'plchf_qrlicious_qrcode_preview', 'QRlicious QR Codes', 'plchf_qrlicious_qrcodes_metabox_content', $post_type, $position, $priority );
	    
	    }
	
	}
	
	add_action('admin_init','plchf_qrlicious_qrcodes_custom_meta_box');

/* ---------------------------------------------------------------------------- */
/* Adds Content to the QRlicious QR Codes Meta Box
/* ---------------------------------------------------------------------------- */	

	function plchf_qrlicious_qrcodes_metabox_content() {

		global $post;
		
		// Get Post ID
		$postid = $post->ID;
		
		// Post Status
		$post_status = get_post_status($postid);
		$post_type = get_post_type($postid);
		$post_type = str_ireplace('_',' ',$post_type);
		$post_type = str_ireplace('-',' ',$post_type);
		$post_type = ucwords($post_type);
		
		// 'publish' - A published post or page
		// 'pending' - post is pending review
		// 'draft' - a post in draft status
		// 'auto-draft' - a newly created post, with no content
		// 'future' - a post to publish in the future
		// 'private' - not visible to users who are not logged in
		// 'inherit' - a revision. see get_children.
		// 'trash' - post is in trashbin. added with Version 2.9.
		
		if ( ($post_status == 'publish') || ($post_status == 'pending') || ($post_status == 'draft') || ($post_status == 'future') || ($post_status == 'private') || ($post_status == 'inherit') || ($post_status == 'trash')) {
		
			$qrcode_data .= get_permalink($postid);
			
		} else {
			
			$qrcode_data .= 'You Must Save the Post Before Previewing the QR Code';
			
		}
		
		$output .= '<div style="width:96%; background:transparent; padding:2%; text-align:left;">';
			
			$output .= '<style type="text/css">img{max-width:100%; height:auto;}</style>';
		
			$output .= '<img src="https://chart.googleapis.com/chart?cht=qr&chs=250x250&chl='.$qrcode_data.'&choe=UTF-8&chld=M|4">';
		
			$output .= '<br/>';
			
			$output .= '<h4>Scan to view the '.$post_type.' on your mobile device</h4>';

		$output .= '</div>';
		
		echo $output;
		
	}
	
/* ---------------------------------------------------------------------------- */
/* Adds Meta Box to all Public Post Types
/* ---------------------------------------------------------------------------- */

	function plchf_qrlicious_qrcodes_order_form_meta_box() {
		
		// Get Plugin Options
		global $plchf_qrlicious_qrcodes_options;
		$show_form = $plchf_qrlicious_qrcodes_options['show_order_form'];

		$post_types = get_post_types( array( 'public' => true ) );
	    
	    if ($show_form != 'hide') {
	    	
	    	foreach ( $post_types as $post_type ) {
	    
	    		add_meta_box( 'plchf_qrlicious_qrcodes_order_form', 'Order a QRlicious QR Code', 'plchf_qrlicious_qrcodes_order_form_meta_box_content', $post_type, 'normal', 'high' );
	    
	    	}
	    
	    } 
	
	}
	
	add_action('admin_init','plchf_qrlicious_qrcodes_order_form_meta_box');

/* ---------------------------------------------------------------------------- */
/* Adds Content to the QRlicious QR Codes Meta Box
/* ---------------------------------------------------------------------------- */

	function plchf_qrlicious_qrcodes_order_form_meta_box_content() {
		
		global $post;
		
		// Get Post ID
		$postid = $post->ID;

		$output .= '<div style="width:96%; background:transparent; padding:2%; text-align:left;">';
		
			$output .= '
			<style type="text/css">
				img{max-width:100%; height:auto;}
				.fsFieldRow input[type="text"], .fsForm textarea {max-width:80%!important;}
			</style>';
		
			$output .= '<script type="text/javascript" src="https://www.formstack.com/forms/js.php?1182238-kmIO4MzQln-v2&qr_code_data='.get_permalink($postid).'"></script><noscript><a href="https://www.formstack.com/forms/?1182238-kmIO4MzQln&qr_code_data='.get_permalink($postid).'" title="Online Form">Online Form - Styled Custom QR Code - NEW</a></noscript>';
		
		$output .= '</div>';
		
		echo $output; 
		
	}