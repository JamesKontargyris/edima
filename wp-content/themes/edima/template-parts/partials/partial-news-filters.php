<div class="news-filters">
	<div class="news-filter__content">
		<div class="news-filters__tab"><a href="#">News Archive</a></div>

        <?php $news_categories = get_terms('news_categories'); ?>
        <div class="news-filter__group news-filter__group--categories">
            <h6 class="text--upper text--red margin--small-bottom">Categories</h6>
            <ul class="news-filter-menu">
		        <?php foreach($news_categories as $category) : ?>
                    <li class="news-filter-menu__item"><a href="<?php echo get_category_link($category->term_id); ?>" class="news-filter-menu__link"><?php echo $category->name; ?></a></li>
		        <?php endforeach; ?>
            </ul>
        </div>

		<?php
            $args = [
                    'format' => 'html',
                    'limit' => 12,
                    'before' => '<li class="news-filter-menu__item">',
                    'after' => '</li>',
                    'post_type' => 'news_story'
            ];
        ?>
        <div class="news-filter__group news-filter__group--calendar">
            <h6 class="text--upper text--red margin--small-bottom">Calendar</h6>
            <ul class="news-filter-menu">
                <?php wp_get_archives($args); ?>
            </ul>
        </div>

		<?php $news_tags = get_terms('news_tags'); ?>
        <div class="news-filter__group news-filter__group--tags">
            <h6 class="text--upper text--red margin--small-bottom">Tags</h6>
				<?php foreach($news_tags as $tag) : ?>
                    <a href="<?php echo get_tag_link($tag->term_id); ?>" class="news-story__tag"><?php echo $tag->name; ?></a>
				<?php endforeach; ?>
        </div>
	</div>
</div>

<!--<h5 class="text--upper"><i class="fa fa-search"></i> Find News</h5>
<ul class="vertical-menu vertical-menu__small vertical-menu--bordered">
	<li class="vertical-menu__item vertical-menu__title">Categories</li>
	<?php /*foreach(get_terms('news_categories') as $category) : */?>
		<li class="vertical-menu__item"><a href="<?php /*echo get_category_link($category->term_id); */?>" class="vertical-menu__link"><?php /*echo $category->name; */?></a></li>
	<?php /*endforeach; */?>
</ul>-->