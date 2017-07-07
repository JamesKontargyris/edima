<?php
	// Background colour array
	$bg_colours = [
		'blue' => '#003b77',
		'light-blue' => '#cfdae6',
		'red' => '#cd0f36',
		'green' => '#00a0a3',
		'light-green' => '#daebe9',
		'light-grey' => '#ebebeb',
		'grey' => '#9d9d9d',
		'dark-grey' => '#5a5a5a',
		'orange' => '#EDAE49',
	];
?>

<style>
	.page-header {
		background:
			linear-gradient(to top, rgba(0,0,0,0.15) 0%, rgba(0,0,0,0) 1.2rem),
			<?php if( ! get_field('hide_breadcrumbs')) : ?>linear-gradient(to bottom, rgba(0,0,0,0.15) 0%, rgba(0,0,0,0) 1.2rem), <?php endif; ?>
	<?php
		if(has_post_thumbnail()) { // URL to image
			// store the image ID in a var
			$image_id = get_id_from_img_url(get_the_post_thumbnail_url());

			// retrieve the hero size version of our image
			$hero_image_url = wp_get_attachment_image_src($image_id, 'hero')[0];
			echo 'url(' . $hero_image_url . ') center no-repeat,';
		} ?>
	<?php echo $bg_colours[get_field('header_banner_bg_colour')]; ?>;

		background-size: auto, <?php if( ! get_field('hide_breadcrumbs')) : ?>auto, <?php endif; ?> cover, auto;
	}
</style>

<?php if( ! get_field('hide_header_banner')) : ?>
	<div class="page-header stripe stripe--<?php echo get_field('header_banner_height'); ?>-padding stripe--<?php echo get_field('header_banner_bg_colour'); ?> margin--none">
		<div class="stripe__content stripe__content--side-padding">

			<div class="page-header__content">

				<?php if(get_the_title()) : ?>
					<h1 class="page-header__title text--center text--<?php echo get_field('header_banner_title_colour'); ?>"><?php the_title(); ?></h1>
				<?php endif; ?>

				<?php if(get_field('header_introduction')) : ?>
					<p class="page-header__intro text--page-intro text--page-intro--centered text--center text--<?php echo get_field('header_banner_introduction_colour'); ?>"><?php echo get_field('header_introduction'); ?></p>
				<?php endif; ?>

			</div>

		</div>
	</div>
<?php endif; ?>