(function() {

    $('.policy-area-tile').on('mouseover', function() {
        var $this = $(this);
        $this.find('.policy-area-tile__description').show();
    }).on('mouseout', function() {
        var $this = $(this);
        $this.find('.policy-area-tile__description').hide();
    });

    $('.policy-area__related-info-block__title').on('click', function()
    {
        $(this).toggleClass('inactive').next('.policy-area__related-info-block__content').slideToggle();
    })

})();