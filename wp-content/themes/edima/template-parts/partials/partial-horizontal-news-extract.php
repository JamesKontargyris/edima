<div class="news-extract news-extract--horizontal">

	<?php if ( has_post_thumbnail() ) : ?>
        <div class="news-extract__image">
            <a href="<?php echo get_the_permalink(); ?>">
                <img src="<?php echo the_post_thumbnail_url('news-extract'); ?>" alt="<?php echo get_the_title(); ?>" title="<?php echo get_the_title(); ?>">
            </a>
        </div>
	<?php endif; ?>

    <div class="news-extract__details">
        <div class="news-extract__headline"><a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a></div>
        <div class="news-extract__meta text--upper">
            <?php echo get_the_date('n F Y'); ?>
	        <?php if( ! is_tax('news_categories') && ! $_POST['is_tax_news_categories']) : // Don't show the news category listing is we're on a news category archive page. the POST value is used during the AJAX call when loading more stories ?>
                in <?php echo inline_categories(wp_get_post_terms(get_the_ID(), 'news_categories'), 'news-extract__category', 'news-extract__category-link'); ?>
            <?php endif; ?>
        </div>
        <div class="news-extract__extract"><?php echo limit_text(get_the_excerpt(), 25); // so it is inline ?> <a href="<?php echo get_the_permalink(); ?>">Read more...</a></div>
    </div>

</div>