<?php
//hooks
//ccwidget shortcodes
add_action( 'init', 'gcc_wp_2018_ccwidget_shortcodes');
//career coach shortcodes
//register the shortcodes
function gcc_wp_2018_ccwidget_shortcodes() {
    //business pathways

    //[business_administration_ccwidget]
    add_shortcode( 'business_administration_ccwidget', 'business_administration_ccwidget_shortcode');     //[business_management_ccwidget]
    add_shortcode( 'business_management_ccwidget', 'business_management_ccwidget_shortcode');
    //[accounting_ccwidget]
    add_shortcode( 'accounting_ccwidget', 'accounting_ccwidget_shortcode');
    //[business_core_ccwidget]
    add_shortcode( 'business_core_ccwidget', 'business_core_ccwidget_shortcode');
    //[entrepreneurship_ccwidget]
    add_shortcode( 'entrepreneurship_ccwidget', 'entrepreneurship_ccwidget_shortcode');
    //[supervision_ccwidget]
    add_shortcode( 'supervision_ccwidget', 'supervision_ccwidget_shortcode');
    //[allied_health_ccwidget]
    add_shortcode( 'allied_health_ccwidget', 'allied_health_ccwidget_shortcode');
}
//business pathways (gcc_wp_2018_ccwidget_shortcodes)
//
//
//business administration shortcode output
function business_administration_ccwidget_shortcode ($args, $content="") {

    //setup our output variable - the emsi script
    wp_enqueue_script('ccwidget-script', 'https://s3-us-west-2.amazonaws.com/cc-widget-v2/ccWidget.js');
    wp_enqueue_style( 'ccwidget-styles', 'https://s3-us-west-2.amazonaws.com/cc-widget-v2/ccWidget.css');  ?>

    <script type="text/javascript" async>
      window.onload = function() {
        var subdomain = 'germanna'; // subdomain
        var level = 'county'; // state or county atm
        var geoids = ['11001','24009','24017','24031','24033','24037','51003','51013','51033','51047','51057','51059','51061','51065','51075','51079','51085','51087','51097','51099','51101','51107','51109','51113','51137','51145','51153','51157','51159','51177','51179','51193','51510','51600','51610','51630','51683','51685','51760']; // state id or county ids, must be an array
        var onets = ['11-1011.00', '11-1021.00', '11-2022.00', '11-3011.00', '11-3061.00', '11-3071.01', '11-3071.02', '11-3071.03', '11-9199.01', '11-9199.02', '11-9199.04', '11-9199.08', '13-1011.00', '13-1051.00', '13-1111.00', '13-1199.04', '15-1199.08', '43-1011.00', '43-6011.00', '43-9061.00']; // onets, must be an array
        var legacy = false; //specify version, must be Boolean
        ccWidget.render(subdomain, level, geoids, onets, legacy);
      }
    </script>

<?php

$output = '

<div id="cc-widget-careers"></div>
';
return $output;
}
//business management shortcode output
function business_management_ccwidget_shortcode ($args, $content="") {

    //setup our output variable - the emsi script
    wp_enqueue_script('ccwidget-script', 'https://s3-us-west-2.amazonaws.com/cc-widget-v2/ccWidget.js');
    wp_enqueue_style( 'ccwidget-styles', 'https://s3-us-west-2.amazonaws.com/cc-widget-v2/ccWidget.css');  ?>

    <script type="text/javascript" async>
      window.onload = function() {
        var subdomain = 'germanna'; // subdomain
        var level = 'county'; // state or county atm
        var geoids = ['11001','24009','24017','24031','24033','24037','51003','51013','51033','51047','51057','51059','51061','51065','51075','51079','51085','51087','51097','51099','51101','51107','51109','51113','51137','51145','51153','51157','51159','51177','51179','51193','51510','51600','51610','51630','51683','51685','51760']; // state id or county ids, must be an array
        var onets = ['11-1011.00', '11-1021.00', '11-2022.00', '11-3011.00', '11-3061.00', '11-3071.01', '11-3071.02', '11-3071.03', '11-9199.01', '11-9199.02', '11-9199.04', '11-9199.08', '13-1011.00', '13-1051.00', '13-1111.00', '13-1199.04', '15-1199.08', '43-1011.00', '43-6011.00', '43-9061.00']; // onets, must be an array
        var legacy = false; //specify version, must be Boolean
        ccWidget.render(subdomain, level, geoids, onets, legacy);
      }
    </script>

<?php

$output = '

<div id="cc-widget-careers"></div>
';
return $output;

}
//accounting shortcode output
function accounting_ccwidget_shortcode ($args, $content="") {

    //setup our output variable - the emsi script
    wp_enqueue_script('ccwidget-script', 'https://s3-us-west-2.amazonaws.com/cc-widget-v2/ccWidget.js');
    wp_enqueue_style( 'ccwidget-styles', 'https://s3-us-west-2.amazonaws.com/cc-widget-v2/ccWidget.css');  ?>

    <script type="text/javascript" async>
    window.onload = function() {
      var subdomain = 'germanna'; // subdomain
      var level = 'county'; // state or county atm
      var geoids = ['11001','24009','24017','24031','24033','24037','51003','51013','51033','51047','51057','51059','51061','51065','51075','51079','51085','51087','51097','51099','51101','51107','51109','51113','51137','51145','51153','51157','51159','51177','51179','51193','51510','51600','51610','51630','51683','51685','51760']; // state id or county ids, must be an array
      var onets = ['11-3031.01', '11-3031.02', '13-2011.01', '13-2011.02', '13-2031.00', '13-2041.00', '13-2051.00', '13-2061.00', '13-2081.00', '13-2082.00', '43-3031.00', '43-3051.00', '43-4011.00', '43-9111.00']; // onets, must be an array
      var legacy = false; //specify version, must be Boolean
      ccWidget.render(subdomain, level, geoids, onets, legacy);
    }
    </script>

<?php

$output = '

<div id="cc-widget-careers"></div>

';
return $output;
}
//business core shortcode output
function business_core_ccwidget_shortcode ($args, $content="") {

    //setup our output variable - the emsi script
    wp_enqueue_script('ccwidget-script', 'https://s3-us-west-2.amazonaws.com/cc-widget-v2/ccWidget.js');
    wp_enqueue_style( 'ccwidget-styles', 'https://s3-us-west-2.amazonaws.com/cc-widget-v2/ccWidget.css');  ?>

    <script type="text/javascript" async>
    window.onload = function() {
      var subdomain = 'germanna'; // subdomain
      var level = 'county'; // state or county atm
      var geoids = ['11001','24009','24017','24031','24033','24037','51003','51013','51033','51047','51057','51059','51061','51065','51075','51079','51085','51087','51097','51099','51101','51107','51109','51113','51137','51145','51153','51157','51159','51177','51179','51193','51510','51600','51610','51630','51683','51685','51760']; // state id or county ids, must be an array
      var onets = ['11-1011.00', '11-1021.00', '11-2022.00', '11-3011.00', '11-3051.00', '11-3071.01', '11-3071.02', '11-9021.00', '11-9151.00', '11-9199.01', '11-9199.02', '11-9199.04', '11-9199.08', '13-1051.00', '13-1111.00', '13-1121.00', '13-1199.04', '15-1199.08']; // onets, must be an array
      var legacy = false; //specify version, must be Boolean
      ccWidget.render(subdomain, level, geoids, onets, legacy);
    }
    </script>

<?php

$output = '

<div id="cc-widget-careers"></div>

';
return $output;
}
//entrepreneurship shortcode output
function entrepreneurship_ccwidget_shortcode ($args, $content="") {

    //setup our output variable - the emsi script
    wp_enqueue_script('ccwidget-script', 'https://s3-us-west-2.amazonaws.com/cc-widget-v2/ccWidget.js');
    wp_enqueue_style( 'ccwidget-styles', 'https://s3-us-west-2.amazonaws.com/cc-widget-v2/ccWidget.css');  ?>

    <script type="text/javascript" async>
    window.onload = function() {
      var subdomain = 'germanna'; // subdomain
      var level = 'county'; // state or county atm
      var geoids = ['11001','24009','24017','24031','24033','24037','51003','51013','51033','51047','51057','51059','51061','51065','51075','51079','51085','51087','51097','51099','51101','51107','51109','51113','51137','51145','51153','51157','51159','51177','51179','51193','51510','51600','51610','51630','51683','51685','51760']; // state id or county ids, must be an array
      var onets = ['11-1011.00', '11-1021.00', '11-9199.04', '13-1131.00', '13-1199.04', '13-1199.06', '13-2099.02', '15-1199.08', '15-1199.10']; // onets, must be an array
      var legacy = false; //specify version, must be Boolean
      ccWidget.render(subdomain, level, geoids, onets, legacy);
    }
    </script>

<?php

$output = '

<div id="cc-widget-careers"></div>

';
return $output;
}
//entrepreneurship shortcode output
function supervision_ccwidget_shortcode ($args, $content="") {

    //setup our output variable - the emsi script
    wp_enqueue_script('ccwidget-script', 'https://s3-us-west-2.amazonaws.com/cc-widget-v2/ccWidget.js');
    wp_enqueue_style( 'ccwidget-styles', 'https://s3-us-west-2.amazonaws.com/cc-widget-v2/ccWidget.css');  ?>

    <script type="text/javascript" async>
      window.onload = function() {
        var subdomain = 'germanna'; // subdomain
        var level = 'county'; // state or county atm
        var geoids = ['11001','24009','24017','24031','24033','24037','51003','51013','51033','51047','51057','51059','51061','51065','51075','51079','51085','51087','51097','51099','51101','51107','51109','51113','51137','51145','51153','51157','51159','51177','51179','51193','51510','51600','51610','51630','51683','51685','51760']; // state id or county ids, must be an array
        var onets = ['11-1021.00', '11-3051.00', '11-3051.01', '11-3061.00', '11-3071.03', '11-9199.04', '11-9199.08', '13-1075.00', '13-1081.00', '13-1081.02', '13-1111.00', '13-1199.04', '15-2031.00', '19-4099.01']; // onets, must be an array
        var legacy = false; //specify version, must be Boolean
        ccWidget.render(subdomain, level, geoids, onets, legacy);
      }
    </script>

<?php

$output = '

<div id="cc-widget-careers"></div>

';
return $output;
}

