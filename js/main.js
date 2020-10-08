$(function () {
  var windowWidth = $(window).width();

  $('.to-react').click(function () {
    //button animation
    $('.to-react').addClass('active');
    $('.to-php').removeClass('active');
    $('.to-js').removeClass('active');

    //change contents
    $('#php').addClass('fadeOut');
    $('#js').addClass('fadeOut');
    setTimeout(function () {
      $('#php').css('display', 'none');
      $('#js').css('display', 'none');
      if (windowWidth > 540) {
        $('#react')
          .css('display', 'grid')
          .removeClass('fadeOut')
          .addClass('fadeIn');
      } else {
        $('#react')
          .css('display', 'block')
          .removeClass('fadeOut')
          .addClass('fadeIn');
      }
    }, 250);
  });

  $('.to-php').click(function () {
    //button animation
    $('.to-react').removeClass('active');
    $('.to-php').addClass('active');
    $('.to-js').removeClass('active');

    //changing contents
    $('#react').addClass('fadeOut');
    $('#js').addClass('fadeOut');
    setTimeout(function () {
      $('#react').css('display', 'none');
      $('#js').css('display', 'none');
      if (windowWidth > 540) {
        $('#php')
          .css('display', 'grid')
          .removeClass('fadeOut')
          .addClass('fadeIn');
      } else {
        $('#php')
          .css('display', 'block')
          .removeClass('fadeOut')
          .addClass('fadeIn');
      }
    }, 250);
  });

  $('.to-js').click(function () {
    //button animation
    $('.to-react').removeClass('active');
    $('.to-php').removeClass('active');
    $('.to-js').addClass('active');

    //changing contens
    $('#react').addClass('fadeOut');
    $('#php').addClass('fadeOut');
    setTimeout(function () {
      $('#react').css('display', 'none');
      $('#php').css('display', 'none');
      if (windowWidth > 540) {
        $('#js')
          .css('display', 'grid')
          .removeClass('fadeOut')
          .addClass('fadeIn');
      } else {
        $('#js')
          .css('display', 'block')
          .removeClass('fadeOut')
          .addClass('fadeIn');
      }
    }, 250);
  });
});
