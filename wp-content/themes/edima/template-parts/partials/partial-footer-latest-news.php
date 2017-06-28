<?php
$news_stories = get_latest_news(get_theme_mod('news_no_of_sub_stories_in_latest_news', 3) + 1, 0);
$first_story = true;
?>
<?php if($news_stories->have_posts()) : while($news_stories->have_posts()) : $news_stories->the_post(); ?>

    <?php if($first_story) : ?>
        <div class="news-extract news-extract--horizontal">
            <div class="news-extract__headline news-extract__headline--feature"><a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a></div>
			<?php if ( has_post_thumbnail() ) : ?>
                <div class="news-extract__image">
                    <a href="<?php echo get_the_permalink(); ?>">
                        <img src="<?php echo the_post_thumbnail_url('news-extract'); ?>" alt="<?php echo get_the_title(); ?>" title="<?php echo get_the_title(); ?>">
                    </a>
                </div>
			<?php endif; ?>

            <div class="news-extract__details">
                <div class="news-extract__meta text--upper"><?php echo get_the_date('d F Y'); ?> in <?php echo inline_categories(wp_get_post_terms(get_the_ID(), 'news_categories'), 'news-extract__category', 'news-extract__category-link'); ?> </div>
                <div class="news-extract__extract margin--bottom-small"><?php echo limit_text(get_the_excerpt(), 40); // so it is inline ?></div>
                <a href="<?php echo get_the_permalink(); ?>" class="button button--primary">Read More</a>
            </div>
        </div>
    <?php
        $first_story = false;
    else : ?>
        <hr>
        <div class="news-extract news-extract--horizontal">

            <div class="news-extract__details news-extract__details--full-width">
                <div class="news-extract__headline news-extract__headline--small"><a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a></div>
                <div class="news-extract__meta text--upper margin--none"><?php echo get_the_date('d F Y'); ?> in <?php echo inline_categories(wp_get_post_terms(get_the_ID(), 'news_categories'), 'news-extract__category', 'news-extract__category-link'); ?> </div>
            </div>
        </div>
    <?php endif; ?>

<?php endwhile; ?>
<?php else : ?>
    No more news stories.
<?php endif; wp_reset_postdata(); ?>

<?php if( ! is_post_type_archive('news_story') ) : // button is placed by JS on the news story archive page ?>
    <a href="<?php echo get_post_type_archive_link( 'news_story' ); ?>" class="button button--primary">All News</a>
<?php endif; ?>

