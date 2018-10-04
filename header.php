<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Strapped
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'strapped' ); ?></a>

  <header id="masthead" class="site-header" role="banner">
    <nav role="navigation" id="navbar-main">
      <div class="navbar navbar-inverse navbar-static-top">
        <div class="container">
          <!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
          <div class="navbar-header">
            <!--button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><!?php esc_html_e( 'Primary Menu', 'zanyfunny' ); ?></button-->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>

            <?php strapped_the_custom_logo(); ?>
             
          </div>

          <div class="navbar-collapse collapse navbar-responsive-collapse">
            <?php
            $args = array( // Array of options
              'theme_location' => 'primary', // This is where you assign location to the menu
              'depth'      => 2,
              'container'  => false,
              'menu_class'     => 'nav navbar-nav',
              'walker'     => new Bootstrap_Walker_Nav_Menu(), //wait, this new bl blaa.. is we going make an object? Yes, you have to instantiate the class to use it, or else it just exists in global namespace.aaa ok.
              );
            if (has_nav_menu('primary')) { 
            // here is if statement to check if there are items in menu assigned in primary location
              wp_nav_menu($args); // This is WP native function to call a menu
            }
            headlab_menu('primary');
            ?>
            
          </div>
        </div>
      </div>           
    </nav>
  </header><!-- #masthead -->

  <div class="container">
    <div id="content" class="site-content">

