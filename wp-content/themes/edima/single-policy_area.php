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
    $policy_area_id = get_the_ID();
?>

<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

	<?php if(has_post_thumbnail()) : ?>
		<style>
			.policy-area__hero {
				background:
                        linear-gradient(to top, rgba(0,0,0,0.15) 0%, rgba(0,0,0,0) 0.7rem),
                        linear-gradient(to bottom, rgba(0,0,0,0.15) 0%, rgba(0,0,0,0) 1.2rem),
                        url(<?php echo get_template_directory_uri(); ?>/img/bg_circuitry_small.png) top left repeat,
                        linear-gradient(to bottom right, #EDAE49 30%, #dc8d50 100%),
                        #EDAE49;
			}

            .policy-area__hero__title,
            .policy-area__hero__description {
                color:black;
            }

		</style>
	<?php else : ?>
		<style>
			.policy-area__hero {
				background: rgb(0, 59, 119);
			}
		</style>
	<?php endif; ?>

	<div id="#content" class="content-area">

        <div class="policy-area__hero">
            <div class="policy-area__hero__content">

                <div class="policy-area__hero__text">
                    <h6 class="text--upper with-line">Key Policies</h6>
                    <h1 class="policy-area__hero__title"><?php the_title(); ?></h1>
                    <div class="policy-area__hero__description margin--none"><?php echo limit_text(get_the_excerpt(), 30); ?></div>
                </div>
                <div class="policy-area__hero__graphic">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/ux_graphic.png" alt="">
                </div>

            </div>
        </div>

		<div id="primary" class="container--with-padding">
			<main id="main" class="site-main" role="main">

                <div class="policy-area__main structure--main-col structure--main-col--pull-right">
                    <?php the_content(); ?>
                </div>

                <div class="policy-area__sidebar structure--sidebar structure--sidebar--pull-left">
                    <div class="policy-area__sidebar-menu">
	                    <?php $policy_areas = get_policy_areas(); ?>
	                    <?php if($policy_areas->have_posts()) : ?>
                            <ul class="vertical-menu">
			                    <?php while($policy_areas->have_posts()) : $policy_areas->the_post(); ?>
                                    <li class="vertical-menu__item"><a href="<?php echo get_the_permalink(); ?>" class="vertical-menu__link <?php if(get_the_ID() == $policy_area_id) : ?> active <?php endif; ?>"><?php the_title(); ?></a></li>
			                    <?php endwhile; wp_reset_postdata(); ?>
                            </ul>
	                    <?php endif; ?>
                    </div>
                </div>

			</main><!-- #main -->
		</div><!-- #primary -->
	</div>

<?php endwhile; endif; ?>

<?php
get_footer();
