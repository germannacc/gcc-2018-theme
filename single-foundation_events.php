<?php
/**
 * The template for displaying all foundation events
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package gccwp-2018
 */

get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <?php
  while ( have_posts() ) : the_post(); ?>

  <?php // if the page has a featured image
  if  (has_post_thumbnail( ) )  { ?>

  <header class="hero-section">

  <?php the_post_thumbnail('', array ('alt' => false));  ?>

  </header>

  <div class="hero-section-text">
      <?php the_title(); ?></h1>
      <div class="entry-meta">
        <p><strong><?php
       _e('Scholarship events') | gcc_wp_2018_entry_footer(); ?>
        </strong>
      </p>
      <p>
         <?php echo get_the_tag_list(); ?>

      </p>

      </div>
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
                       <a href="<?php esc_html_e('/educational-foundation/', 'gcc-wp-2018'); ?>">
                             <?php _e('Educational Foundation', 'gcc-wp-2018') ?>
                       </a>
                 </li>
                 <li role="menuitem">
                       <a href="<?php esc_html_e('/educational-foundation/scholarship-events/', 'gcc-wp-2018'); ?>">
                             <?php _e('Scholarship Events', 'gcc-wp-2018') ?>
                       </a>
                 </li>
                 <li role="menuitem">
                     <?php echo $post_title; ?>
                 </li>
          </ul>
        </nav>

  </div>


  <?php  }  else {  //.pagesubbanner
  // if page doesn't have a featured image
  ?>

  <div class="row gutter-small expanded">

  <header class="hero-section">


    <?php //if the child page doesn't have a featured images
    //gcc_featured_image_on_child(); ?>

    <div class="hero-section-text">

     <h1 class="entry-title"><?php the_title(); ?></h1>
     <div class="entry-meta">
       <p><strong><?php
      _e('Scholarship events', 'gcc-wp-2018') | gcc_wp_2018_entry_footer(); ?>
       </strong>
     </p>
     <p>
        <?php echo get_the_tag_list(); ?>

     </p>

     </div>
    </div>

    <div class="crumbs-container show-for-medium">

          <nav aria-label="<?php _e('You are here:', 'gcc-wp-2018');?>" aria-label="Breadcrumb">

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
                         <a href="<?php esc_html_e('/educational-foundation/', 'gcc-wp-2018'); ?>">
                               <?php _e('Educational Foundation', 'gcc-wp-2018') ?>
                         </a>
                   </li>
                   <li role="menuitem">
                         <a href="<?php esc_html_e('/educational-foundation/scholarship-events/', 'gcc-wp-2018'); ?>">
                               <?php _e('Scholarship Events', 'gcc-wp-2018') ?>
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


  <!--Page Content-->
 <div class="row gutter-small expanded content-area">

   <div class="small-12 gutter-small entry-content">


     <?php
      $event_description = get_field('event_description');
      $event_image = get_field('event_image');
      $event_date = get_field('event_date');
      $event_time = get_field('event_time');
      $event_location = get_field('event_location');
      $event_address = get_field('event_address');
      $event_ticket_price = get_field('event_ticket_price');
      $event_contact_phone = get_field('event_contact_phone');
      $event_contact_email = get_field('event_contact_email');
      $event_extra_info = get_field('event_extra_info');
      $event_button_url = get_field('event_button_url');
      $event_button_text = get_field('event_button_text');
      $purchase_tickets_online_url = get_field('purchase_tickets_online_url');
      $purchase_tickets_online_text = get_field('purchase_tickets_online_text');
      ?>


<div class="small-12 medium-8 columns"  itemscope itemtype="http://schema.org/Event">


                  <div itemprop="about">
                    <?php the_field('event_description'); ?>
                  </div>
                  <div itemprop="about">
                    <?php the_field('event_extra_info'); ?>
                  </div>

                    <div class="button-group" style="margin-bottom: 30px;">
                      <a class="button" href="<?php echo $event_button_url; ?>"><?php echo $event_button_text; ?></a>

                    <a class="button secondary" href="<?php echo $purchase_tickets_online_url; ?>" ><?php echo $purchase_tickets_online_text; ?></a>

                    </div>

</div>

<div class="small-12 medium-4 columns">
<div class="callout small primary"  itemscope itemtype="http://schema.org/Offer">

  <h3><?php _e('Event details', 'gcc-wp-2018') ?></h3>

  <?php if ( !empty($event_image)) : ?>
  <meta itemprop="thumbnail" content="<?php $event_image['url']; ?>" />
  <img src="<?php echo $event_image['url']; ?>" class="img-responsive" alt="<?php echo $event_image['alt']; ?>" style="margin-bottom: 20px; width: 100%;" />
  <?php endif ?>
  <p itemprop="location"><span class="fa fa-compass" aria-hidden="true" aria-label="location"></span> <?php the_field('event_location');?><br/>
    <?php echo $event_address; ?></p>
  <p><span class="fa fa-calendar" aria-hidden="true" aria-label="event date"></span> <?php echo $event_date; ?></p>
  <p itemprop="time"><span class="fa fa-clock-o" aria-hidden="true" aria-label="event time"></span> <?php echo $event_time; ?></p>
  <p itemprop="price"><span class="fa fa-dollar" aria-hidden="true" aria-label="event price"></span><?php echo $event_ticket_price; ?></p>
  <p><span class="fa fa-phone" aria-hidden="true" aria-label="event contact phone"></span> <?php echo $event_contact_phone; ?><strong></p>
  <p><span class="fa fa-envelope" aria-hidden="true" aria-label="event contact email"></span> <a href="mailto:<?php echo $event_contact_email; ?>"><?php echo $event_contact_email; ?></a></p>

</div>
</div>

   <footer class="entry-footer">
     <?php gcc_wp_2018_entry_footer(); ?>
   </footer><!-- .entry-footer -->


 </div><!--.pagecontent-->
   <?php get_sidebar();?>

  <?php endwhile; // End of the loop. ?>

</article>

<?php
get_footer();
