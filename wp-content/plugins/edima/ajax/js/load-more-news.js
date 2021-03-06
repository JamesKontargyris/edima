(function() {
    // The maximum number of pages the current query can return.
    var max = parseInt(ajax_load_more_news.maxStories),
    url = ajax_load_more_news.url,
    offset = parseInt(ajax_load_more_news.offset),
    isNewsArchive = parseInt(ajax_load_more_news.isNewsArchive),
    isDate = parseInt(ajax_load_more_news.isDate),
    isTaxNewsCategories = parseInt(ajax_load_more_news.isTaxNewsCategories),
    year = parseInt(ajax_load_more_news.year),
    month = parseInt(ajax_load_more_news.month),
    cat_id = parseInt(ajax_load_more_news.cat_id),
    tag_id = parseInt(ajax_load_more_news.tag_id),
    postsPerPage = parseInt(ajax_load_more_news.postsPerPage);

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

        $('.ajax-more-news-placeholder-' + offset).load(url, { 'offset': offset, 'is_news_archive': isNewsArchive, 'is_date': isDate, 'is_tax_news_categories' : isTaxNewsCategories, 'year': year, 'month': month, 'cat_id': cat_id, 'tag_id': tag_id, 'posts_per_page': postsPerPage }, function()
        {
            var offsetNew = parseInt(offset + postsPerPage);
            if(max > offsetNew) {
                moreNewsButton.text('More News').attr('data-offset', offsetNew);
                moreNewsButton.before('<div class="ajax-more-news-placeholder-' + offsetNew + '"></div>');
            } else {
                moreNewsButton.remove();
            }
        });


        return false;
    });

})();