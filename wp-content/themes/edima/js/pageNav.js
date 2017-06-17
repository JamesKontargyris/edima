(function(){
    $('.page-nav__menu__mobile-toggle').on('click', function()
    {
       $(this).toggleClass('active').siblings('li').toggleClass('active');
    });
})();