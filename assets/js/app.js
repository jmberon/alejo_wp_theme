// jQuery(document).foundation()
jQuery('.input-number-increment').click(function() {
    var $input = jQuery(this).parents('.input-number-group').find('.input-number');
    var val = parseInt($input.val(), 10);
    $input.val(val + 1);
  });
  
  jQuery('.input-number-decrement').click(function() {
    var $input = jQuery(this).parents('.input-number-group').find('.input-number');
    var val = parseInt($input.val(), 10);
    $input.val(val - 1);
  });


