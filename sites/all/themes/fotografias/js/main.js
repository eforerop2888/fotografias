
jQuery = jQuery.noConflict();

jQuery(document).ready(function () {

    jQuery(document).on('click','.requestfullscreen',function(e) {
        e.preventDefault();
        jQuery(this).prev('img').fullscreen();
            return false;
    });
   
});


