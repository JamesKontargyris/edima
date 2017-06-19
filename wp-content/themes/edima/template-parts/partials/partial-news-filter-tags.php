<?php $news_tags = get_terms('news_tags'); ?>
<div class="news-filter__group news-filter__group--tags">
	<h6 class="text--upper margin--small-bottom <?php if(is_post_type_archive('news_story')) : ?> text--red <?php endif; ?>">Tags</h6>
	<?php foreach($news_tags as $tag) : ?>
		<a href="<?php echo get_tag_link($tag->term_id); ?>" class="news-story__tag <?php if(defined('TAG_ID') && TAG_ID == $tag->term_id) : ?> active <?php endif; ?>"><?php echo $tag->name; ?></a>
	<?php endforeach; ?>
</div>