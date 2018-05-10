<?php // if the page has a featured image
if  (has_post_thumbnail( $post->post_parent ) )  { ?>

<header class="hero-section">

<?php the_post_thumbnail();  ?>

  <div class="hero-section-text">
     <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
  </div>

  <div class="row expanded crumbs-container">

        <nav aria-label="<?php _e('You are here:');?>" aria-label="Breadcrumb">
          <ul class="breadcrumbs">

                <?php $home_page = get_the_title( get_option('page_on_front')); ?>
                <li><a href="<?php echo get_site_url(); ?>"><?php echo $home_page; ?></a></li>

                <?php
                // if there is a parent, display the link to go back to parent page
                $parent_title = get_the_title( $post->post_parent );
                if ( $parent_title != the_title('', '', false) ) { ?>
                <li class="disabled"><a href="<?php echo get_permalink( $post->post_parent ) ?>"><?php echo $parent_title; ?></a></li>
                <?php } else if ( $parent_title == the_title('', '', false)) { ?>

                <li class="last"><?php echo $parent_title; ?></li>
                <?php }
                // if the page is a child page display page title
                if
                ( is_page() && $post->post_parent != the_title('', '', false) ) { ?>
                <?php the_title('<li class="last">', '</li>'); ?>
                <?php } ?>

          </ul>
        </nav>

  </div>

</header>


<?php  }  else {  //.pagesubbanner
// if page doesn't have a featured image
?>


<div class="row gutter-small expanded">

<header class="hero-section-plain">

  <div class="hero-section-text">
     <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
  </div>

  <div class="crumbs-container-plain">

        <nav aria-label="<?php _e('You are here:');?>" aria-label="Breadcrumb">
          <ul class="breadcrumbs">

                <?php $home_page = get_the_title( get_option('page_on_front')); ?>
                <li><a href="<?php echo get_site_url(); ?>"><?php echo $home_page; ?></a></li>

                <?php
                // if there is a parent, display the link to go back to parent page
                $parent_title = get_the_title( $post->post_parent );
                if ( $parent_title != the_title('', '', false) ) { ?>
                <li class="disabled"><a href="<?php echo get_permalink( $post->post_parent ) ?>"><?php echo $parent_title; ?></a></li>
                <?php } else if ( $parent_title == the_title('', '', false)) { ?>

                <li class="last"><?php echo $parent_title; ?></li>
                <?php }
                // if the page is a child page display page title
                if
                ( is_page() && $post->post_parent != the_title('', '', false) ) { ?>
                <?php the_title('<li class="last">', '</li>'); ?>
                <?php } ?>

          </ul>
        </nav>

  </div>
</header>


</div>

<?php } ?>
