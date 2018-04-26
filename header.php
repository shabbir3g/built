<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package built
 */
 global $redux_demo;
?>


<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo $redux_demo['opt-fav']['url']; ?>" />
	
	<?php wp_head(); ?>
  </head>
  <body>

    <header>
      <nav class="navbar navbar-expand-md">
		<div class="container"> 
			 <a class="navbar-brand" href="<?php bloginfo('home'); ?>"><img src="<?php echo $redux_demo['header-logo']['url']; ?>" alt="" /></a>
		<div id="nav-icon2" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
		  <span></span>
		  <span></span>
		  <span></span>
		  <span></span>
		  <span></span>
		  <span></span>
		</div>
        <div class="collapse navbar-collapse " id="navbarCollapse">
			<?php wp_nav_menu(array(
				'theme_location'	=> 'main-menu',
				'menu_class'		=> 'navbar-nav mr-auto main-menu',
			)); ?>
        </div>
		</div>
      </nav>
    </header>