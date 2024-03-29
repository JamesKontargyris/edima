<?php
    if( is_post_type_archive('news_story') ) {
        // This is the news archive page
        $news_stories = get_latest_news(3, 4);
    } else {
        // This is not the news archive page
	    $news_stories = get_latest_news(3, 0, [get_the_ID()]);
    }
?>
<?php if($news_stories->have_posts()) : while($news_stories->have_posts()) : $news_stories->the_post();
	?>
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
            <div class="news-extract__meta text--upper"><?php echo get_the_date('d F Y'); ?> in <?php echo inline_categories(wp_get_post_terms(get_the_ID(), 'news_categories'), 'news-extract__category', 'news-extract__category-link'); ?> </div>
            <div class="news-extract__extract"><?php echo limit_text(get_the_excerpt(), 25); // so it is inline ?> <a href="#">Read more...</a></div>
	        <div class="news-extract__social-media-links"><?php get_template_part('template-parts/partials/partial', 'social-media-links'); ?></div>
        </div>


    </div>
<?php endwhile; ?>
<?php else : ?>
    No more news stories.
<?php endif; wp_reset_postdata(); ?>

<?php if( ! is_post_type_archive('news_story') ) : // button is placed by JS on the news story archive page ?>
    <a href="<?php echo get_post_type_archive_link( 'news_story' ); ?>" class="button button--primary">All News</a>
<?php endif; ?>

