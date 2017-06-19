<?php
$args = [
	'format' => 'html',
	'limit' => 12,
	'before' => '<li class="vertical-menu__item">',
	'after' => '</li>',
	'post_type' => 'news_story',
];
?>
<div class="news-filter__group news-filter__group--calendar">
	<h6 class="text--upper margin--small-bottom <?php if(is_post_type_archive('news_story') && ! is_date()) : ?> text--red <?php endif; ?>">Calendar</h6>
	<ul class="vertical-menu <?php if(is_post_type_archive('news_story') && ! is_date()) : ?> vertical-menu--white-links <?php endif; ?>">

        <?php if(is_date()) : // only run the code to made a date archive link active if this is a date archive ?>
            <?php add_filter( 'get_archives_link', 'date_archive_current_month_selector' ); ?>
		<?php endif; ?>

        <?php wp_get_archives_cpt($args); ?>

        <?php if(is_date()) : // only run the code to made a date archive link active if this is a date archive ?>
		    <?php remove_filter( 'get_archives_link', 'date_archive_current_month_selector' ); ?>
		<?php endif; ?>

	</ul>
</div>