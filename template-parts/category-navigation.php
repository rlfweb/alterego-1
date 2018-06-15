<!-- push the items to the end vertically using flexbox -->
<nav id="site-navigation" class="main-navigation flex flex-auto items-end relative">
  <!-- here we have a link with our logo that goes 
  back to the homepage -->
  <a href="<?php echo get_site_url(); ?>" class="absolute top-0 left-0 logo">
  <img src="<?php echo get_template_directory_uri() . '/images/alter-ego-logo.svg'; ?>" class="db">
  </a>

  <?php
  wp_nav_menu( array(
  'theme_location' => 'menu-1',
  'menu_id'        => 'primary-menu',
  'menu_class'		 => 'main-menu ma0 pa0 list'
  ) );
  ?>
</nav><!-- #site-navigation -->
