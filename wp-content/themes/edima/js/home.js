(function() {

    $(document).on('scroll', function()
    {
        $('.scroll-down-indicator').fadeOut(300);
    })

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