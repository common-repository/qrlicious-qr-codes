jQuery(document).ready(function(){
	
	
	if(jQuery('#last_tab').val() == ''){

		jQuery('.plchf_qrlicious_qrcodesopts-group-tab:first').slideDown('fast');
		jQuery('#plchf_qrlicious_qrcodesopts-group-menu li:first').addClass('active');
	
	}else{
		
		tabid = jQuery('#last_tab').val();
		jQuery('#'+tabid+'_section_group').slideDown('fast');
		jQuery('#'+tabid+'_section_group_li').addClass('active');
		
	}
	
	
	jQuery('input[name="'+plchf_qrlicious_qrcodes_opts.opt_name+'[defaults]"]').click(function(){
		if(!confirm(plchf_qrlicious_qrcodes_opts.reset_confirm)){
			return false;
		}
	});
	
	jQuery('.plchf_qrlicious_qrcodesopts-group-tab-link-a').click(function(){
		relid = jQuery(this).attr('data-rel');
		
		jQuery('#last_tab').val(relid);
		
		jQuery('.plchf_qrlicious_qrcodesopts-group-tab').each(function(){
			if(jQuery(this).attr('id') == relid+'_section_group'){
				jQuery(this).delay(400).fadeIn(1200);
			}else{
				jQuery(this).fadeOut('fast');
			}
			
		});
		
		jQuery('.plchf_qrlicious_qrcodesopts-group-tab-link-li').each(function(){
				if(jQuery(this).attr('id') != relid+'_section_group_li' && jQuery(this).hasClass('active')){
					jQuery(this).removeClass('active');
				}
				if(jQuery(this).attr('id') == relid+'_section_group_li'){
					jQuery(this).addClass('active');
				}
		});
	});
	
	
	
	
	if(jQuery('#plchf_qrlicious_qrcodesopts-save').is(':visible')){
		jQuery('#plchf_qrlicious_qrcodesopts-save').delay(4000).slideUp('slow');
	}
	
	if(jQuery('#plchf_qrlicious_qrcodesopts-imported').is(':visible')){
		jQuery('#plchf_qrlicious_qrcodesopts-imported').delay(4000).slideUp('slow');
	}	
	
	jQuery('input, textarea, select').change(function(){
		jQuery('#plchf_qrlicious_qrcodesopts-save-warn').slideDown('slow');
	});
	
	
	jQuery('#plchf_qrlicious_qrcodesopts-import-code-button').click(function(){
		if(jQuery('#plchf_qrlicious_qrcodesopts-import-link-wrapper').is(':visible')){
			jQuery('#plchf_qrlicious_qrcodesopts-import-link-wrapper').fadeOut('fast');
			jQuery('#import-link-value').val('');
		}
		jQuery('#plchf_qrlicious_qrcodesopts-import-code-wrapper').fadeIn('slow');
	});
	
	jQuery('#plchf_qrlicious_qrcodesopts-import-link-button').click(function(){
		if(jQuery('#plchf_qrlicious_qrcodesopts-import-code-wrapper').is(':visible')){
			jQuery('#plchf_qrlicious_qrcodesopts-import-code-wrapper').fadeOut('fast');
			jQuery('#import-code-value').val('');
		}
		jQuery('#plchf_qrlicious_qrcodesopts-import-link-wrapper').fadeIn('slow');
	});
	
	
	
	
	jQuery('#plchf_qrlicious_qrcodesopts-export-code-copy').click(function(){
		if(jQuery('#plchf_qrlicious_qrcodesopts-export-link-value').is(':visible')){jQuery('#plchf_qrlicious_qrcodesopts-export-link-value').fadeOut('slow');}
		jQuery('#plchf_qrlicious_qrcodesopts-export-code').toggle('fade');
	});
	
	jQuery('#plchf_qrlicious_qrcodesopts-export-link').click(function(){
		if(jQuery('#plchf_qrlicious_qrcodesopts-export-code').is(':visible')){jQuery('#plchf_qrlicious_qrcodesopts-export-code').fadeOut('slow');}
		jQuery('#plchf_qrlicious_qrcodesopts-export-link-value').toggle('fade');
	});
	
	

	
	
	
});