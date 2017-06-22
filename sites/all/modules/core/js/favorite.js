(function ($) {
  var processed = false;
  Drupal.behaviors.favorite = {
    attach:function (context) {
      if (!processed) {
        $(document).on('click', ".favoriteLink",function(e){
        //$('.favoriteLink', context).once('core', function(){
          e.stopPropagation();
          e.preventDefault();
          fid = $(this).attr('data-fid');
          $.ajax({
            url: Drupal.settings.basePath + 'add/favorite/' + fid,
            beforeSend: function(xhr) {
              $('.output-favorite-' + fid).prepend('<img src="' + Drupal.settings.basePath + 'misc/throbber-active.gif" >');
            },
            success: function(data) {
              $('.output-favorite-' + fid).html(data);
            }
          });
        });
        processed = true;
      }
    }
  }
})(jQuery);