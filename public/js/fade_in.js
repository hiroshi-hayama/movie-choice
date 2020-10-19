function fadein() {

  var target = $('#fade_in');

  target.css({opacity : '0'});
  target.show();
  target.animate({opacity : '1'});

}