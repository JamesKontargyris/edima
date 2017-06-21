(function() {
    // Adjusts the background position when .page-header is parallaxing for a better visual effect
    var parallax = document.querySelectorAll(".parallax"),
        speed = 0.3;

    window.onscroll = function(){
        [].slice.call(parallax).forEach(function(el,i){

            var windowYOffset = window.pageYOffset,
                elBackgrounPos = "50% -" + (windowYOffset * speed) + "px";

            el.style.backgroundPosition = elBackgrounPos;

        });
    };

    $(window).on('scroll', function()
    {
        $('.page-header__arrow').fadeOut();
    })
})();