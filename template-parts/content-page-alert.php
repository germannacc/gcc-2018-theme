
$queried_post = get_post($post_id);
$content = $queried_post->post_content;
$content = apply_filters('the_content', $content);
if ($content) {



<div class="row expanded">

  <div class='callout announcement' data-closable>
    <?php echo "$content"; ?>
    <a href='#' class='close' aria-hidden="true" role="button"><span class='icon-remove-circle'></span></a>
    <button class="close-button" aria-label="<?php esc_html_e('Dismiss alert', 'gcc-wp-2018'); ?>" type="button" data-close>
       <span aria-hidden="true">&times;</span>
   </button>
   </div>

</div>
