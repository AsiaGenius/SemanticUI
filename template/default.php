<?php
/**
 * The default theme template
 * 
 * Shows pages as the default template without any sidebars.
 */


theme_header();
?>
<div class="ui stackable grid">
	<main class="eleven wide column" style="width: 100%!important;">
	<?php if ( is_home() || is_front_page() ) { ?>
	<div class="titleartt"><span>Articles</span></div>
	<?php }?>
	
		<?php template_part($theme->content_sub_path.'/loop', $theme->post_type); ?>
	</main>
	<div class="five wide column" style="display:none;">
		<?php
		$right_sidebar = 'sidebar-widget-area-right';
		if (is_active_sidebar($right_sidebar)) {
			dynamic_sidebar($right_sidebar);
		} else {
			echo 'The right sidebar does not have any widgets!';
		}
		?>
	</div>
</div>
<?php
theme_footer();
