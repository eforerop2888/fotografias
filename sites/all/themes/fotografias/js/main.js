
jQuery = jQuery.noConflict();

jQuery(document).ready(function () {

    jQuery(document).on('click','.requestfullscreen',function(e) {
        e.preventDefault();
        jQuery(this).prev('img').fullscreen();
            return false;
    });
    
    jQuery(".view-galeria-cliente img").addClass("img-responsive");
    jQuery(".view-id-galeria_fotos_todas img").addClass("img-responsive");
   
});


