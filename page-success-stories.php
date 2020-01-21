<?php
/**
* The template for displaying all default page template.
*
* This is the template that displays all pages by default.
* Please note that this is the WordPress construct of pages
* and that other 'pages' on your WordPress site may use a
* different template.
*
* Template Name: Success Stories
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package gccwp-2018
*/
get_header(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php
  while ( have_posts() ) : the_post(); ?>
  <header>
    <div class="hero-section-text">
      <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
      <?php gcc_wp_2018_page_icons() ?>
    </div>
    <div class="row expanded crumbs-container">
      <nav aria-label="<?php _e('You are here:', 'gcc-wp-2018');?>">
        <?php the_breadcrumb() ?>
      </nav>
    </div>
  </header>
  <!--Page Content-->
  <div class="row expanded content-area">
    <div class="small-12 medium-12 large-9 float-left columns" >
      <?php // if the page has a featured image
      if  (has_post_thumbnail( ) )  { ?>
      <div class="hero-section hide-for-print visible-for-medium-up hidden-for-small-only" id="featured-image" data-toggler="hide" >
        <?php the_post_thumbnail('', array ('alt' => false));  ?>
      </div>
      <?php  }  else {  //.pagesubbanner
      // if page doesn't have a featured image
      ?>
      <?php } ?>
      <div class="entry-content" id="main" tabindex="0">
        <?php //Page Heading
        get_template_part( 'template-parts/content', 'page-alert' );
        ?>
      
       <div class="row expanded" data-equalizer data-equalize-on="large" >

 
 <ul class="tabs" data-tabs id="story-tabs">
  <li class="tabs-title is-active"><a href="#storytab1" aria-selected="true"><?php _e('Stories', 'gcc-wp-2018'); ?></a></li>
  <li class="tabs-title"><a data-tabs-target="storytab2" href="#storytab2"><?php _e('Submit your story', 'gcc-wp-2018'); ?></a></li>
</ul>

<div class="tabs-content" data-tabs-content="story-tabs">
  
  <div class="tabs-panel is-active" id="storytab1">
    
          <?php
          
          $args =  array (
          'post_type' => 'success_stories',
          'order' => 'ASC',
          'orderby' => 'title',
          'posts_per_page'=>-1,
          );
          // the query
          $the_query = new WP_Query( $args ); ?>
          <?php if ( $the_query->have_posts() ) : ?>
          <!-- pagination here -->
          <!-- the loop -->
          <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
          
          <div class="small-12 medium-12 large-6 columns">
            <a href="<?php the_permalink(); ?>" class="stories">
            <div class="card">
            
              <?php // ACF Image Object
        
              $image = get_field('story_image_home_thumb');
            // vars
            $url = $image['url'];
          
        ?>

        <div class="stories-image" style="background-image: url('<?php echo $url ?>');"></div> 
             
              <div class="card-section" data-equalizer-watch>
                <h3><?php the_title(); ?></h3>
              </div>
            </div>
            </a>
          </div>
          <?php endwhile; ?>
          <!-- end of the loop -->
          <!-- pagination here -->
          <?php wp_reset_postdata(); ?>
          <?php else : ?>
          <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
          <?php endif; ?>
        </div>


 
  <div class="tabs-panel" id="storytab2">
   

<h2><?php _e('Submit your story', 'gcc-wp-2018'); ?></h2>

<?php echo do_shortcode('[wpforms id="26617" title="false" description="false"]'); ?>

  </div>
</div>
</div>

      </div>
    </div>
    <aside class="small-12 medium-12 large-3 columns right page-nav hide-for-print" id="section-menu"  data-toggler="hide">
      <?php dynamic_sidebar('admissions-widgets'); ?>
    </aside>
    <footer class="entry-footer">
      <?php gcc_wp_2018_entry_footer(); ?>
      </footer><!-- .entry-footer -->
      </div><!--.pagecontent-->
      <?php endwhile; // End of the loop. ?>
    </article>
    <?php
    get_footer();