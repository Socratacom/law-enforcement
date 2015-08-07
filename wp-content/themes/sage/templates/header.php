<header class="banner" role="banner">
  <div class="container">
  	<p style="color:#fff">Logo, Contact link, Back to socrata.com</p>
    <nav role="navigation">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>
    </nav>
  </div>
</header>
