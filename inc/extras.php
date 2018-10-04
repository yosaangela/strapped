<?php 

/*
* Custom menu output
* No <ul>, no <li>, just <a>
**/
function headlab_menu($location) {
// Get our nav locations (set in our theme, usually functions.php)
$menuLocations = get_nav_menu_locations(); // This returns an array of menu locations;

$menuID = $menuLocations[$location]; // Get the *MENU* menu ID

$menu_navs = wp_get_nav_menu_items($menuID);
  
  foreach ( $menu_navs as $menu_nav ) {

    echo '<a href="'. esc_url( $menu_nav->url ) .'" title="'. esc_html( $menu_nav->title ) .'">'. esc_html( $menu_nav->title ) .'</a>';
  }
}
