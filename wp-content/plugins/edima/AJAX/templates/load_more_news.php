<?php
	require_once('../../../../../wp-blog-header.php');

    if(isset($_POST['is_date'])) { // this is a date archive
	    $news_stories = get_news_by_date($_POST['year'], $_POST['month'], 5, $_POST['offset']);
	} else {
		$news_stories = get_latest_news(3, $_POST['offset']);
	}


if($news_stories->have_posts()) : while($news_stories->have_posts()) : $news_stories->the_post();
	?>
	<?php include('../../../../themes/edima/template-parts/partials/partial-horizontal-news-extract.php') ?>
<?php endwhile; endif; wp_reset_postdata();