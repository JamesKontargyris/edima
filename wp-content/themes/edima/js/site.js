(function() {
    // Search form reveal
    $('.search-form-trigger').on('click', function()
    {
       var trigger = $(this);

        if(trigger.hasClass('active')) {
            $('.search-form').toggle( "slide", {direction: "up"} ).find('input[type=search]').focusout();
        } else {
            $('.search-form').toggle( "slide", {direction: "up"} ).find('input[type=search]').focus(); // Up because of negative bottom value on .search-form
        }

       trigger.toggleClass('active');

        return false;
    });

    // Prevent link from carrying out its default action
    $('a.prevent-default, .prevent-default a').on('click', function()
    {
        return false;
    });

})();