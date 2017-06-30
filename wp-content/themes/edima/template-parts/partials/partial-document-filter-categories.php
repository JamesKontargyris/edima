<?php $document_categories = get_terms('document_categories'); ?>
<div class="document-filter__group document-filter__group--categories">
	<h6 class="text--upper margin--small-bottom <?php if(is_post_type_archive('news_story') && ! is_date()) : ?> text--red <?php endif; ?>">Categories</h6>
	<ul class="vertical-menu <?php if(is_post_type_archive('news_story') && ! is_date()) : ?> vertical-menu--white-links <?php endif; ?>">
        <?php if( ! is_post_type_archive('news_story') || is_date()) : ?>
            <li class="vertical-menu__item"><a href="/library" class="vertical-menu__link">All Documents</a></li>
        <?php endif; ?>
		<?php foreach($document_categories as $category) : ?>
			<li class="vertical-menu__item"><a href="<?php echo get_category_link($category->term_id); ?>" class="vertical-menu__link <?php if(defined('CAT_ID') && CAT_ID == $category->term_id) : ?> active <?php endif; ?>"><?php echo $category->name; ?></a></li>
		<?php endforeach; ?>
	</ul>
</div>