<!-- here we apply a width of 50% when the 
screen is between 30em and 60em (medium size) -->
<div class="site-branding w-50-m">

  <?php get_template_part('template-parts/header-search'); ?>

  <!-- our featured image will go in here -->
  <!-- here we use our get_category_image function which will
  find the current category, and if it doesn’t it will return 
  us the homepage image -->
  <img src="<?php get_category_image('home'); ?>" class="db featured-image">
</div><!-- .site-branding -->
