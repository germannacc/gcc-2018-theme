<?php
 $callto_button_1_text = get_field('callto_button_1_text', 'option');
 $callto_button_1_url = get_field('callto_button_1_url', 'option');
 $callto_button_2_text = get_field('callto_button_2_text', 'option');
 $callto_button_2_url = get_field('callto_button_2_url', 'option');
 $tips_url = get_field('tips_url ', 'option');
 ?>

<div class="off-canvas position-right mobile-menu" id="main-menu" data-off-canvas>
  <!-- Your menu or Off-canvas content goes here -->

<div class="row expanded columns close-mobile">

    <button class="close-button" aria-label="<?php _e('Close menu'); ?>" type="button" data-close style="right: 0; color: #ffffff; display: block; width: 100%; text-align: right; padding-right: 1rem; padding-top: .3rem; font-size: 1.2rem;">
               Close <span class="fa fa-close" aria-hidden="true"></span>
  </button>

</div>


        <div class="row expanded branding columns" style="padding-bottom: 1rem;">


         <div class="small-12 columns">

              <a href="<?php echo esc_url( home_url() )  ?>" class="logo"><?php bloginfo( 'name' ); ?></a>

         </div>

         <div class="small-12 columns tagline" style="padding-top: 2rem;">

              <p class="lead"><?php bloginfo( 'description' ); ?></p>

        </div>

        <div class="small-12 medium-12 columns">

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

   <?php
      get_template_part( 'template-parts/content', 'weather-alert-mobile' );
   ?>

   <div class="row expanded mobile-search">

     <div id="sb-search-mobile" class="sb-search">
     	<form role="search" method="get" id="searchform-mobile" action="<?php echo get_home_url(); ?>/search_gcse/">
        <input type="hidden" name="cx" value="015787986713984774933:no8dqwkyepy" title="hidden">
    			<input type="hidden" name="ie" value="utf8" title="hidden" />
    			<input type="hidden" name="oe" value="utf8" title="hidden" />
    		<input type="text" name="q" id="search" title="search input" class="sb-search-input" placeholder="<?php _e('Search Germanna...');?>'">
    		<input type=hidden name=domains value="<?php echo get_home_url();     //get the domain base for the search submit?>" title="home" />
    			<input type=hidden name=sitesearch value="<?php echo get_home_url(); //get the url base for the search submit?>" title="home"  />
    		<input id="searchsubmit" class="sb-search-submit" type="submit" value="" aria-label="<?php _e('Submit')?>">
    				 <span class="sb-icon-search"></span>
     	</form>
     </div>

   </div>

   <div class="row expanded mobile-nav">


         <?php  //function located in inc/main-navigation.php
         gcc_wp_2018_mobile_offcanvas(); ?>


  </div>

 <div class="mobile-extras">

   <?php if( !empty($tips_url) ): ?>

       <a href="<?php echo $tips_url;?>" class="tips-logo"><?php echo _e(
         'T.I.P.S.'); ?></a>

         <?php //function location in inc/social-icons.php
         gcc_wp_2018_social_icons(); ?>

  <?php endif; ?>

 </div>


</div>
