<?php
/**
* Default page template.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package gccwp-2018
*
* Template Name: G3
*
*/
get_header(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php
  while ( have_posts() ) : the_post(); ?>
  <?php //Page Heading
  get_template_part( 'template-parts/content', 'page-heading' );
  ?>
  <div class="row expanded content-area">
    <div class="small-12 medium-12 large-9 float-left columns" >
      <?php // if the page has a featured image
      if  (has_post_thumbnail( ) )  { ?>
      <div class="hero-section hide-for-print visible-for-medium-up hidden-for-small-only" id="featured-image" data-toggler="hide" >
        <?php the_post_thumbnail('', array ('class' => 'lazy'));  ?>
      </div>
      <?php  }  else {  //.pagesubbanner
      // if page doesn't have a featured image
      ?>
      <?php } ?>

<div class="entry-content" id="main" tabindex="0">

  <div class="row expanded">

    <div class="small-12 medium-6 columns">
 <p>The G3 initiative focuses on training Virginians for high-demand jobs that meet employer demand in our community. Pathways in <a href="https://germannacc.staging.wpengine.com/pathways/public-service/">public service</a>, <a href="https://germannacc.staging.wpengine.com/pathways/it-and-technical-studies/">IT</a>, <a href="https://germannacc.staging.wpengine.com/pathways/it-and-technical-studies/cybersecurity/">cybersecurity</a> and <a href="https://germannacc.staging.wpengine.com/pathways/it-and-technical-studies/information-systems-technology-major/">computer science</a>, <a href="https://germannacc.staging.wpengine.com/pathways/social-science-education/early-childhood-development/">early childhood education</a>, <a href="https://germannacc.staging.wpengine.com/pathways/health-science/">healthcare</a>, and <a href="https://nam04.safelinks.protection.outlook.com/?url=https%3A%2F%2Fwww.germanna.edu%2Fworkforce%2Fapprenticeship-programs%2F&data=02%7C01%7CMHummel%40germanna.edu%7C1e165454e7e64405ae8008d742947881%7C81259a06defb41f98a9d4fa2f6dd84c2%7C0%7C0%7C637051077752270148&sdata=dK7mHKam6VLO0mBQdTUfBu%2BA%2BZ2W8Jf19caBiKaOF8A%3D&reserved=0">manufacturing and trades</a> will be redesigned so that students learn skills first, with multiple levels of training that all have clear tracks to careers.</p>
    </div>

    <div class="small-12 medium-6 columns">

              <?php
        the_content();
        ?>

    </div>

  </div>

<h2><?php _e('Included Pathways', 'gcc-wp-2018'); ?></h2>

    <h3 class="text-center"><?php the_field('pathways_heading'); ?></h3>
            
        <?php
        $args =  array (
        'post_type' => 'pathways_home',     
        'posts_per_page' => -1,
        'orderby'=> 'title', 
        'order' => 'ASC',
        'tax_query'      => array (
        
        // Note: tax_query expects an array of arrays!
        array(
            'taxonomy' => 'pathway_categories', // my guess
            'field'    => 'id',
            'terms'    => 1823,
        ),
    ),

        );
        ?>
        <?php $query = new WP_Query( $args ); ?>
        <?php if ( $query->have_posts() ) : ?>
         
        <?php while ( $query->have_posts() ) : $query->the_post();?>
             
              <?php
              $pathway_image = get_field('pathway_image');
              if( !empty($pathway_image) ):
                // vars
                $url = $pathway_image['url'];
                $alt = $pathway_image['alt'];
                // thumbnail
                $size = 'large';
                $thumb = $pathway_image['sizes'][ $size ];
                $width = $pathway_image['sizes'][ $size . '-width' ];
                $height = $pathway_image['sizes'][ $size . '-height' ];
              ?>
  
          <div class="row expanded">     
          
          <?php the_title('<h2>', '</h2>', 'gcc-wp-2018'); ?>

          <div class="small-12 medium-6 large-6 columns">    

          <?php the_excerpt(); ?> 

         <p><a href="<?php the_field('pathway_url');?>"><?php _e('View Programs', 'gcc-wp-2018') ?></a></p>

          </div>

          <div class="small-12 medium-6 columns">     
          
          <img src="<?php echo $thumb; ?>" alt="<?php echo $alt;?>" width="<?php echo $width;?>" height="<?php echo $height;?>" style="width: 100%; background-size: cover; background-position: top center;">
              <?php endif; ?>
          </div>

          </div>
          <hr>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php else : ?>
        <p><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'gcc-wp-2018' ); ?></p>
        
        <?php endif; ?>

    </div>
      </div><!--.pagecontent-->
    <?php get_sidebar();?>
    <footer class="entry-footer">
      <?php gcc_wp_2018_entry_footer(); ?>
      </footer><!-- .entry-footer -->
      <?php endwhile; // End of the loop. ?>
    </article>
    <?php
    get_footer();