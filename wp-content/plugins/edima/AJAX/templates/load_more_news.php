<?php
	require_once('../../../../../wp-blog-header.php');

	$args = [
		'post_status' => 'publish',
		'post_type' => 'news_story',
		'orderby' => 'date',
		'order' => 'DESC',
		'posts_per_page' => 3,
		'offset' => $_POST['offset'],
	];
	$news_stories = new WP_Query($args);

	if($news_stories->have_posts()) : while($news_stories->have_posts()) : $news_stories->the_post();
	?>
	<div class="news-extract news-extract--horizontal">
		<a href="<?php echo get_the_permalink(); ?>">

			<?php if ( has_post_thumbnail() ) : ?>
				<img src="<?php echo the_post_thumbnail_url('news-extract'); ?>" class="news-extract__image hide--s" alt="<?php echo get_the_title(); ?>" title="<?php echo get_the_title(); ?>">
			<?php endif; ?>
			<span class="news-extract__headline"><?php the_title(); ?></span>
		</a>
		<div class="news-extract__meta text--upper"><?php echo get_the_date('d F Y'); ?> in <?php echo inline_categories(wp_get_post_terms(get_the_ID(), 'news_categories'), 'news-extract__category', 'news-extract__category-link'); ?></div>
		<div class="news-extract__extract"><?php echo get_the_excerpt(); // so it is inline ?> <a href="#">Read more...</a></div>
	</div>
<?php endwhile; endif; wp_reset_postdata(); ?>