(function(){
    $('.page-nav__menu__mobile-toggle').on('click', function()
    {
       $(this).siblings('li').toggleClass('active');
    });
})();