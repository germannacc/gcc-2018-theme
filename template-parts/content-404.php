<div class="small-12 entry-content">

  <div class="error-404 not-found">
    <header class="page-header">
      <h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'gcc-wp-2018' ); ?></h1>
    </header><!-- .page-header -->

    <div class="page-content">
      <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'gcc-wp-2018' ); ?></p>

      <?php
        get_search_form();

        the_widget( 'WP_Widget_Recent_Posts' );
      ?>

      <div class="widget widget_categories">
        <h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'gcc-wp-2018' ); ?></h2>
        <ul>
        <?php
          wp_list_categories( array(
            'orderby'    => 'count',
            'order'      => 'DESC',
            'show_count' => 1,
            'title_li'   => '',
            'number'     => 10,
          ) );
        ?>
        </ul>
      </div><!-- .widget -->

      <?php

        /* translators: %1$s: smiley */
        $archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'gcc-wp-2018' ), convert_smilies( ':)' ) ) . '</p>';
        the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );

        the_widget( 'WP_Widget_Tag_Cloud' );
      ?>

    </div><!-- .page-content -->
  </div><!-- .error-404 -->




</div>


<footer class="entry-footer">
  <?php gcc_wp_2018_entry_footer(); ?>
</footer><!-- .entry-footer -->
