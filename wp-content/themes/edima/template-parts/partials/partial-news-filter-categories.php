<?php $news_categories = get_terms('news_categories'); ?>
<div class="news-filter__group news-filter__group--categories">
	<h6 class="text--upper margin--small-bottom <?php if(is_post_type_archive('news_story') && ! is_date()) : ?> text--red <?php endif; ?>">Categories</h6>
	<ul class="vertical-menu <?php if(is_post_type_archive('news_story') && ! is_date()) : ?> vertical-menu--white-links <?php endif; ?>">
		<?php foreach($news_categories as $category) : ?>
			<li class="vertical-menu__item"><a href="<?php echo get_category_link($category->term_id); ?>" class="vertical-menu__link <?php if(defined('CAT_ID') && CAT_ID == $category->term_id) : ?> active <?php endif; ?>"><?php echo $category->name; ?></a></li>
		<?php endforeach; ?>
	</ul>
</div>