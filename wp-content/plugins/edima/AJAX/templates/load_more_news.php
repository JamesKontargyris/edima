<?php
	require_once('../../../../../wp-blog-header.php');

	if($_POST['is_date']) { // this is a date archive

	      $news_stories = get_news_by_date( $_POST['year'], $_POST['month'], get_option( 'posts_per_page' ), $_POST['offset'] );

	} elseif($_POST['is_tax_news_categories']) { // this is a news category taxonomy archive
	       $news_stories = get_news_by_news_category($_POST['cat_id'], get_option( 'posts_per_page' ), $_POST['offset']);

	} elseif($_POST['is_tax_news_tags']) { // this is a news tags taxonomy archive
		$news_stories = get_news_by_news_tags($_POST['tag_id'], get_option( 'posts_per_page' ), $_POST['offset']);

	} else {

    	// It's the homepage
		$news_stories = get_latest_news(get_option( 'posts_per_page' ), $_POST['offset']);

	}


if($news_stories->have_posts()) : while($news_stories->have_posts()) : $news_stories->the_post();
	?>
	<?php include('../../../../themes/edima/template-parts/partials/partial-horizontal-news-extract.php') ?>
<?php endwhile; endif; wp_reset_postdata();