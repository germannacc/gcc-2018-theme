<div class="row expanded">
  <header class="hero-section">
    <?php //if the child page doesn't have a featured images
    //gcc_featured_image_on_child(); ?>
    <div class="hero-section-text">
      <h1 class="entry-title" style="width: 75%;"><?php the_title(); ?></h1>
    </div>
    <div class="row expanded crumbs-container gutter-small">
     <div class="small-12 medium-8 large-9 columns">        
      <nav aria-label="<?php _e('You are here:', 'gcc-wp-2018');?>" role="navigation">
          <ul class="breadcrumbs">
            <?php $home_page = get_the_title( get_option('page_on_front'));
            $post_title = get_the_title( get_option('workforce-highlights'));
            ?>
            <li role="menuitem">
              <a href="<?php echo get_site_url(); ?>">
                <?php echo $home_page; ?>
              </a>
            </li>
            <li role="menuitem">
              <a href="<?php esc_html_e('/workforce/', 'gcc-wp-2018'); ?>">
                <?php _e('Workforce', 'gcc-wp-2018') ?>
              </a>
            </li>
            <li role="menuitem">
              <a href="<?php esc_html_e('/workforce-updates/', 'gcc-wp-2018'); ?>">
                <?php _e('Workforce updates', 'gcc-wp-2018') ?>
              </a>
            </li>
            <li role="menuitem">
              <?php echo $post_title; ?>
            </li>
          </ul>
        </nav>
      </div>
      <div class="small-12 medium-4 large-3 columns show-for-landscape">
        <?php gcc_wp_2018_page_icons() ?>
      </div>
    </div>
  </header>
</div>