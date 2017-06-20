(function() {
    // The maximum number of pages the current query can return.
    var max = parseInt(ajax_load_more_news.maxStories),
    url = ajax_load_more_news.url,
    offset = parseInt(ajax_load_more_news.offset),
    isDate = parseInt(ajax_load_more_news.isDate),
    isNewsArchive = parseInt(ajax_load_more_news.isNewsArchive),
    year = parseInt(ajax_load_more_news.year),
    month = parseInt(ajax_load_more_news.month);

    if(max > offset) {
        $('.news-ajax')
            .append('<div class="ajax-more-news-placeholder-' + offset + '"></div>')
            .append('<a href="#" class="button button--primary ajax-more-news-button" data-offset="' + offset + '">More News</a>');
    }

    $('.ajax-more-news-button').click(function() {
        var moreNewsButton = $(this),
            offset = parseInt(moreNewsButton.attr('data-offset'));

        // Show that we're working.
        moreNewsButton.text('Loading news stories...');

        $('.ajax-more-news-placeholder-' + offset).load(url, { 'offset': offset, 'is_date': isDate, 'is_news_archive': isNewsArchive, 'year': year, 'month': month }, function()
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