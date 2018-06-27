<?php
// Creates Recipes post type
add_action( 'init', 'create_post_type_5' );
function create_post_type_5() {
register_post_type('workforce-highlights', array(
'label' => 'Workforce Highlights',
'public' => true,
'exclude_from_search' => true,
'show_ui' => true,
'capability_type' => 'post',
'capabilities' => array(
        'publish_posts' => 'workforce_highlights',
        'edit_posts' => 'workforce_highlights',
        'edit_others_posts' => 'workforce_highlights',
        'delete_posts' => 'workforce_highlights',
        'delete_others_posts' => 'workforce_highlights',
        'read_private_posts' => 'workforce_highlights',
        'edit_post' => 'workforce_highlights',
        'delete_post' => 'workforce_highlights',
        'read_post' => 'workforce_highlights',
    ),
'hierarchical',
'rewrite' => array('slug' => 'wokforce-highlights'),
'query_var' => true,
'supports' => array(
'title',
'editor',
'excerpt',
'trackbacks' => false,
'custom-fields' => false,
'comments' => false,
'revisions' => true,
'thumbnail',
'author' => false,
'page-attributes' => false,
)
));
}
?>
