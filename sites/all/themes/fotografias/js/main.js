
jQuery = jQuery.noConflict();

jQuery(document).ready(function () {

    jQuery(document).on('click','.requestfullscreen',function(e) {
        e.preventDefault();
        jQuery(this).prev('img').fullscreen();
            return false;
    });
    jQuery('.view-id-galeria_cliente img').addClass('img-responsive');
    jQuery('.view-id-galeria_fotos_todas img').addClass('img-responsive');
    jQuery('.view-id-favoritos img').addClass('img-responsive');
    jQuery('.view-id-fotos_tags img').addClass('img-responsive');
   
});