//Health and Sciences Pathways shortcodes
//allied Health shortcode $output

function allied_health_ccwidget_shortcode ($args, $content="") {

    //setup our output variable - the emsi script
    wp_enqueue_script('ccwidget-script', 'https://s3-us-west-2.amazonaws.com/cc-widget-v2/ccWidget.js');
    wp_enqueue_style( 'ccwidget-styles', 'https://s3-us-west-2.amazonaws.com/cc-widget-v2/ccWidget.css');  ?>

    <script type="text/javascript" async>
      window.onload = function() {
        var subdomain = 'germanna'; // subdomain
        var level = 'county'; // state or county atm
        var geoids = ['11001','24009','24017','24031','24033','24037','51003','51013','51033','51047','51057','51059','51061','51065','51075','51079','51085','51087','51097','51099','51101','51107','51109','51113','51137','51145','51153','51157','51159','51177','51179','51193','51510','51600','51610','51630','51683','51685','51760']; // state id or county ids, must be an array
        var onets = ['11-9111.00', '15-1121.01', '21-1015.00', '29-1031.00', '29-1071.00', '29-1071.01', '29-1122.00', '29-1122.01', '29-1123.00', '29-1124.00', '29-1126.00', '29-1127.00', '29-1181.00', '29-1199.05', '29-2011.00', '29-2011.02', '29-2012.00', '29-2021.00', '29-2031.00', '29-2032.00', '29-2033.00', '29-2034.00', '29-2041.00', '29-2051.00', '29-2054.00', '29-2055.00', '29-2057.00', '29-2071.00', '29-2081.00', '29-2091.00', '29-2099.01', '29-2099.05', '29-2099.06', '29-2099.07', '29-9091.00', '31-1014.00', '31-2011.00', '31-2012.00', '31-2021.00', '31-2022.00', '31-9091.00', '31-9092.00', '31-9093.00', '31-9094.00', '31-9097.00', '31-9099.01', '43-6013.00', '51-9081.00', '51-9082.00']; // onets, must be an array
        var legacy = false; //specify version, must be Boolean
        ccWidget.render(subdomain, level, geoids, onets, legacy);
      }
    </script>

<?php

$output = '

<div id="cc-widget-careers"></div>

';
return $output;
}

?>
