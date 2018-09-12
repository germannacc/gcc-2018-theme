<?php // if the page has a featured image
if  (has_post_thumbnail( ) )  { ?>

<header class="hero-section hero-section-single">

  <?php the_post_thumbnail('', array ('alt' => false));  ?>

  <div class="hero-section-text">
     <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
  </div>

  <div class="row expanded crumbs-container">

        <nav aria-label="<?php _e('You are here:', 'gcc-wp-2018');?>">
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
                       <a href="<?php esc_html_e('/workforce-highlights/', 'gcc-wp-2018'); ?>">
                             <?php _e('Workforce Highlights', 'gcc-wp-2018') ?>
                       </a>
                 </li>
                 <li role="menuitem">
                     <?php echo $post_title; ?>
                 </li>
          </ul>

        </nav>

  </div>

</header>


<?php  }  else {  //.pagesubbanner
// if page doesn't have a featured image
?>

<div class="row gutter-small expanded">

<header class="hero-section-plain">



  <?php //if the child page doesn't have a featured images
  //gcc_featured_image_on_child(); ?>

  <div class="hero-section-text">

     <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
  </div>

  <div class="crumbs-container-plain  show-for-medium">

     <nav aria-label="<?php _e('You are here:', 'gcc-wp-2018');?>">
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
                   <a href="<?php esc_html_e('/workforce-highlights/', 'gcc-wp-2018'); ?>">
                         <?php _e('Workforce Highlights', 'gcc-wp-2018') ?>
                   </a>
             </li>
             <li role="menuitem">
                  <?php echo $post_title; ?>
             </li>
       </ul>

     </nav>

  </div>
</header>


</div>

<?php } ?>
