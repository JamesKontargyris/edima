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
                        <div class="home-hero__title text--blue">EDiMA: the trade association representing online platforms and other innovative companies.</div>
                        <p class="home-hero__para">We support policy initiatives that are pro-consumer and that promote innovation and growth towards a Digital Single Market for Europe.</p>
                        <div class="button-group">
                            <a href="/about-us" class="button button--primary button--large">Read more</a> <a href="/policy-areas" class="button button--secondary button--large">Policy Areas</a>
                        </div>
                    </div>
                    <div class="home-hero__map-container">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/home_hero_wires_map.svg" alt="EU map made up of connections" class="home-hero__map">
                    </div>
                    <div class="scroll-down-indicator"><i class="fa fa-caret-down"></i></div>
                </div>
            </div>

            <div class="home-block stripe stripe--xxxlarge-padding stripe--blue margin--none">
                <div class="home-block__content container container--narrow">
                    <div class="home-block__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/home_image_placeholder.png" alt="Image">
                    </div>
                    <div class="home-block__text">
                        <h5 class="text--upper with-line text--white">Our Aim</h5>
                        <h2 class="text--white">A voice for online platforms and innovative companies in Europe.</h2>
                        <p class="text--white">Founded in March 2000, EDiMA was set up as a unique coalition by 15 European companies to serve as a European trade association and government representation entity on issues that impact their business and the innovative sector.</p>
                        <div class="button-group">
                            <a href="#" class="button button--primary">A button</a> <a href="#" class="button button--secondary">A button</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="home-block home-block--flip stripe stripe--xxxlarge-padding stripe--red margin--none">
                <div class="home-block__content container container--narrow">
                    <div class="home-block__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/home_image_placeholder.png" alt="Image">
                    </div>
                    <div class="home-block__text">
                        <h5 class="text--upper with-line text--white">Our Mission</h5>
                        <h2 class="text--white">To contribute to the realisation of an EU digital single market.</h2>
                        <p class="text--white">Legislative decisions and developments may impose substantial burdens on new media companies, adversely affecting the growth of the market. EDiMA acts in order to influence the resolution of these issues in a way that preserves the interests of its members and the Internet community. </p>
                        <div class="button-group">
                            <a href="#" class="button button--primary">A button</a> <a href="#" class="button button--secondary">A button</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="home-block stripe stripe--xxxlarge-padding stripe--green margin--none">
                <div class="home-block__content container container--narrow">
                    <div class="home-block__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/home_image_placeholder.png" alt="Image">
                    </div>
                    <div class="home-block__text">
                        <h5 class="text--upper with-line text--white">Dialogue</h5>
                        <h2 class="text--white">Continuous ongoing engagement with the EU officials that matter.</h2>
                        <p class="text--white">EDiMA maintains dialogue with the European Commission, Member State Permanent Representations and the European Parliament. This includes discussions on such issues as EU copyright review and audiovisual media services.</p>
                        <div class="button-group">
                            <a href="#" class="button button--primary">A button</a> <a href="#" class="button button--secondary">A button</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="home-block stripe stripe--xxlarge-padding stripe--light-blue margin--none" style="background:url(<?php echo get_template_directory_uri(); ?>/img/people_bg.jpg) top left repeat; background-attachment: fixed;">
                <div class="home-block__content container" style="background:radial-gradient(rgba(255,255,255,0.7) 30%, rgba(255,255,255,0) 70%);">
                    <div class="home-block__text home-block__text--full-width home-block__text--narrow text--center">
                        <h5 class="text--upper with-line text--red">stakeholder interests</h5>
                        <h2 class="text--blue">Everyone should benefit from the cultural and economic opportunities offered by the online and digital sector. </h2>
                        <p>Ensuring this enables the sector to continue as a driver for cultural diversity and economic growth in the EU.</p>
                        <div class="button-group text--center">
                            <a href="#" class="button button--primary button--xlarge">A button</a>
                        </div>
                    </div>
                </div>
            </div>

	        <?php $members = get_members();
	        if($members->have_posts()) :
		        ?>
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
                                        <img src="<?php echo $member_logo; ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" style="width:auto;">
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
