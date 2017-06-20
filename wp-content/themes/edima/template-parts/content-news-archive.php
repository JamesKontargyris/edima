<?php get_template_part('template-parts/partials/partial', 'news-filters'); ?>

<!-- Latest News Story Hero-->
<div class="news-archive__hero-story stripe stripe--large-padding stripe--border-bottom">
	<div class="stripe__content">
		<div class="news-archive">
			<?php $latest_news_story = get_latest_news(1, 0); ?>
			<?php if($latest_news_story->have_posts()) : while($latest_news_story->have_posts()) : $latest_news_story->the_post(); ?>

				<?php get_template_part('template-parts/partials/partial', 'news-archive-style'); // styling ?>

				<?php if(has_post_thumbnail()) : ?>
					<div class="news-archive__hero-story__image">
						<img src="<?php the_post_thumbnail_url('news-extract'); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>">
					</div>
				<?php endif; ?>

				<div class="news-archive__hero-story__content">
					<h5 class="text--upper text--red margin--small-bottom">Latest News</h5>
					<h2 class="news-archive__hero-story__headline"><?php the_title(); ?></h2>
					<div class="news-archive__hero-story__meta text--upper">
						<?php echo the_date('d F Y'); ?>
						<?php if(wp_get_post_terms(get_the_ID(), 'news_categories')) : ?> in <?php echo inline_categories(wp_get_post_terms(get_the_ID(), 'news_categories')); endif; ?>
					</div>
					<div class="news-archive__hero-story__extract"><?php the_excerpt(); ?></div>
					<a href="<?php echo get_the_permalink(); ?>" class="button button--primary">Read More</a>
					<?php get_template_part('template-parts/partials/partial', 'social-media-links'); ?>
				</div>
			<?php endwhile; endif; wp_reset_postdata(); ?>

		</div>
	</div>
</div>
<!-- /Latest News Story Hero-->

<!-- Featured stories -->
<?php $featured_stories = get_latest_news(3, 1); ?>
<?php if($featured_stories->have_posts()) : ?>
	<div class="news-archive__feature-stories container margin--bottom-large">
		<div class="gallery gallery__row-of-3">
			<?php while($featured_stories->have_posts()) : $featured_stories->the_post(); ?>
				<div class="gallery__item news-archive__feature-story">
					<?php get_template_part('template-parts/partials/partial', 'featured-news-extract'); ?>
				</div>
			<?php endwhile; ?>
		</div>
	</div>
<?php endif; wp_reset_postdata(); ?>
<!-- /Featured stories -->


<div class="stripe stripe--no-margin stripe--light-grey">
	<div class="stripe__content">
		<div class="news-footer__news">
			<h5 class="text--upper"><i class="fa fa-newspaper-o"></i> More News</h5>
			<?php get_template_part('template-parts/partials/partial', 'more-news'); ?>
            <div class="news-ajax"></div> <!-- Placeholder for ajax more news loader button etc. -->
		</div> <!-- / news-footer__news -->

		<hr class="hide--xl">

		<div class="news-footer__tweets">
			<h5 class="text--upper"><i class="fa fa-lg fa-twitter"></i> @EDIMA_EU <a href="https://twitter.com/intent/follow?screen_name=EDiMA_EU" target="_blank" class="header-link">Follow Us</a></h5>
			<?php get_template_part('template-parts/partials/partial', 'tweets'); ?>
		</div> <!-- / news-footer__tweets -->
	</div>
</div>