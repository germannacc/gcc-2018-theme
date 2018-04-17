<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gccwp-2018
 */

 get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


        <div class="row gutter-small expanded hero-section">

            <header class="hero-section">
                <img src="https://placeimg.com/640/480/nature" alt="page heading" width="640" height="300">
                <div class="hero-section-text">
                    <h1 class "screen-reader-text">
                        <?php single_post_title(); ?>
                    </h1>
                </div>
            </header>

        </div>
        <!--.page-heading-->


        <div class="row expanded crumbs-container">

            <nav aria-label="<?php _e('You are here:');?>" role="navigation">
                <ul class="breadcrumbs">

                    <?php $home_page = get_the_title( get_option('page_on_front')); ?>
                    <li role="menuitem">
                        <a href="<?php echo get_site_url(); ?>">
                            <?php echo $home_page; ?>
                        </a>
                    </li>
                    <li role="menuitem" class="disabled">
                        <?php single_post_title(); ?>
                    </li>


                </ul>
            </nav>

        </div>


        <!--Page Content-->
        <div class="row gutter-small expanded content-area">

      <?php //Page with Sidebar Template
       get_template_part( 'template-parts/content', 'postpage' ); ?>

            <?php //Template Sidebar
       get_template_part( '/sidebars/default-sidebar' ); ?>

        </div>
        <!--.pagecontent-->


    </article>



    <?php
 get_footer();
