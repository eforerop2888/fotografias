jQuery = jQuery.noConflict();

jQuery(document).ready(function () {
    tag = jQuery(".breadcrumb .last a").html();
	jQuery("#nameTag").html(tag);

    jQuery(document).on('click','.requestfullscreen',function(e) {
        e.preventDefault();
        jQuery(this).prev('img').fullscreen();
            return false;
    });

    jQuery('div.fullscreen a').fullsizable({
	  loop: true
	});

    jQuery(document).ajaxComplete(function() {
    	if(!jQuery('#jquery-fullsizable').length){
      		jQuery('div.fullscreen a').fullsizable({
		  		loop: true,
		  		loadOptions: false
			});
		}
    });

	jQuery(document).on('click','#fullsized_playgallery',function(e) {
		e.stopPropagation();
		if (jQuery.cookie("intervalPlay") != ''){
			clearInterval(jQuery.cookie("intervalPlay"));
		}
		interval = setInterval(playGallery, 5000);
		jQuery.cookie("intervalPlay", interval);
		jQuery('#fullsized_playgallery').replaceWith('<a id="fullsized_stopgallery" href="#playgallery"><i class="fa fa-stop-circle fa-2x" aria-hidden="true"></i></a>');
	});

	jQuery(document).on('click','#fullsized_stopgallery',function(e) {
		e.stopPropagation();
		clearInterval(jQuery.cookie("intervalPlay"));
		jQuery('#fullsized_stopgallery').replaceWith('<a id="fullsized_playgallery" href="#playgallery"><i class="fa fa-play-circle fa-2x" aria-hidden="true"></i></a>');
	});

	jQuery(document).on('click','#fullsized_favoritegallery a',function(e) {
		e.stopPropagation();
	});

	jQuery(document).on('click','#fullsized_image_holder img',function(e) {
		e.stopPropagation();		
	});

	jQuery(document).on('click','#fullsized_downloadgallery',function(e) {
		e.stopPropagation();
		var imgUrl = jQuery('#fullsized_image_holder img').attr('src');
		jQuery('#fullsized_downloadgallery').attr('href', 'download_img?url=' + imgUrl);
	});

	function playGallery(){
		jQuery('#fullsized_go_next').click();
	}
});