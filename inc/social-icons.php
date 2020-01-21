<?php
function gcc_wp_2018_social_icons() {
?>
  <ul class="social-icons">

     <li><a href="https://www.facebook.com/<?php the_field('facebook_id', 'option'); ?>"><span class="fa fa-2x fa-facebook-f" aria-hidden="true"><span class="icon-text"><?php _e('Facebook', 'gcc-wp-2018');?></span></span></a></li>

    <li><a href="https://twitter.com/<?php the_field('twitter_id', 'option'); ?>"><span class="fa  fa-2x fa-twitter"  aria-hidden="true"><span class="icon-text"><?php _e('Twitter', 'gcc-wp-2018');?></span></span></a></li>

    <li><a href="https://www.instagram.com/<?php the_field('instagram_id', 'option'); ?>"><span class="fa  fa-2x fa-instagram"  aria-hidden="true"><span class="icon-text"><?php _e('Instagram', 'gcc-wp-2018');?></span></span></a></li>

    <li><a href="https://www.youtube.com/user/<?php the_field('youtube_id', 'option'); ?>"><span class="fa  fa-2x fa-youtube"  aria-hidden="true"><span class="icon-text"><?php _e('Youtube', 'gcc-wp-2018');?></span></span></a></li>

    <li><a href="https://www.flickr.com/photos/<?php the_field('flickr_id', 'option'); ?>"><span class="fa  fa-2x fa-flickr"  aria-hidden="true"><span class="icon-text"><?php _e('Flickr', 'gcc-wp-2018');?></span></span></a></li>

    <li><a href="https://www.linkedin.com/school/<?php the_field('linkedin_id', 'option'); ?>"><span class="fa  fa-2x fa-linkedin"  aria-hidden="true"><span class="icon-text"><?php _e('LinkedIn', 'gcc-wp-2018');?></span></span></a></li>

  </ul>
<?php }
add_action('gcc-wp-2018', 'gcc_wp_2018_social_icons');