<?php
# Database Configuration
define( 'DB_NAME', 'wp_germannacc' );
define( 'DB_USER', 'germannacc' );
define( 'DB_PASSWORD', 'APxYOy1N0kXezmJE' );
define( 'DB_HOST', '127.0.0.1' );
define( 'DB_HOST_SLAVE', '127.0.0.1' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'azkad_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         'mq6|FN#z(U>h?Z@Y/$Js]D^ss#BjlHtIX5H{e4ez=7Q0@8e,b#E?G3@L)2-Zd.+h');
define('SECURE_AUTH_KEY',  'Q.KqRxS^QUQf0a;wJg@3?h3p+c<O{tXcx1tCL[J9]M}9H#]=8X&LuJEQTtzv^Q-R');
define('LOGGED_IN_KEY',    's:|)B`+dpPSs$TpH.BQIXE]Q1HdKIIq*G60.LAW3,+ZIg dZ@+v%]M%%>TRcdctF');
define('NONCE_KEY',        '&@sLrp~b#.Bo&+5-)3FDG^7[f 2uH[#`4:<jlGAU{MjHjZgq]vNyiv{>w%t.6SPw');
define('AUTH_SALT',        '$Kzb8tSE7MCCO0:wnwCJjBFIOIxd>65+M^d{ddt8`gEtuAGX/C>"elm/S1bS/^U3');
define('SECURE_AUTH_SALT', 'Qd(`y|ZP%l{6I]7.3,$vVfqelqJ18z4Swp`2c30|mfV;u!LcqxRl./aGC<pxY3oz');
define('LOGGED_IN_SALT',   'bt>!1@Hluw22Do=Alt0n]FY4Zo0R-n/135IDs@+A6yA9%Ki-jxT3?$eR!A7o/!_E');
define('NONCE_SALT',       'P"^fx=b[gI+>*FEh%B,uXkMH"g!8qW_[c2MQf:LrU@|NmTlf+GT+k!<VELh3CN:+');


# Localized Language Stuff

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'germannacc' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'PWP_ROOT_DIR', '/nas/wp' );

define( 'WPE_APIKEY', '27544d0b75b689a989f6fb99bb3551f3829e21f7' );

define( 'WPE_FOOTER_HTML', "" );

define( 'WPE_CLUSTER_ID', '111739' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_SFTP_PORT', 2222 );

define( 'WPE_LBMASTER_IP', '' );

define( 'WPE_CDN_DISABLE_ALLOWED', false );

define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', true );

define( 'FORCE_SSL_LOGIN', true );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', 5 );

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );

umask(0002);

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'www.germanna.edu', 1 => 'germannacc.wpengine.com', 2 => 'germanna.edu', );

$wpe_varnish_servers=array ( 0 => 'pod-111739', );

$wpe_special_ips=array ( 0 => '104.199.121.140', );

$wpe_ec_servers=array ( );

$wpe_largefs=array ( );

$wpe_netdna_domains=array ( 0 =>  array ( 'zone' => '78bbm3rv7ks4b6i8j3cuklc1', 'match' => 'www.germanna.edu', 'secure' => true, 'dns_check' => '0', ), );

$wpe_netdna_domains_secure=array ( 0 =>  array ( 'zone' => '78bbm3rv7ks4b6i8j3cuklc1', 'match' => 'www.germanna.edu', 'secure' => true, 'dns_check' => '0', ), );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( 'default' =>  array ( 0 => 'unix:///tmp/memcached.sock', ), );

//define( 'WP_SITEURL', 'http://www.germanna.edu' );

//define( 'WP_HOME', 'http://www.germanna.edu' );

define( 'DOMAIN_CURRENT_SITE', 'www.germanna.edu' );

define( 'WP_CACHE', TRUE );
define('WPLANG','');

# WP Engine ID


# WP Engine Settings

define('WPCF7_AUTOP', false );
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );

define( 'PATH_CURRENT_SITE', '/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');


//Disable File Edits
define( 'DISALLOW_FILE_EDIT', FALSE );//Disable File Edits
define( 'DISALLOW_FILE_EDIT', FALSE );//Disable File Edits
define( 'DISALLOW_FILE_EDIT', FALSE );

//WPO365 Plugin enable for all subsites
define( 'WPO_MU_USE_SUBSITE_OPTIONS', false ); 






















































