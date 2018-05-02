<?php
//Getting Started Section
$get_started_heading = get_field('get_started_heading');
$get_started_background_image = get_field('get_started_background_image');
//Apply Box
$apply_box_heading = get_field('apply_box_heading');
$apply_box_description = get_field('apply_box_description');
$apply_box_image = get_field('apply_box_image');
$apply_box_url = get_field('apply_box_url');
//Register Box
$register_box_heading = get_field('register_box_heading');
$register_box_description = get_field('register_box_description');
$register_box_image = get_field('register_box_image');
$register_box_url = get_field('register_box_url');
//Paying Box
$paying_box_heading = get_field('paying_box_heading');
$paying_box_description = get_field('paying_box_heading');
$paying_box_image = get_field('paying_box_image');
$paying_box_url = get_field('paying_box_url');

?>
<div id="getting-started" class="row expanded gutter-small expanded">

  <?php
  $get_started_background_image = get_field('get_started_background_image');

  if( !empty($get_started_background_image) ):

    // vars
    $url = $get_started_background_image['url'];
    $alt = $get_started_background_image['alt'];

    // thumbnail
    $size = 'large';
    $thumb = $get_started_background_image['sizes'][ $size ];
    $width = $get_started_background_image['sizes'][ $size . '-width' ];
    $height = $get_started_background_image['sizes'][ $size . '-height' ];
       ?>

              <img src="<?php echo $thumb; ?>" alt="<?php echo $alt;?>" width="<?php echo $width;?>" height="<?php echo $height;?>" class="background parallax">

<?php endif; ?>


<div class="getting-started-content">

  <h2 class="text-center text-shadow"><?php the_field('get_started_heading'); ?></h2>

  <div class="small-12 medium-6 large-4 columns" data-equalizer-watch>

      <?php //apply box
       if( !empty($apply_box_image) ): ?>

  <div class="card text-center">

  <?php
      // vars
      $url = $apply_box_image['url'];
      $alt = $apply_box_image['alt'];

      // thumbnail
      $size = 'large';
      $thumb = $apply_box_image['sizes'][ $size ];
      $width = $apply_box_image['sizes'][ $size . '-width' ];
      $height = $apply_box_image['sizes'][ $size . '-height' ];
      ?>

    <img src="<?php echo $thumb; ?>" alt="<?php echo $alt;?>" width="<?php echo $width;?>" height="<?php echo $height;?>">

    <a href="<?php the_field('apply_box_url');?>">
    <div class="card-section">
      <h3><?php the_field('apply_box_heading'); ?></h3>
      <p><?php the_field('apply_box_description'); ?></p>
    </div>
    </a>


  </div>

    <?php endif; ?>

</div>

<div class="small-12 medium-6 large-4 columns" data-equalizer-watch>

<?php //Register Box
 if( !empty($register_box_image) ):  ?>

  <div class="card text-center">

<?php  // vars
  $url = $register_box_image['url'];
  $alt = $register_box_image['alt'];

  // thumbnail
  $size = 'large';
  $thumb = $register_box_image['sizes'][ $size ];
  $width = $register_box_image['sizes'][ $size . '-width' ];
  $height = $register_box_image['sizes'][ $size . '-height' ];
     ?>
              <img src="<?php echo $thumb; ?>" alt="<?php echo $alt;?>" width="<?php echo $width;?>" height="<?php echo $height;?>">

              <a href="<?php the_field('register_box_url');?>">
              <div class="card-section">
                <h3><?php the_field('register_box_heading'); ?></h3>
                <p><?php the_field('register_box_description'); ?></p>
              </div>
              </a>


            </div>

<?php endif; ?>


</div>

<div class="small-12 medium-6 large-4 columns" data-equalizer-watch>

  <?php
  //Payment Box
  if( !empty($paying_box_image) ):  ?>

    <div class="card text-center">

  <?php  // vars
    $url = $paying_box_image['url'];
    $alt = $paying_box_image['alt'];

    // thumbnail
    $size = 'large';
    $thumb = $paying_box_image['sizes'][ $size ];
    $width = $paying_box_image['sizes'][ $size . '-width' ];
    $height = $paying_box_image['sizes'][ $size . '-height' ];
  ?>
                <img src="<?php echo $thumb; ?>" alt="<?php echo $alt;?>" width="<?php echo $width;?>" height="<?php echo $height;?>">


                <a href="<?php the_field('paying_box_url');?>">
                <div class="card-section">
                  <h3><?php the_field('paying_box_heading'); ?></h3>
                  <p><?php the_field('paying_box_description'); ?></p>
                </div>
                </a>


              </div>

  <?php endif; ?>

</div>

</div>

</div>
