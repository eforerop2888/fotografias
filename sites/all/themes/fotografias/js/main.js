
jQuery = jQuery.noConflict();


jQuery(document).ready(function () {

    jQuery(".fancybox").click(function(){
        //var elem = document.getElementById("h1");
        var img = jQuery("#img");

        img.onclick = function() {
            req = img.requestFullScreen || img.webkitRequestFullScreen || img.mozRequestFullScreen;
            req.call(img);
        }    
    })
    
    jQuery(".view-galeria-cliente img").addClass("img-responsive");
    jQuery(".view-id-galeria_fotos_todas img").addClass("img-responsive");
    
   
});


