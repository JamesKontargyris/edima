(function() {
    // Animated logo on mouse rollover
    $('.site-header__mobile-menu-toggle-icon').on('click', function()
    {
        $('.site-header__nav ul').toggleClass('active');
    });

    // Sticky header on scroll
    $(".site-header").sticky({topSpacing:0, zIndex:10});
})();