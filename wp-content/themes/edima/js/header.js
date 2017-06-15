(function() {
    $('.site-header__mobile-menu-toggle-icon').on('click', function()
    {
        $('.site-header__nav ul').toggleClass('active');
    });

    $('.site-header__logo').on('mouseover', function()
    {
        $('.site-header__logo-static').css('display', 'none');
        $('.site-header__logo-animated').css('display', 'block');
    }).on('mouseout', function()
    {
        $('.site-header__logo-static').css('display', 'block');
        $('.site-header__logo-animated').css('display', 'none');
    });
})();