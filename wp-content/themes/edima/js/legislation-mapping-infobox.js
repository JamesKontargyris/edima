(function(){
    //init - hide all content except infobox title
	$('.legislation-mapping-infobox').addClass('is-closed');
	$('.legislation-mapping-infobox__sub-section').addClass('is-closed');

	$('.legislation-mapping-infobox__title').on('click', function() {
	    $(this).parent('.legislation-mapping-infobox').toggleClass('is-closed');
    });

	$('.legislation-mapping-infobox__sub-section__title').on('click', function() {
	    $(this).parent('.legislation-mapping-infobox__sub-section').toggleClass('is-closed');
    });

	// trigger modal
    $('.legislation-mapping-infobox__sub-section__legislation-title-link').on('click', function() {
       $(this).siblings('.modal').css('display', 'flex').hide().fadeIn();

        return false;
    });
})();