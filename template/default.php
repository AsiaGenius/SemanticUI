<?php
/**
 * The default theme template
 * 
 * Shows pages as the default template without any sidebars.
 */


theme_header();
?>

<?php
//Apply all translate custom buttons and general texts 

$langs =  get_language_attributes( 'html' );
switch ($langs){
case 'lang="en-US"':
$text1 = 'Articles';
break;
case 'lang="pt-BR"':
$text1 = 'Artigos';
break;			
}
?>
<div class="ui stackable grid" >
	<main class="eleven wide column" style="width: 100%!important;margin: auto; text-align: center;">
	
	<?php if ( is_home() || is_front_page() ) { ?>
	
	<div class="titleartt"><span><?php echo $text1;?></span></div>
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
