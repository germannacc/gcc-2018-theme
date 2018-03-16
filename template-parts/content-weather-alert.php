<?php
  $closing_announcement_text = get_field('closing_announcement_text', 'option');
  $weather_alert_heading = get_field('weather_alert_heading', 'option');
  $sign_up_for_alerts_text = get_field('sign_up_for_alerts_text', 'option');
  $alerts_url = get_field('alerts_url', 'option');
?>

<?php //Column 1 Heading
if( !empty($closing_announcement_text) ): ?>

<div class="callout closing hide-for-small-only hide-for-medium-only" data-closable>
  <div class="row expanded gutter-small">

      <div class="medium-9 columns">

        <?php //Alert Text
        if( !empty($weather_alert_heading) ): ?>
        <p class="lead"><?php echo $weather_alert_heading; ?></p>
        <?php endif; ?>

          <p><?php echo $closing_announcement_text ?></p>

      </div>

      <div class="medium-3 columns">

        <?php //Alert Button
        if( !empty($sign_up_for_alerts_text) ): ?>

        <a href="<?php echo $alerts_url ?>" class="button hollow large">
          <span class="fa fa-arrow-right" aria-hidden="true"></span>
          <?php echo $sign_up_for_alerts_text ?>
        </a>

          <?php endif; ?>

      </div>

   </div>

  <button class="close-button" aria-label="Dismiss alert" type="button" data-close>
    <span aria-hidden="true">&times;</span>
  </button>

</div>
<?php endif; ?>
