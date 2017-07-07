<div class="document-archive__page-header stripe stripe--large-padding margin--none">
	<div class="stripe__content stripe__content--side-padding">

		<div class="page-header__content">

			<?php if(get_theme_mod('document_banner_heading')) : ?>
				<h1 class="page-header__title"><?php echo get_theme_mod('document_banner_heading', 'Library'); ?></h1>
			<?php endif; ?>

			<?php if(get_theme_mod('document_banner_text')) : ?>
				<p class="page-header__intro text--page-intro text--page-intro--centered"><?php echo get_theme_mod('document_banner_text'); ?></p>
			<?php endif; ?>

		</div>

	</div>
</div>

<!--<div class="news__sub-nav page-nav page-nav--green page-nav--center margin--bottom-large">
    <div class="page-nav__content">
        Categories and Filters here
    </div>
</div>-->

<!--Featured documents-->
<?php get_template_part('template-parts/partials/partial', 'featured-documents'); ?>
<!--/Featured documents-->

<!--Standard documents-->
<?php get_template_part('template-parts/partials/partial', 'standard-documents'); ?>
<!--/Standard documents-->

