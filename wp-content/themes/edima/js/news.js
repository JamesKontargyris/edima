(function() {

    $('.news-filters__tab a').click(function()
    {
        $(this).toggleClass('active');
       $('.news-filters').toggleClass('active');

       return false;
    });

})();