<?php
/**
 * The default theme header.
 */

$num_to_eng = array(
	0  => 'zero',
	1  => 'one',
	2  => 'two',
	3  => 'three',
	4  => 'four',
	5  => 'five',
	6  => 'six',
	7  => 'seven',
	8  => 'eight',
	9  => 'nine',
	10 => 'ten',
	11 => 'eleven',
	12 => 'twelve',
	13 => 'thirteen',
	14 => 'fourteen',
	15 => 'fifteen',
	16 => 'sixteen',
);

$logo_width = $num_to_eng[(int) $theme->get_option('logo_size')];
$menu_width = $num_to_eng[(16 - (int) $theme->get_option('logo_size'))];


?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<?php template_part($theme->content_sub_path.'/head'); ?>

</head>
<body <?php body_class('public-page'); ?> class="aparition">
<style>
	.evg-video {
    position: absolute;
    top: 50%;
    left: 50%;
    min-width: 100%;
    min-height: 100%;
    width: auto;
    height: auto;
    -ms-transform: translateX(-50%) translateY(-50%);
    -moz-transform: translateX(-50%) translateY(-50%);
    -webkit-transform: translateX(-50%) translateY(-50%);
    transform: translateX(-50%) translateY(-50%);
    transition: 1s opacity;
	}
	.video {
    display: block;
	}

	.audio, .canvas, .progress, .video {
    display: inline-block;
    vertical-align: baseline;
	}	
	</style>

	
	
	<div id="page-wrapper">
		<div id="page-container">
		

<div class="language-manager">

<span>

  <div class="ui inline dropdown">
    <div class="text">
	  <img class="ui  image" src="https://s3.amazonaws.com/cdn.enveritasgroup.com/uploads/2016/02/usa.jpg">

    </div>
    <i class="dropdown icon"></i>
    <div class="menu">
      <div class="item">
        <img class="ui  image" src="http://personallocksmith.com/images/flags/brazil.png">
		
      </div>
	  
	  
	  <div class="item">
        <img class="ui  image" src="https://s3.amazonaws.com/cdn.enveritasgroup.com/uploads/2016/02/usa.jpg">

      </div>
      
    </div>
  </div>
</span>

</div>

		
		<?php if ( is_home() || is_front_page() ) { ?>

		
			<header class="ui middle aligned stackable page grid" id="main-header-grid">
			

		
		<video muted="" preload="auto" loop="" autoplay="" poster="" class="evg-video">

			<source src="http://25.75.181.144:8080/wp-content\uploads\video-banner/videoplayback.mp4" type="video/webm">

		</video>
		
				<?php
				if ($logo_width != 'zero') {
					?>
				<div class="<?php echo $logo_width; ?> wide center aligned column" id="columlogo">
				



				


					<?php
					if ($theme->get_option('logo_url')) {
						?>
						<a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
							<img src="<?php echo $theme->get_option('logo_url'); ?>" alt="company logo" id="mainlogo">
						</a>
						<?php
					}
					?>
				</div>
				
				 
				
				<?php
				} // logo width
				
				if ($menu_width != 'zero') {
					?>
				<div class="<?php echo $menu_width; ?> wide column" id="columsub">
					<?php
					if ($theme->get_option('header_text') || $theme->get_option('header_subtext')) {
						?>
						<h1 class="ui huge inverted center aligned header" id="sublogo">
							<?php echo $theme->get_option('header_text'); ?>
							<div class="sub header" >
								<?php echo $theme->get_option('header_subtext'); ?>
							</div>
						</h1>
						
						<?php
					}
					if (has_nav_menu($menu_loc = 'main-menu')) {
						wp_nav_menu(array(
							'theme_location'  => $menu_loc,
							'menu_class'      => 'ui menu',
							'items_wrap'      => '<nav id="%1$s" class="%2$s">%3$s</nav>',
							'depth'           => 2, // currently there is a bug that prevents a depth > 2 from displaying correctly
							'walker'          => new \semantic\walker\nav_menu
						));
					}
					?>
			
			</div>
			
			
			
			<?php
			} // menu width
			?>
			
			</header>
			
			<div class="strategy barone content hiddenforview">
			<?php
		$right_sidebar = 'sidebar-widget-area-right';
		if (is_active_sidebar($right_sidebar)) {
			dynamic_sidebar($right_sidebar);
		} else {
			echo 'The right sidebar does not have any widgets!';
		}
		?>
			</div>
			
			<div class="strategy bartoo content hiddenforview">
			
			<div class="client-part"><span>
			<?php
		
			$langs =  get_language_attributes( 'html' );
			
	
			switch ($langs){
			
			case 'lang="en-US"':
			echo 'Are part of our history and we are part of them.';
			break;
			case 'lang="pt-BR"':
			echo 'Fazem parte da nossa história e fazemos parte da deles';
			break;			
				
			}
			
			
			?></span>
			</div>
			 
			
			<?php echo do_shortcode('[hs-brand]'); ?>

			</div>
			
			
			
			<?php } else {?>
			
			
			<header class="agroup">
			
			

				<div class="<?php echo $logo_width; ?> wide center aligned column" id="columlogoA">
					<?php
					if ($theme->get_option('logo_url')) {
						?>
						<a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
							<img src="<?php echo $theme->get_option('logo_url'); ?>" alt="company logo" id="mainlogo">
						</a>
						<?php
					}
					?>
				</div>
				
			
			
			</header>
			
			
			
			<?php }  ?>
			
			<?php if ( is_home() || is_front_page() ) { ?>
			<div class="ui page stackable grid articles-part " id="main-content-grid">
			<?php }else{  ?>
			<div class="ui page stackable grid " id="main-content-grid">
			<?php }  ?>
			
				
				<div class="sixteen wide column"><?php
