(function() {

    $(window).scroll(function() {
        $('.scroll-down-indicator').fadeOut();

        var wScroll = $(this).scrollTop();

        $('.connector-divider').each(function()
        {
            if (wScroll > $(this).offset().top - ($(window).height() / 1.2)) {

                $(this).addClass('visible');
            }

            else {
                $(this).removeClass('visible');
            }
        });

        if(wScroll > $(window).height()) {
            $('.site-header--home').css('background', 'rgba(255,255,255,1)');
        } else {
            $('.site-header--home').css('background', 'rgba(255,255,255,0.7)');
        }
    });

    $('.home__members-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        autoplay:true,
        autoplayTimeout:2000,
        stagePadding:50,
        responsive:{
            0:{
                items:1
            },
            480:{
                items:3
            },
            768:{
                items:5
            },
            1000:{
                items:7
            },
        }
    });
})();