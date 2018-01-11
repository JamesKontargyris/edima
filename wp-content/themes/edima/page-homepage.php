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

    <div id="primary" class="content-area full-width">
        <main id="main" class="site-main" role="main">

            <div class="home-hero">
                <div class="home-hero__content">
                    <div class="home-hero__text-container">
                        <?php if(get_field('block_1_mini_headline')) : ?>
                            <h5 class="text--upper with-line text--grey"><?php echo get_field('block_1_mini_headline'); ?></h5>
                        <?php endif; ?>

                        <?php if(get_field('block_1_main_headline')) : ?>
                            <div class="home-hero__title text--blue">
	                            <?php echo get_field('block_1_main_headline'); ?>
                            </div>
                        <?php endif; ?>

	                    <?php if(get_field('block_1_text')) : ?>
                            <p class="home-hero__para"><?php echo get_field('block_1_text'); ?></p>
	                    <?php endif; ?>

	                    <?php if(get_field('block_1_links')) : ?>
                            <div class="home-hero__buttons button-group">
                                <?php foreach(get_field('block_1_links') as $post_id) : ?>
                                <a href="<?php echo get_permalink($post_id); ?>" class="button button--primary button--large"><?php echo get_the_title($post_id); ?></a>
                                <?php endforeach; ?>
                            </div>
	                    <?php endif; ?>
                    </div>
                    <div class="home-hero__map-container">
	                    <div class="home-hero__map"><?php echo file_get_contents(get_template_directory_uri() . '/img/home_hero_wires_map.svg'); ?></div>
                    </div>
                    <div class="scroll-down-indicator"><i class="fa fa-caret-down"></i></div>
                </div>
            </div>

            <div class="connector-divider__container">
                <div class="connector-divider">
                    <?php echo file_get_contents(get_template_directory_uri() . '/img/connector-divider.svg'); ?>
                </div>
            </div>

            <div class="home-block stripe stripe--xxxlarge-padding stripe--blue margin--none">

                <div class="home-block__content container container--narrow">
                    <div class="home-block__image">
                        <?php echo file_get_contents(get_template_directory_uri() . '/img/home_voice_for_companies.svg'); ?>
                    </div>
                    <div class="home-block__text">

                        <?php if(get_field('block_2_mini_headline')) : ?>
                            <h5 class="text--upper with-line text--white"><?php echo get_field('block_2_mini_headline'); ?></h5>
                        <?php endif; ?>

	                    <?php if(get_field('block_2_main_headline')) : ?>
                            <h2 class="text--white"><?php echo get_field('block_2_main_headline'); ?></h2>
	                    <?php endif; ?>

                        <?php if(get_field('block_2_text')) : ?>
                            <p class="text--white"><?php echo get_field('block_2_text'); ?></p>
	                    <?php endif; ?>

	                    <?php if(get_field('block_2_links')) : ?>
                            <div class="button-group">
			                    <?php foreach(get_field('block_2_links') as $post_id) : ?>
                                    <a href="<?php echo get_permalink($post_id); ?>" class="button button--secondary button--large"><?php echo get_the_title($post_id); ?></a>
			                    <?php endforeach; ?>
                            </div>
	                    <?php endif; ?>

                    </div>
                </div>
            </div>

            <div class="connector-divider__container">
                <div class="connector-divider">
			        <?php echo file_get_contents(get_template_directory_uri() . '/img/connector-divider.svg'); ?>
                </div>
            </div>

            <div class="home-block home-block--flip stripe stripe--xxxlarge-padding stripe--red margin--none">
                <div class="home-block__content container container--narrow">
                    <div class="home-block__image">
	                    <?php echo file_get_contents(get_template_directory_uri() . '/img/home_dsm2.svg'); ?>
                    </div>
                    <div class="home-block__text">

                        <?php if(get_field('block_3_mini_headline')) : ?>
                            <h5 class="text--upper with-line text--white"><?php echo get_field('block_3_mini_headline'); ?></h5>
	                    <?php endif; ?>

	                    <?php if(get_field('block_3_main_headline')) : ?>
                            <h2 class="text--white"><?php echo get_field('block_3_main_headline'); ?></h2>
	                    <?php endif; ?>

	                    <?php if(get_field('block_3_text')) : ?>
                            <p class="text--white"><?php echo get_field('block_3_text'); ?></p>
	                    <?php endif; ?>

	                    <?php if(get_field('block_3_links')) : ?>
                            <div class="button-group">
			                    <?php foreach(get_field('block_3_links') as $post_id) : ?>
                                    <a href="<?php echo get_permalink($post_id); ?>" class="button button--secondary button--large"><?php echo get_the_title($post_id); ?></a>
			                    <?php endforeach; ?>
                            </div>
	                    <?php endif; ?>

                    </div>
                </div>
            </div>

            <div class="connector-divider__container">
                <div class="connector-divider">
			        <?php echo file_get_contents(get_template_directory_uri() . '/img/connector-divider.svg'); ?>
                </div>
            </div>

            <div class="home-block stripe stripe--xxxlarge-padding stripe--green margin--none">
                <div class="home-block__content container container--narrow">
                    <div class="home-block__image">
	                    <?php echo file_get_contents(get_template_directory_uri() . '/img/home_engagement_with_institutions.svg'); ?>
                    </div>
                    <div class="home-block__text">

	                    <?php if(get_field('block_4_mini_headline')) : ?>
                            <h5 class="text--upper with-line text--white"><?php echo get_field('block_4_mini_headline'); ?></h5>
	                    <?php endif; ?>

	                    <?php if(get_field('block_4_main_headline')) : ?>
                            <h2 class="text--white"><?php echo get_field('block_4_main_headline'); ?></h2>
	                    <?php endif; ?>

	                    <?php if(get_field('block_4_text')) : ?>
                            <p class="text--white"><?php echo get_field('block_4_text'); ?></p>
	                    <?php endif; ?>

	                    <?php if(get_field('block_4_links')) : ?>
                            <div class="button-group">
			                    <?php foreach(get_field('block_4_links') as $post_id) : ?>
                                    <a href="<?php echo get_permalink($post_id); ?>" class="button button--secondary button--large"><?php echo get_the_title($post_id); ?></a>
			                    <?php endforeach; ?>
                            </div>
	                    <?php endif; ?>

                    </div>
                </div>
            </div>

            <div class="connector-divider__container">
                <div class="connector-divider">
			        <?php echo file_get_contents(get_template_directory_uri() . '/img/connector-divider.svg'); ?>
                </div>
            </div>

            <div class="home-block stripe stripe--xxlarge-padding stripe--light-blue margin--none" style="background:url(<?php echo get_template_directory_uri(); ?>/img/bg_users.jpg) top left repeat; background-attachment: fixed;">
                <div class="home-block__content container" style="background:radial-gradient(rgba(255,255,255,0.7) 40%, rgba(255,255,255,0) 70%);">
                    <div class="home-block__text home-block__text--full-width home-block__text--narrow text--center" style="text-align: center">

                        <?php echo file_get_contents(get_template_directory_uri() . '/img/happy_laptop.svg'); ?>

	                    <?php if(get_field('block_5_mini_headline')) : ?>
                            <h5 class="text--upper with-line text--red"><?php echo get_field('block_5_mini_headline'); ?></h5>
	                    <?php endif; ?>

	                    <?php if(get_field('block_5_main_headline')) : ?>
                            <h2 class="text--blue"><?php echo get_field('block_5_main_headline'); ?></h2>
	                    <?php endif; ?>

	                    <?php if(get_field('block_5_text')) : ?>
                            <p><?php echo get_field('block_5_text'); ?></p>
	                    <?php endif; ?>

	                    <?php if(get_field('block_5_links')) : ?>
                            <div class="button-group text--center">
			                    <?php foreach(get_field('block_5_links') as $post_id) : ?>
                                    <a href="<?php echo get_permalink($post_id); ?>" class="button button--primary button--large"><?php echo get_the_title($post_id); ?></a>
			                    <?php endforeach; ?>
                            </div>
	                    <?php endif; ?>

                    </div>
                </div>
            </div>

	        <?php $members = get_members();
	        if($members->have_posts()) :
		        ?>
                <div class="connector-divider__container">
                    <div class="connector-divider">
				        <?php echo file_get_contents(get_template_directory_uri() . '/img/connector-divider.svg'); ?>
                    </div>
                </div>
                <div class="stripe stripe--large-padding stripe--blue text--center margin--none">
                    <h6 class="text--center text--upper text--light-blue with-line text--expand margin--bottom-large">Our Members</h6>
                    <ul class="home__members-carousel owl-carousel owl-theme">
				        <?php while($members->have_posts()) : $members->the_post(); ?>
                            <li class="member">
                                <div class="member__logo">
							        <?php if(has_post_thumbnail()) : ?>
								        <?php
								        $image_id = get_id_from_img_url(get_the_post_thumbnail_url());
								        $member_logo = wp_get_attachment_image_src($image_id, 'member-logo')[0];
								        ?>
                                        <img src="<?php echo $member_logo; ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>">
							        <?php endif; ?>
                                </div>
                            </li>
				        <?php endwhile; ?>
                    </ul>
                    <a href="/members" class="button button--primary button--large">All Members</a>
                </div>
	        <?php endif; wp_reset_postdata(); ?>


        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
