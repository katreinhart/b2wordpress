$(function(){
  // cache the window object
  var $window = $(window);

  //parallax bg effect

  $('section[data-type="background"]').each(function(){
    var $bgobj = $(this); //assign the object

    $(window).scroll(function(){
      //scroll background at var speed

      var yPos = -($window.scrollTop() / $bgobj.data('speed'));

      var coords = '50% ' + yPos + 'px';
      // move the bg

      $bgobj.css({ backgroundPosition: coords});

    }); // end window scroll
  });
});
