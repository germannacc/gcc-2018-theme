<?php
//create line break on pages.
function add_linebreak_shortcode() {
return '<br />';
}
add_shortcode('br', 'add_linebreak_shortcode' );
