<?php
$args = [
	'format' => 'html',
	'limit' => 12,
	'before' => '<li class="vertical-menu__item">',
	'after' => '</li>',
	'post_type' => 'news_story'
];
?>
<div class="news-filter__group news-filter__group--calendar">
	<h6 class="text--upper margin--small-bottom <?php if(is_post_type_archive('news_story')) : ?> text--red <?php endif; ?>">Calendar</h6>
	<ul class="vertical-menu <?php if(is_post_type_archive('news_story')) : ?> vertical-menu--white-links <?php endif; ?>">
		<?php wp_get_archives($args); ?>
	</ul>
</div>