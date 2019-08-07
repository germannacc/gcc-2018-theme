<?php
$closing_announcement_text = get_field('closing_announcement_text', 'option');
$weather_alert_heading = get_field('weather_alert_heading', 'option');
$sign_up_for_alerts_text = get_field('sign_up_for_alerts_text', 'option');
$alerts_url = get_field('alerts_url', 'option');
//Column 1 Heading
if( !empty($closing_announcement_text) ): ?>
<div class="callout small closing hide-for-print" data-closable>
  <div class="row expanded">
    <div class="medium-8 large-9 columns ">
      <?php //Alert Text
      if( !empty($weather_alert_heading) ): ?>
      <p class="lead"><?php echo $weather_alert_heading; ?></p>
      <?php endif; ?>
      <style type="text/css">
      
      .closing p {
      padding: 0;
      margin: 0 0 15px 0;
      }
      </style>
      <p><?php echo $closing_announcement_text ?></p>
    </div>
    <div class="medium-4 large-3 columns">
      <?php //Alert Button
      if( !empty($sign_up_for_alerts_text) ): ?>
      <a href="<?php echo $alerts_url ?>" class="button hollow large expanded alert-button">
        <span class="fa fa-arrow-right" aria-hidden="true"></span>
        <?php echo $sign_up_for_alerts_text ?>
      </a>
      <?php endif; ?>
    </div>
    <div class="medium-1 large-2 columns">
      <button class="close-button" aria-label="Dismiss alert" type="button" data-close>
      <span aria-hidden="true">&times;</span>
      </button>
    </div>
  </div>
</div>
<?php endif; ?>