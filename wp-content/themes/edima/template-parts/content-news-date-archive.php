<?php

// Get the date filter details
$year  = get_the_date( _x( 'Y', 'monthly archives date format' ) );
$month = get_query_var( 'monthnum' );
?>

<div class="container--with-padding margin--bottom">
    <div class="tax-archive__main">
        <h5 class="text--upper margin--none text--grey">News from</h5>
        <h1 class="margin--bottom-large"><?php echo get_the_date( _x( 'F Y', 'monthly archives date format' ) ); ?></h1>
		<?php $posts_by_news_date = get_news_by_date( $year, $month, 5, 0 ); ?>
		<?php if ( $posts_by_news_date->have_posts() ) : ?>
			<?php while ( $posts_by_news_date->have_posts() ) : $posts_by_news_date->the_post(); ?>
				<?php get_template_part( 'template-parts/partials/partial', 'horizontal-news-extract' ); ?>
			<?php endwhile; ?>
		<?php else : ?>
            No news this month.
		<?php endif; ?>
    </div>
    <div class="tax-archive__sidebar">
		<?php get_template_part( 'template-parts/partials/partial', 'news-filter-categories' ); ?>
		<?php get_template_part( 'template-parts/partials/partial', 'news-filter-calendar' ); ?>
		<?php get_template_part( 'template-parts/partials/partial', 'news-filter-tags' ); ?>
    </div>
</div>