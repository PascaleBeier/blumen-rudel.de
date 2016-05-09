<header class="banner">
  <div class="container">
    <div class="row">
      <div class="site-logo">
        <!-- Show site name if no header image is set -->
        <?php if ( header_image()) : ?>
          <img src="<?php header_image(); ?>" alt="<?php bloginfo('name') ?>" />
        <?php else : ?>
          <h1>
            <?php bloginfo('name') ?>
          </h1>
        <?php endif ?>
        <h2 class="site-description">
          <?php bloginfo('description') ?>
        </h2>
      </div>


      <!-- Site navigation -->
      <nav class="navbar navbar-default">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navigation" aria-expanded="false">
            <span class="sr-only">Menü ausklappen</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

      <div class="collapse navbar-collapse" id="main-navigation">
        <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'nav navbar-nav']);
        endif;
        ?>
      </div><!-- /.navbar-collapse -->
    </nav>

    </div>
  </div>
</header>

<div class="header-image">
  <?php if (has_post_thumbnail()) :
  	the_post_thumbnail();
  endif ?>
</div>
