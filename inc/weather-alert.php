<?php

function gcc_wp_2018_weather_alerts() {

  $closing_announcement_text = get_field('closing_announcement_text', 'option');
  $weather_alert_heading = get_field('weather_alert_heading', 'option');
  $sign_up_for_alerts_text = get_field('sign_up_for_alerts_text', 'option');
  $alerts_url = get_field('alerts_url', 'option');

//Column 1 Heading
if( !empty($closing_announcement_text) ): ?>

<div class="callout small closing" data-closable>
  <div class="row expanded">

      <div class="medium-7 large-8 columns gutter-small">

        <?php //Alert Text
        if( !empty($weather_alert_heading) ): ?>
        <p class="lead"><?php the_field('weather_alert_heading'); ?></p>
        <?php endif; ?>

        <p><?php the_field('closing_announcement_text'); ?></p>

      </div>

      <div class="medium-4 large-3 columns gutter-small">

        <?php //Alert Button
        if( !empty($sign_up_for_alerts_text) ): ?>

        <a href="<?php the_field ('$alerts_url'); ?>" class="button hollow large expanded">
          <span class="fa fa-arrow-right" aria-hidden="true"></span>
          <?php the_field ('sign_up_for_alerts_text'); ?>
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

}
?>
