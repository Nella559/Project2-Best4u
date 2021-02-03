$ = jQuery;
$(document).ready(function () {
    function addLink(){
        var box = $('.full-link');
        box.each(function (){
            var link = $(this).find('.list-links').attr('href');
            console.log(link);
            $(this).click(function (){
                window.location.href = link;
            })
        })
    }
    $('.slider').slick({
        arrows: false,
        dots: true,
        infinite: true,
        speed: 500,
        easing: 'ease',

    });
    addLink();

});


var height = $('.site-header__wrapper').height();

$(window).scroll(function () {
    if($(this).scrollTop() > height) {
        $('.mobile_link') .addClass('sticky');
    } else {
        $('.mobile_link') .removeClass('sticky');
    }
});



    if($(window).width() < 640){
        $('.group-links').addClass('slider');
    };





