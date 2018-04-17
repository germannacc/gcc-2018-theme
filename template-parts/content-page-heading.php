<div class="row gutter-small expanded hero-section">

<header class="hero-section">
  <img src="https://placeimg.com/640/480/nature" alt="page heading" width="640" height="300">
  <div class="hero-section-text">
     <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
  </div>
</header>

</div><!--.page-heading-->

<div class="row expanded crumbs-container">

      <nav aria-label="<?php _e('You are here:');?>" role="navigation">
        <ul class="breadcrumbs">

          <?php $home_page = get_the_title( get_option('page_on_front')); ?>
              <li role="menuitem"><a href="<?php echo get_site_url(); ?>"><?php echo $home_page; ?></a></li>

              <?php
              // if there is a parent, display the link to go back to parent page
              $parent_title = get_the_title( $post->post_parent );
              if ( $parent_title != the_title('', '', false) ) { ?>
              <li role="menuitem" class="disabled"><a href="<?php echo get_permalink( $post->post_parent ) ?>"><?php echo $parent_title; ?></a></li>
              <?php } else if ( $parent_title == the_title('', '', false)) { ?>

              <li class="last" role="menuitem"><?php echo $parent_title; ?></li>
              <?php }
              // if the page is a child page display page title
              if
              ( is_page() && $post->post_parent != the_title('', '', false) ) { ?>
              <?php the_title('<li class="last">', '</li>'); ?>
              <?php } ?>

        </ul>
      </nav>

</div>
