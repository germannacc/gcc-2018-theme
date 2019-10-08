  <header>
    <div class="hero-section-text">
      <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    </div>
    <div class="row expanded crumbs-container gutter-small">
      <div class="small-12 medium-8 large-9 columns">
        <nav aria-label="<?php _e('You are here:', 'gcc-wp-2018');?>">
          <?php the_breadcrumb() ?>
        </nav>
      </div>
      <div class="small-12 medium-4 large-3 columns show-for-landscape">
        <?php gcc_wp_2018_page_icons() ?>
      </div>
    </div>
</header>