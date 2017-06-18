(function() {
    // The maximum number of pages the current query can return.
    var max = parseInt(ajax_load_more_news.maxStories),
    url = ajax_load_more_news.url,
    offset = parseInt(ajax_load_more_news.offset);

    if(max > offset) {
        $('.news-footer__news')
            .append('<div class="ajax-more-news-placeholder-7"></div>')
            .append('<a href="#" class="button button--primary ajax-more-news-button" data-offset="7">More News</a>');
    }

    $('.ajax-more-news-button').click(function() {
        var moreNewsButton = $(this),
            offset = parseInt(moreNewsButton.attr('data-offset'));

        // Show that we're working.
        moreNewsButton.text('Loading news stories...');

        $('.ajax-more-news-placeholder-' + offset).load(url, { 'offset': offset }, function()
        {
            var offsetNew = parseInt(offset + 3);
            if(max - offsetNew > 1) {
                moreNewsButton.text('More News').attr('data-offset', offsetNew);
                moreNewsButton.before('<div class="ajax-more-news-placeholder-' + offsetNew + '"></div>');
            } else {
                moreNewsButton.remove();
            }
        });


        return false;
    });

})();