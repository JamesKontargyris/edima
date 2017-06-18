<div class="news__sub-nav page-nav page-nav--green page-nav--center">
	<div class="page-nav__content">
		<ul class="page-nav__menu">
			<li class="page-nav__menu__mobile-toggle">Categories</li>
			<?php if( ! is_archive() ) : ?><li><a href="/news">All News</a></li><?php endif; ?> <!-- If this is the news archive page, the all news link isn't needed -->
			<?php foreach ( get_menu_items('news') as $item) : ?>
				<li><a href="<?php echo $item['url']; ?>"><?php echo $item['title']; ?></a></li>
			<?php endforeach; ?>
		</ul>
	</div>
</div>