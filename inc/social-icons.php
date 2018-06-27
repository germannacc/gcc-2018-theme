<?php
function gcc_wp_2018_social_icons() {

  $facebook_id = get_field('facebook_id', 'option');
  $twitter_id = get_field('twitter_id', 'option');
  $instagram_id = get_field('instagram_id', 'option');
  $youtube_id = get_field('youtube_id', 'option');
  $flickr_id = get_field('flickr_id', 'option');
  $rss_feed_id = get_field('rss_feed_id', 'option');  ?>

  <ul class="menu social-icons">

     <?php if( !empty($facebook_id) ): ?>
     <li><a href="https://www.facebook.com/<?php echo $facebook_id; ?>"><span class="fa fa-facebook-f" aria-hidden="true"><span class="icon-text"><?php _e('Facebook', 'gcc-wp-2018');?></span></span></a></li>
     <?php endif; ?>
      <?php if( !empty($twitter_id) ): ?>
    <li><a href="https://twitter.com/<?php echo $twitter_id; ?>"><span class="fa fa-twitter"  aria-hidden="true"><span class="icon-text"><?php _e('Twitter', 'gcc-wp-2018');?></span></span></a></li>
      <?php endif; ?>
      <?php if( !empty($instagram_id) ): ?>
    <li><a href="https://www.instagram.com/<?php echo $instagram_id; ?>"><span class="fa fa-instagram"  aria-hidden="true"><span class="icon-text"><?php _e('Instagram', 'gcc-wp-2018');?></span></span></a></li>
      <?php endif; ?>
      <?php if( !empty($youtube_id) ): ?>
    <li><a href="https://www.youtube.com/user/<?php echo $youtube_id; ?>"><span class="fa fa-youtube"  aria-hidden="true"><span class="icon-text"><?php _e('Youtube', 'gcc-wp-2018');?></span></span></a></li>
      <?php endif; ?>
      <?php if( !empty($flickr_id) ): ?>
    <li><a href="https://www.flickr.com/photos/<?php echo $flickr_id; ?>"><span class="fa fa-flickr"  aria-hidden="true"><span class="icon-text"><?php _e('Flickr', 'gcc-wp-2018');?></span></span></a></li>
      <?php endif; ?>
      <?php if( !empty($rss_feed_id) ): ?>
    <li><a href="http://feeds.feedburner.com/<?php echo $rss_feed_id; ?>"><span class="fa fa-rss"  aria-hidden="true"><span class="icon-text"><?php _e('RSS Feed', 'gcc-wp-2018');?></span></span></a></li>
      <?php endif; ?>
  </ul>

<?php } add_action('gcc_wp_2018', 'gcc_wp_2018_social_icons');?>
