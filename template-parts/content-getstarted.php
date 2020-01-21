<div id="getting-started" class="row expanded gutter-small expanded">

<div class="getting-started-content">

  <h2 class="text-center text-shadow"><?php the_field('get_started_heading'); ?></h2>

  <div class="small-12 medium-6 large-4 columns" data-equalizer-watch>

  <div class="getting-started-block text-center">

      <?php // ACF Image Object
      
            $image = get_field('apply_box_image');
          // vars
          $url = $image['url'];
        
      ?>

    <div class="getstarted-image" style="background-image: url('<?php echo $url ?>');"></div>

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

          <?php // ACF Image Object
      
            $image = get_field('register_box_image');
          // vars
          $url = $image['url'];
        
      ?>

    <div class="getstarted-image" style="background-image: url('<?php echo $url ?>');"></div>


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

            <?php // ACF Image Object
      
            $image = get_field('paying_box_image');
          // vars
          $url = $image['url'];
        
      ?>

    <div class="getstarted-image" style="background-image: url('<?php echo $url ?>');"></div>



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
