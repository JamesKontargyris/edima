<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package edima
 */


get_header(); ?>

<?php
    $document_id = get_the_ID();
?>

<?php if(has_post_thumbnail()) : ?>
	<?php
	$image_id = get_id_from_img_url(get_the_post_thumbnail_url());
	$cover_image = wp_get_attachment_image_src($image_id, 'document-cover')[0];
	?>
<?php else : $cover_image = ''; ?>
<?php endif; ?>

<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

    <div class="container">
        <div class="breadcrumbs">
			<?php breadcrumbs(); ?>
        </div>
    </div>

	<div id="#content" class="content-area container">

		<div id="primary" class="container--with-padding full-width">
			<main id="main" class="site-main" role="main">

                <div class="structure--main-col">

                    <h1><?php the_title(); ?></h1>
                    <h5><?php echo get_the_date('d F Y') . ' | '; ?>
	                    <?php echo get_field('file_type') ? get_field('file_type') . ' | ' : ''; ?>
	                    <?php echo get_field('file_size') ? get_field('file_size') : ''; ?></h5>

	                <p>
                        <?php if(get_field('description')) : ?>
                            <?php echo get_field('description'); ?>
                        <?php else : ?>
                            <em>No further information available.</em>
                        <?php endif; ?>
                    </p>

	                <?php $file = get_field('file'); ?>
                    <p><a href="<?php echo $file['url']; ?>" class="button button--primary " download><?php echo get_theme_mod('document_download_button_text', 'Download'); ?></a></p>

                </div>

                <div class="structure--sidebar">
	                <?php if(has_post_thumbnail()) : ?>
                        <img src="<?php echo $cover_image; ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>">
	                <?php endif; ?>
                </div>

			</main><!-- #main -->
		</div><!-- #primary -->

	</div>

<?php endwhile; endif; ?>

<?php
get_footer();
