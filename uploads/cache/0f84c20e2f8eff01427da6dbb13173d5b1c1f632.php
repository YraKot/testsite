<header class="banner">
  <div class="container">




    <nav class="navbar navbar-expand-lg">
      <a class="navbar-brand" href="<?php echo home_url(); ?>"><img src="<?php echo App::logo(); ?>" alt="logo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse menu-main-container" id="navbarNav">
        <?php if(has_nav_menu('primary_navigation')): ?>
          <?php echo wp_nav_menu([
          'theme_location' => 'primary_navigation',
           'menu_class' => 'navbar-nav ',
           'items_wrap'     => my_nav_wrap()
           ]); ?>

        <?php endif; ?>
      </div>
    </nav>
  </div>
</header>
