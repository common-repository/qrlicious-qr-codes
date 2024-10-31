/*
 *
 * PLCHF_QRLICIOUS_QRCodes_Options_radio_img function
 * Changes the radio select option, and changes class on images
 *
 */
function plchf_qrlicious_qrcodes_radio_img_select(relid, labelclass){
	jQuery(this).prev('input[type="radio"]').prop('checked');

	jQuery('.plchf_qrlicious_qrcodesradio-img-'+labelclass).removeClass('plchf_qrlicious_qrcodesradio-img-selected');	
	
	jQuery('label[for="'+relid+'"]').addClass('plchf_qrlicious_qrcodesradio-img-selected');
}//function