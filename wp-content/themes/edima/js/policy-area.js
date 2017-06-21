(function() {

    $('.policy-area-tile').on('mouseover', function() {
        var $this = $(this);
        $this.find('.policy-area-tile__description').show();
    }).on('mouseout', function() {
        var $this = $(this);
        $this.find('.policy-area-tile__description').hide();
    });

})();