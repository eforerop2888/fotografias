(function ($) {
  Drupal.behaviors.ajax_example = {
    attach:function (context) {
      $(document).on('click', '.favoriteLink', function(e){
        e.stopPropagation();
        e.preventDefault();
        fid = $(this).attr('data-fid');
        $.ajax({
          url: Drupal.settings.basePath + 'add/favorite/' + fid,
          beforeSend: function(xhr) {
            $('.output-favorite-' + fid).prepend('Cargando');
          },
          success: function(data) {
            $('.output-favorite-' + fid).html(data);
          }
        });
      });   
    }
  }
})(jQuery);