<div class="simple-subscription-form">
  <form action="<?php the_field('sign_up_box_action_url', 113);?>" method="post" >
    <div class="row expanded">
        
        <h2><?php the_field('sign_up_box_heading', 113);?></h2>
        <p><?php the_field('sign_up_box_description', 113); ?></p>

        <div class="input-group">
          <span class="input-group-label">
            <span class="fa fa-envelope"></span>
          </span>
          <input class="input-group-field" type="email" placeholder="<?php esc_html_e('Email', 'gcc-wp-2018'); ?>" required>
          <input type="submit" name="go" value="<?php the_field('sign_up_box_button_text', 113)?>" title="<?php the_field('sign_up_box_button_text',  113)?>" class="button secondary"/>
      </div>
    </div>
  </form>
</div>