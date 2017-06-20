<div class="news-filters">
	<div class="news-filters__content">
		<div class="news-filters__tab"><a href="#">News Archive</a></div>

        <?php get_template_part('template-parts/partials/partial', 'news-filter-categories'); ?>
        <?php get_template_part('template-parts/partials/partial', 'news-filter-calendar'); ?>
        <?php get_template_part('template-parts/partials/partial', 'news-filter-tags'); ?>

	</div>
</div>

<!--<h5 class="text--upper"><i class="fa fa-search"></i> Find News</h5>
<ul class="vertical-menu vertical-menu__small vertical-menu--bordered">
	<li class="vertical-menu__item vertical-menu__title">Categories</li>
	<?php /*foreach(get_terms('news_categories') as $category) : */?>
		<li class="vertical-menu__item"><a href="<?php /*echo get_category_link($category->term_id); */?>" class="vertical-menu__link"><?php /*echo $category->name; */?></a></li>
	<?php /*endforeach; */?>
</ul>-->