<?php
$closing_announcement_text = get_field('closing_announcement_text', 'option');
$weather_alert_heading = get_field('weather_alert_heading', 'option');
$sign_up_for_alerts_text = get_field('sign_up_for_alerts_text', 'option');
$alerts_url = get_field('alerts_url', 'option');
//Column 1 Heading
if( !empty($closing_announcement_text) ): ?>
<div id="closeAnnouncement" class="callout small closing hide-for-print" data-closable>
  <div class="row expanded">
    <div class="small-11 columns ">
      <?php //Alert Text
      if( !empty($weather_alert_heading) ): ?>
      <p><?php echo $closing_announcement_text ?> <a href="<?php the_field( 'alerts_url', 'options' ); ?>"><?php the_field( 'sign_up_for_alerts_text', 'options' ); ?></a></p>
      <?php endif; ?>
    </div>
    <div class="small-2 columns">
      <button id="closeButton" class="close-button-alert" aria-label="Dismiss alert" type="button" data-close>
      <span aria-hidden="true">&times;</span>
      </button>
    </div>
  </div>
</div>
<?php endif; ?>