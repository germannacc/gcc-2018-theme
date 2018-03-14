<?php
 $callto_button_1_text = get_field('callto_button_1_text', 'option');
 $callto_button_1_url = get_field('callto_button_1_url', 'option');
 $callto_button_2_text = get_field('callto_button_2_text', 'option');
 $callto_button_2_url = get_field('callto_button_2_url', 'option');
 $tips_url = get_field('tips_url ', 'option');
 ?>

<div class="off-canvas position-top" id="main-menu" data-off-canvas>
  <!-- Your menu or Off-canvas content goes here -->

  <div class="row expanded branding columns" style="position: relative; height: 50px; background-color: #000000;">

  <button class="close-button" aria-label="Close menu" type="button" data-close style="right: 0; color: #ffffff; display: block; width: 100%; text-align: right; padding-right: 1rem; padding-top: .3rem; font-size: 1.2rem;">
             Close <span class="fa fa-close" aria-hidden="true"></span>
</button>

</div>


            <div class="row expanded branding columns" style="padding-bottom: 1rem;">


         <div class="small-12 medium-5 columns">

              <a href="<?php bloginfo( 'url' ); ?>" class="logo"><?php bloginfo( 'name' ); ?></a>

         </div>

         <div class="small-12 medium-5 columns" style="padding-top: 2rem;">

              <p class="tagline lead"><?php bloginfo( 'description' ); ?></p>

        </div>

        <div class="small-12 medium-2 columns">

          <?php  //function located in inc/main-navigation.php
          gcc_wp_2018_calltos(); ?>


       </div>

     </div>

     <div class="row expanded">

       <div class="button-group expanded calltos" >
        <?php if( !empty($callto_button_1_text) ): ?>
         <a href="<?php echo $callto_button_1_url; ?>" class="button primary"><?php echo $callto_button_1_text; ?></a>
        <?php endif; ?>
        <?php if( !empty($callto_button_2_text) ): ?>
         <a href="<?php echo $callto_button_2_url; ?>" class="button secondary"><?php echo $callto_button_2_text; ?></a>
        <?php endif; ?>
       </div>

   </div>

</div>
