<?php $video_id = get_field('video_id'); ?>

<?php if( !empty($video_id) ): ?>

  <div id="home-video" class="row expanded gutter-small expanded">

    <div class="small-12 medium-10 medium-offset-1 columns home-video">

    <h2 class="text-center"><?php the_field('video_section_heading'); ?></h2>

     <?php the_field('video_section_text'); ?>

      <div class="small-12 medium-6 large-4 small-centered text-center columns">
      <a href="<?php the_field('video_section_button_url'); ?>" class="text-center button primary"><?php the_field('video_section_button_text'); ?></a>
      </div>

      <div class="responsive-embed widescreen">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php the_field('video_id'); ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
      </div>

    </div>

  </div>

<?php endif; ?>
