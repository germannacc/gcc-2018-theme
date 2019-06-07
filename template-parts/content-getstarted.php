<div id="getting-started" class="row expanded gutter-small expanded">
  <div class="getting-started-content">
    <h2 class="text-center text-shadow"><?php the_field('get_started_heading'); ?></h2>
    <div class="small-12 medium-6 large-4 columns" data-equalizer-watch>
      <div class="getting-started-block text-center">
        <?php
        // vars
        $image1 = get_field('apply_box_image');
        $url = $image1['url'];
        $alt = $image1['alt'];
        // thumbnail
        $size = 'large';
        $thumb = $image1['sizes'][ $size ];
        $width = $image1['sizes'][ $size . '-width' ];
        $height = $image1['sizes'][ $size . '-height' ];
        ?>
        <img src="<?php echo $url; ?>" alt="<?php echo $alt;?>" width="<?php echo $width;?>" height="<?php echo $height;?>">
        <a href="<?php the_field('apply_box_url'); ?>">
          <div class="block-section">
            <h3><?php the_field('apply_box_heading'); ?></h3>
            <p><?php the_field('apply_box_description'); ?></p>
          </div>
          
        </a>
      </div>
    </div>
    <div class="small-12 medium-6 large-4 columns" data-equalizer-watch>
      <div class="getting-started-block text-center">
        <?php  // vars
        $image2 = get_field('register_box_image');
        $url = $image2['url'];
        $alt = $image2['alt'];
        // thumbnail
        $size = 'large';
        $thumb = $image2['sizes'][ $size ];
        $width = $image2['sizes'][ $size . '-width' ];
        $height = $image2['sizes'][ $size . '-height' ];
        ?>
        <img src="<?php echo $url; ?>" alt="<?php echo $alt;?>" width="<?php echo $width;?>" height="<?php echo $height;?>">
        <a href="<?php the_field('register_box_url');?>">
          <div class="block-section">
            <h3><?php the_field('register_box_heading'); ?></h3>
            <p><?php the_field('register_box_description'); ?></p>
          </div>
        </a>
      </div>
    </div>
    <div class="small-12 medium-6 large-4 columns" data-equalizer-watch>
      <div class="getting-started-block text-center">
        <?php  // vars
        $image3 = get_field('paying_box_image');
        $url = $image3['url'];
        $alt = $image3['alt'];
        // thumbnail
        $size = 'large';
        $thumb = $image3['sizes'][ $size ];
        $width = $image3['sizes'][ $size . '-width' ];
        $height = $image3['sizes'][ $size . '-height' ];
        ?>
        <img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>">
        <a href="<?php the_field('paying_box_url');?>">
          <div class="block-section">
            <h3><?php the_field('paying_box_heading'); ?></h3>
            <p><?php the_field('paying_box_description'); ?></p>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>