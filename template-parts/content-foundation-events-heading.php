<?php // if the page has a featured image
if  ( has_post_thumbnail())  { ?>

<div class="row gutter-small expanded">

<header class="hero-section hero-section-single">

    <?php the_post_thumbnail(); ?>

    <div class="hero-section-text">
       <?php $events_page = get_the_title( 20493 ); ?>
       <h1><?php echo $events_page; ?></h1>
    </div>

  <div class="row expanded crumbs-container show-for-medium">

    <nav aria-label="<?php _e('You are here:', 'gcc-wp-2018');?>" role="navigation">
      <ul class="breadcrumbs">
          <?php $home_page = get_the_title( get_option('page_on_front'));
          $post_title = get_the_title( get_option('page_for_posts'));
           ?>
          <li role="menuitem">
              <a href="<?php echo get_site_url(); ?>">
                  <?php echo $home_page; ?>
              </a>
          </li>
          <li role="menuitem">
              <a href="<?php  echo get_permalink( get_option( 'page_for_posts' ) ); ?>">
                  <?php echo $post_title; ?>
              </a>
          </li>
          <li role="menuitem">
              <?php the_title(); ?>
          </li>
      </ul>
    </nav>

  </div>

</header>

</div>


<?php  }  else {  //.pagesubbanner
// if page doesn't have a featured image
?>


<div class="row gutter-small expanded" style="margin-top: 50">

<header class="hero-section-plain">

  <?php //if the child page doesn't have a featured images
  //gcc_featured_image_on_child(); ?>

  <div class="hero-section-text">
     <?php $events_page = get_the_title( 20493 ); ?>
     <h1><?php echo $events_page; ?></h1>
  </div>

  <div class="crumbs-container-plain">

    <nav aria-label="<?php _e('You are here:', 'gcc-wp-2018');?>" role="navigation">
        <ul class="breadcrumbs">
            <?php $home_page = get_the_title( get_option('page_on_front'));
            $post_title = get_the_title( get_option(20493));
             ?>
            <li role="menuitem">
                <a href="<?php echo get_site_url(); ?>">
                    <?php echo $home_page; ?>
                </a>
            </li>
            <li role="menuitem">
                <a href="<?php  echo get_permalink( get_option( 20493 ) ); ?>">
                    <?php echo $events_page; ?>
                </a>
            </li>
            <li role="menuitem">
                <?php the_title(); ?>
            </li>
        </ul>
    </nav>

  </div>

</header>

</div>

<?php } ?>
