(function()
{
    $('.modal-trigger').on('click', function()
    {
        var trigger = $(this),
            modalID = trigger.attr('data-modal-id');
        console.log(modalID);

        $(modalID).css('display', 'flex').hide().fadeIn();

        return false;
    })

    $('.modal').on('click', function(e)
    {
        if(e.target == this) { // Make sure the background has been clicked, not the modal itself
            $(this).fadeOut();
        }
    });

    $('.modal__close').on('click', function(e)
    {
       $(this).parents('.modal').fadeOut();
    });
})();