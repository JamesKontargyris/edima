<?php if($tags = wp_get_post_terms(get_the_ID(), 'news_tags')) : ?>
	<div class="news-story__tags">
        <span class="text--grey"><i class="fa fa-tag"></i> Tags:</span>
		<?php foreach($tags as $tag) : ?>
			<a href="<?php echo get_tag_link($tag->term_id); ?>" class="news-story__tag"><?php echo $tag->name; ?></a>
		<?php endforeach; ?>
	</div> <!-- / news-story__tags -->
<?php endif; ?>