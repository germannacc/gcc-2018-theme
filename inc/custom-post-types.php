<?php
add_action( 'init', 'create_post_type_2' );
function create_post_type_2() {
// Creates Recipes post type
register_post_type ('alert-tickers', array(
'label' => 'Alert Tickers',
'public' => false,
'exclude_from_search' => true,
'show_ui' => true,
'capability_type' => 'post',
'menu_position' => 30,
'capabilities' => array(
        'publish_posts' => 'weather_alerts',
        'edit_posts' => 'weather_alerts',
        'edit_others_posts' => 'weather_alerts',
        'delete_posts' => 'weather_alerts',
        'delete_others_posts' => 'weather_alerts',
        'read_private_posts' => 'weather_alerts',
        'edit_post' => 'weather_alerts',
        'delete_post' => 'weather_alerts',
        'read_post' => 'weather_alerts',
 ),
'hierarchical',
'rewrite' => array('slug' => 'alert-tickers'),
'query_var' => true,
'supports' => array(
'title',
'editor',
'excerpt' => false,
'trackbacks' => true,
'custom-fields' => false,
'comments' => false,
'revisions' => true,
'thumbnail' =>false,
'author',
'page-attributes' => true,
)
)
);
}
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
