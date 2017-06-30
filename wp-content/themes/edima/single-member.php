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

 * This template is only used if a user stumbles upon am member's individual page
 */

get_header(); ?>

<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

	<div id="#content" class="content-area">

        <div class="container">
            <div class="breadcrumbs">
		        <?php breadcrumbs(); ?>
            </div>
        </div>

		<div id="primary" class="container--with-padding">
			<main id="main" class="site-main" role="main">

                <div class="policy-area__main structure--main-col structure--main-col--full-width">

                    <div class="text--center margin--bottom">
	                    <?php
	                    $image_id = get_id_from_img_url(get_the_post_thumbnail_url());
	                    $member_logo = wp_get_attachment_image_src($image_id, 'member-logo')[0];
	                    ?>
                        <?php if(get_field('link')) : ?>
                            <a href="<?php echo get_field( 'link' ); ?>" target="_blank">
                        <?php endif; ?>

                        <img src="<?php echo $member_logo; ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>">

	                    <?php if(get_field('link')) : ?>
                            </a>
	                    <?php endif; ?>

                    </div>
                    <h3 class="text--center"><?php the_title(); ?></h3>
                    <h5 class="text--center">Member since <?php echo get_field('member_since'); ?></h5>


                </div>

			</main><!-- #main -->
		</div><!-- #primary -->

	</div>

<?php endwhile; endif; ?>

<?php
get_footer();
