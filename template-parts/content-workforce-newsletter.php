<div class="simple-subscription-form" data-aos="fade-up" data-aos-once="true" data-aos-offset="20">
  <form action="<?php the_field('sign_up_box_action_url', 113);?>" method="post" >
    <div class="row expanded">

    <div class="small-12 large-8 columns">
    <h2><?php the_field('sign_up_box_heading', 113);?></h2>
    <p><?php the_field('sign_up_box_description', 113); ?></p>
  </div>
  <div class="small-12 large-4 columns">

    <div class="input-group">
      <span class="input-group-label">
        <i class="fa fa-envelope"></i>
      </span>
      <input class="input-group-field" type="email" placeholder="<?php esc_html_e('Email', 'gcc-wp-2018'); ?>" required>
      <input type="submit" name="go" value="<?php the_field('sign_up_box_button_text', 113)?>" title="<?php the_field('sign_up_box_button_text',  113)?>" class="submit button"/>
    </div>
     </div>

      </div>
  </form>

</div>
