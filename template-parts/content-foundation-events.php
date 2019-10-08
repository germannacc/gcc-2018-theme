<div class="columns small-12 medium-9">
  <div class="entry-content">
    <?php
    the_content( sprintf(
    wp_kses(
    /* translators: %s: Name of current post. Only visible to screen readers */
    __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'gcc-wp-2018' ),
    array(
    'span' => array(
    'class' => array(),
    ),
    )
    ),
    get_the_title()
    )
    ); ?>
    <?php
    $event_description = get_field('event_description');
    $event_image = get_field('event_image');
    $event_date = get_field('event_date');
    $event_time = get_field('event_time');
    $event_location = get_field('event_location');
    $event_address = get_field('event_address');
    $event_ticket_price = get_field('event_ticket_price');
    $event_contact_phone = get_field('event_contact_phone');
    $event_contact_email = get_field('event_contact_email');
    $event_extra_info = get_field('event_extra_info');
    $event_button_url = get_field('event_button_url');
    $event_button_text = get_field('event_button_text');
    $purchase_tickets_online_url = get_field('purchase_tickets_online_url');
    $purchase_tickets_online_text = get_field('purchase_tickets_online_text');
    ?>
    <p>
      <?php the_field('general_description'); ?>
    </p>
    <div class="callout primary small">
      <?php the_title('<h3>', '</h3>') ?>
      <?php if ( !empty($event_image)) : ?>
      <img src="<?php echo $event_image['url']; ?>" alt="<?php echo $event_image['alt']; ?>"  style="margin-bottom: 20px; width: 100%;"/>
      <?php endif ?>
      <p><span class="fa fa-compass" aria-hidden="true" aria-label="location"></span> <?php echo $event_location; ?></p>
      <p><span class="fa fa-calendar" aria-hidden="true" aria-label="event date"></span> <?php echo $event_date; ?></p>
      <p><span class="fa fa-clock-o" aria-hidden="true" aria-label="event time"></span> <?php echo $event_time; ?></p>
      <p><span class="fa fa-map-marker" aria-hidden="true" aria-label="event address"></span> <?php echo $event_address; ?></p>
      <p><span class="fa fa-dollar" aria-hidden="true" aria-label="event price"></span><?php echo $event_ticket_price; ?></p>
      <div class="button-group">
        <a class="button primary" href="<?php echo $event_button_url; ?>" style="margin-right: 20px;"><?php echo $event_button_text; ?></a>
        <a class="button primary" href="<?php echo $purchase_tickets_online_url; ?>" ><?php echo $purchase_tickets_online_text; ?></a>
      </div>
    </div>
    <?php the_field('event_extra_info'); ?>
    <!--end page content-->
  </div>
</div>