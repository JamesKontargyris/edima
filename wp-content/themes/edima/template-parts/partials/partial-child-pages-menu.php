<?php
global $post;
// Logic to check if child pages are available, or if this is a child page
$page_children = [];
if(is_page() && $post->post_parent) { // this page has a parent, so show it in a menu of sibling pages
	$page_children = get_children_of_page($post->post_parent);
} elseif(is_page() && has_children($post->ID)) { // this page has children, so show menu of children (takes precedent over above)
	$page_children = get_children_of_page($post->ID);
}
?>

<?php if($page_children) : ?>
	<aside>
		<div class="sidebar-menu sidebar-menu--pull-up">
			<ul class="vertical-menu">
				<?php foreach($page_children as $child) : ?>
					<li class="vertical-menu__item vertical-menu__item--large-spacing"><a href="<?php echo get_the_permalink($child->ID); ?>" class="vertical-menu__link <?php if($child->ID == $post->ID) : ?> active <?php endif; ?>"><?php echo get_the_title($child->ID); ?></a></li>
				<?php endforeach; ?>
			</ul>
		</div>
	</aside>
<?php endif; ?>