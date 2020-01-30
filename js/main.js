

$(function(){
$('a[href^="#"]').click(function() {
    var speed = 1000;
    var href= $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top;
    $('body,html').animate({scrollTop:position}, speed, 'swing');
    return false;
 });
});


$(function() {
    $(window).scroll(function () {
        var s = $(this).scrollTop();
        var hm = $('#header').height() * 0.5;
        var tm = $('#header').height() * 0.8;
        var m = $('#header').height();
        var mm = m + $('#about').height() * 0.5;
        var mmm = mm + $('#works').height() + $('#contact').height() * 0.1;
        var mmmm = mm + $('#works').height() + $('#contact').height() * 0.3;
        var mmmmm = mm + $('#works').height() + $('#contact').height() * 0.5;
        var w = $(window).width();
        if(s >= m && w < 480){
            $('.nav3').addClass('nav3-show');
        }
        if(s < m && w < 480){
            $('.nav3').removeClass('nav3-show');
        }
        if(s >= hm){
            $('.title-about').addClass('section-title-slide');
            $('.about-bar').addClass('title-bar-slide');
        }
        if(s >= tm){
            $('.media').addClass('each-media-slide');
        }
        if(s >= m) {
            if (w > 480){ 
            $(".nav2").fadeIn('slow');
            }
            if (s >= mm) {
                $('.work-title').addClass('section-title-slide');
                $('.work-bar').addClass('title-bar-slide');
                if(s >= m + $('#about').height() && w > 480){
                    $('.first-work').addClass('first-work-slide');
                    $('.second-work').addClass('second-work-slide');
                    $('.third-work').addClass('third-work-slide');
                    $('.fourth-work').addClass('fourth-work-slide');
                    $('.fifth-work').addClass('fifth-work-slide');
                    $('.sixth-work').addClass('sixth-work-slide');
                    $('.seventh-work').addClass('seventh-work-slide');
                    $('.eighth-work').addClass('eighth-work-slide');
                }

                //works slide for mobile
                if(s >= $('#header').height() + document.querySelector('.first-work').offsetTop + document.querySelector('.first-work').offsetHeight && w < 480) {
                    $('.first-work').addClass('first-work-slide');
                }
                if (s >= $('#header').height() + document.querySelector('.second-work').offsetTop + document.querySelector('.second-work').offsetHeight && w < 480){
                    $('.second-work').addClass('second-work-slide');
                }
                if (s >= $('#header').height() + document.querySelector('.third-work').offsetTop + document.querySelector('.third-work').offsetHeight && w < 480) {
                    $('.third-work').addClass('third-work-slide');
                }
                if (s >= $('#header').height() + document.querySelector('.fourth-work').offsetTop + document.querySelector('.fourth-work').offsetHeight && w < 480) {
                    $('.fourth-work').addClass('fourth-work-slide');
                }
                if (s >= $('#header').height() + document.querySelector('.fifth-work').offsetTop + document.querySelector('.fifth-work').offsetHeight && w < 480) {
                    $('.fifth-work').addClass('fifth-work-slide');
                }
                if (s >= $('#header').height() + document.querySelector('.sixth-work').offsetTop + document.querySelector('.sixth-work').offsetHeight && w < 480) {
                    $('.sixth-work').addClass('sixth-work-slide');
                }
                if (s >= $('#header').height() + document.querySelector('.seventh-work').offsetTop + document.querySelector('.seventh-work').offsetHeight && w < 480) {
                    $('.seventh-work').addClass('seventh-work-slide');
                }
                if (s >= $('#header').height() + document.querySelector('.eighth-work').offsetTop + document.querySelector('.eighth-work').offsetHeight && w < 480) {
                    $('.eighth-work').addClass('eighth-work-slide');
                }

                if(s >= mmm){
                    $('.contact-title').addClass('slide-right');
                    $('.contact-bar').addClass('slide-right');
                    if(s >= mmmm){
                        //question?
                        $('.contact-letmeknow').addClass('letmeknow-slide');
                        if(s >= mmmmm){
                            //form
                            $('.contact-form').addClass('form-show');
                        }
                    }
                }
            }
        } else if (s < m) {
        $(".nav2").fadeOut('slow');
        }
});
});






