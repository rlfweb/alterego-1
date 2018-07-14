<div class="search-meta flex">
  <!-- link to search page -->
  <a class="db mr2" href="<?php echo site_url('/search/'); ?>">
    <img src="<?php echo get_template_directory_uri() . '/images/icon-search.svg'; ?>" class="db">
  </a>
  <!-- link to cart page by using the function in woocommerce.php -->
  <a class="db" href="<?php cart_url(); ?>">
    <img src="<?php echo get_template_directory_uri() . '/images/icon-cart.svg'; ?>" class="db">
  </a>
</div>
