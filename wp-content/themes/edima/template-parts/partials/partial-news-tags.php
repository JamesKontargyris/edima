<?php if($tags = get_terms('news_tags')) : ?>
	<div class="news-story__tags">
		<span class="news-story__tag-icon"><?php echo file_get_contents(get_template_directory_uri() . '/img/icons/tag.svg'); ?></span> <strong>Tags:</strong>
		<?php foreach($tags as $tag) : ?>
			<a href="<?php echo get_tag_link($tag->term_id); ?>" class="news-story__tag"><?php echo $tag->name; ?></a>
		<?php endforeach; ?>
	</div> <!-- / news-story__tags -->
<?php endif; ?>