<!DOCTYPE html> 
<html class="no-js" <?php language_attributes(); ?>>
<?php
	if($post->post_excerpt != ''){
		$desc = $post->post_excerpt;
	} else {
		$desc = htmlspecialchars(strip_tags (substr($post->post_content,0,200)));
	}
	?>
<head>

	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="/wp-content/uploads/favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Roboto|Droid+Sans" rel="stylesheet">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	
	<?php wp_head(); ?>
	
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-4761515777721939",
    enable_page_level_ads: true
  });
</script>
	
		<style>
	/*
			@media(max-width:768px){
				.hero{
					background-image: url(<?=getThumbnail($post->ID,"mobile-hero")?>);
				}
				#header{
					padding-bottom: 57%;	
				}
			}
			@media(min-width:769px) and (max-width:1280px){
				.hero{
					background-image: url(<?=getThumbnail($post->ID,"tablet-hero")?>);
				}
				#header{
					padding-bottom: 57%;	
				}
			}
			@media(min-width:1281px){
				.hero{
					background-image: url(<?=getThumbnail($post->ID,"desktop-hero")?>);
				}
				#header{
					padding-bottom: 57%;	
				}
			}*/

		}
	</style>
</head>

<body <?php body_class(); ?>>

<div id="wrapper">

	<header id="header">
	
		<?php if ( has_nav_menu('topbar') ): ?>
			<nav class="nav-container group" id="nav-topbar">
				<div class="nav-toggle"><i class="fa fa-bars"></i></div>
				<div class="nav-text"><!-- put your mobile menu text here -->
					
				</div>
				<div id="logo-wrap">
				<div class="emblem"><img class="style-svg" src="/wp-content/uploads/2015/10/runnersillouette-white.svg">
					
				</div><?php echo alx_site_title(); ?><?php if ( ot_get_option('site-description') != 'off' ): ?><p class="site-description"><?php bloginfo( 'description' ); ?></p>
				</div>
				<div class="nav-wrap container"><?php endif; ?><?php wp_nav_menu(array('theme_location'=>'topbar','menu_class'=>'nav container-inner group','container'=>'','menu_id' => '','fallback_cb'=> false)); ?></div>
				<div class="social-icon twitter"><a href="https://twitter.com/XercisingFoodie" target="_blank"><img class="style-svg" src="/wp-content/uploads/2015/10/twitter-01.svg"></a></div>
				<div class="social-icon facebook"><a href="https://www.facebook.com/exercisingfoodies/" target="_blank"><img class="style-svg" src="/wp-content/uploads/2015/10/facebook-01.svg"></a>
					
				</div>
				<div class="container">
					<!--<div class="container-inner">		
						<div class="toggle-search"><i class="fa fa-search"></i></div>
						<div class="search-expand">
							<div class="search-expand-inner">
								<?php get_search_form(); ?>
							</div>
						</div>
					</div>/.container-inner-->
				</div><!--/.container-->
				
			</nav><!--/#nav-topbar-->
		<?php endif; ?>
		
		<div class="container group">
			<div class="container-inner">
				
				<?php if ( ot_get_option('header-image') == '' ): ?>
				<div class="group pad">
					
					
					<?php if ( ot_get_option('header-ads') == 'on' ): ?>
					<div id="header-ads">
						<?php dynamic_sidebar( 'header-ads' ); ?>
					</div><!--/#header-ads-->
					<?php endif; ?>
				</div>
				<?php endif; ?>
				<?php if ( ot_get_option('header-image') ): ?>
					<a href="<?php echo home_url('/'); ?>" rel="home">
						<img class="site-image" src="<?php echo ot_get_option('header-image'); ?>" alt="<?php get_bloginfo('name'); ?>">
					</a>
				<?php endif; ?>
				
				<?php if ( has_nav_menu('header') ): ?>
					<nav class="nav-container group" id="nav-header">
						<div class="nav-toggle"><i class="fa fa-bars"></i></div>
						<div class="nav-text"><!-- put your mobile menu text here --></div>
						<div class="nav-wrap container"><?php wp_nav_menu(array('theme_location'=>'header','menu_class'=>'nav container-inner group','container'=>'','menu_id' => '','fallback_cb'=> false)); ?></div>
					</nav><!--/#nav-header-->
				<?php endif; ?>
				
			</div><!--/.container-inner-->
		</div><!--/.container-->
		
	</header><!--/#header-->
	
	<div class="container" id="page">
	
		<div class="container-inner">			
			<div class="main">
				<div class="main-inner group">