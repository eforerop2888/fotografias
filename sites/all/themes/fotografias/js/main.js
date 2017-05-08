
jQuery = jQuery.noConflict();

jQuery(document).ready(function () {

    jQuery(document).on('click','.requestfullscreen',function(e) {
        e.preventDefault();
        jQuery(this).prev('img').fullscreen();
            return false;
    });
    jQuery('.view-id-galeria_fotos_todas .view-content').sortablePhotos({
      	selector: '> .my-item-photo',
    	sortable: true,
    	padding: 1
  	});

  	jQuery('.view-id-galeria_cliente .view-content').sortablePhotos({
      	selector: '> .my-item-photo',
    	sortable: true,
    	padding: 1
  	});
   
});


