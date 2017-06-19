(function() {
    // Animated logo on mouse rollover
    $('.site-header__mobile-menu-toggle-icon').on('click', function()
    {
        $('.site-header__nav ul').toggleClass('active');
    });

    $('.site-header__logo').on('mouseover', function()
    {
        if (navigator.userAgent.search("Firefox") >= 0 || navigator.userAgent.search("Chrome") >= 0)
        {
            $('.site-header__logo-static').css('display', 'none');
            $('.site-header__logo-animated').css('display', 'block');
        }
    }).on('mouseout', function()
    {
        if (navigator.userAgent.search("Firefox") >= 0 || navigator.userAgent.search("Chrome") >= 0) {
            $('.site-header__logo-static').css('display', 'block');
            $('.site-header__logo-animated').css('display', 'none');
        }
    });

    // Sticky header on scroll
    $(".site-header").sticky({topSpacing:0, zIndex:10});
})();