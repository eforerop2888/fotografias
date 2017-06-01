
jQuery = jQuery.noConflict();

jQuery(document).ready(function () {
    tag = jQuery(".breadcrumb .last a").html();
	jQuery("#nameTag").html(tag);

    jQuery(document).on('click','.requestfullscreen',function(e) {
        e.preventDefault();
        jQuery(this).prev('img').fullscreen();
            return false;
    });
   
});



