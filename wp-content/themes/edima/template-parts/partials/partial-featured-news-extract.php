<div class="news-extract">
	<?php if( ! is_tax('news_categories')) : // Don't show the news category listing is we're on a news category archive page ?>
		<h6 class="text--upper margin--small-bottom">
			<?php if(wp_get_post_terms(get_the_ID(), 'news_categories')) : echo inline_categories(wp_get_post_terms(get_the_ID(), 'news_categories')); endif; ?>
		</h6>
	<?php endif; ?>

	<a href="<?php echo get_the_permalink(); ?>">
		<?php if(has_post_thumbnail()) : ?>
			<img class="news-extract__image" src="<?php the_post_thumbnail_url('news-extract'); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>">
		<?php endif; ?>
		<span class="news-extract__headline"><?php the_title(); ?></span>
	</a>
	<div class="news-extract__meta text--upper"><?php echo get_the_date('d F Y'); ?></div>
	<div class="news-extract__extract margin--small-bottom"><?php echo limit_text(get_the_excerpt(), 25); ?></div>
	<a href="<?php echo get_the_permalink(); ?>" class="button button--primary button--small">Read More</a>
	<?php get_template_part('template-parts/partials/partial', 'social-media-links'); ?>
</div>