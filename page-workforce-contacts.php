<?php
//Names the page template for each section
/*
Template Name: Workforce Contacts
*/
get_header(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
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
  <!--Page Content-->
  <div class="row gutter-small expanded content-area">
    <div class="small-12 medium-8 large-9 gutter-small entry-content" id="main" tabindex="0">
      <?php
      the_content();
      ?>
      <?php
      $post_type = 'workforce_staff';
      // Get all the taxonomies for this post type
      $taxonomies = get_object_taxonomies( array( 'post_type' => $post_type ) );  ?>
      <ul class="tabs" data-tabs id="emp-tabs">
        <?php
        $args = array (
        'taxonomy' => 'workforce_emp_location',
        'hide_empty'=> 1,
        'orderby' => 'name',
        'order' => 'ASC'
        );
        $categories = get_categories($args);
        foreach($categories as $category)
        {
        ?>
        <li class="tabs-title">
          <a href="#<?php echo $category->name ?>"><?php
          echo $category->name ?></a>
        </li>
        <?php $cat_name = $category->name; }?>
      </ul>
      <div class="tabs-content" data-tabs-content="example-tabs">
        <?php foreach( $taxonomies as $taxonomy ) :  ?>
        <?php   // Gets every "category" (term) in this taxonomy to get the respective posts
        $terms = get_terms( $taxonomy );  ?>
        <?php foreach( $terms as $term ) : ?>
        <?php
        $args = array(
        'post_type' => $post_type,
        'posts_per_page' => -1,  //show all posts
        'tax_query' => array(
        array(
        'taxonomy' => $taxonomy,
        'field' => 'slug',
        'terms' => $term->slug,
        )
        )
        );
        $posts = new WP_Query($args);
        if ( $posts->have_posts() ) : ?>
        <?php while( $posts->have_posts() ) : $posts->the_post();
        $job_title = get_field('job_title');
        $phone_number = get_field('phone_number');
        $employee_email = get_field('$employee_email');
        ?>
        <div class="tabs-panel" id="#<?php echo $term->name; ?>">
          <div class="small-12 medium-6 text-center">
            <div class="callout primary small">
              <?php the_title('<h3>', '</h3>', 'gcc-wp-2018'); ?>
              <?php
              $image = get_field('employee_photo');
              if( !empty($image) ):
              // vars
              $url = $image['url'];
              $title = $image['title'];
              $alt = $image['alt'];
              $caption = $image['caption'];
              // thumbnail
              $size = 'thumbnail';
              $thumb = $image['sizes'][ $size ];
              $width = $image['sizes'][ $size . '-width' ];
              $height = $image['sizes'][ $size . '-height' ];
              ?>
              <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
              <?php endif; ?>
              <p style="font-size: 14px; margin-top: 10px;">
                <strong><?php the_field('job_title'); ?></strong><br/>
                <?php the_field('phone_number'); ?><br/>
                <a href="mailto:<?php the_field('employee_email') ?>"><?php the_field('employee_email');?></a>
              </p>
            </div>
          </div>
        </div>
        <?php endwhile; endif; ?>
        <?php endforeach; ?>
        <?php  endforeach; ?>
      </div>
      <?php wp_reset_postdata(); ?>
    </div>
  </div>
  <footer class="entry-footer">
    <?php gcc_wp_2018_entry_footer(); ?>
    </footer><!-- .entry-footer -->
    <aside class="small-12 medium-4 large-3 columns right page-nav hide-for-print" id="section-menu"  data-toggler="hide">
      <?php dynamic_sidebar( 'workforce-widgets' ); ?>
    </aside>
    </div><!--.pagecontent-->
  </article>
  <script>
  $( document ).ready(function() {
  $("li.tabs-title ").click(function(){
  });
  });
  </script>
  <?php
  get_footer();