<?php
/**
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package gccwp-2018
*/
?>
  <!DOCTYPE html>
  <html class="no-js" <?php language_attributes(); ?>>
    <head>
     
      <meta charset="<?php bloginfo( 'charset' ); ?>">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="profile" href="http://gmpg.org/xfn/11">
      <?php wp_head(); ?>
      
      <!-- Google Tag Manager -->
      <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-T2KLMW');</script>
      <!-- Google Tag Manager (noscript) -->
      <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T2KLMW"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
      <!-- Monsido -->
      <script type="text/javascript">
      var _monsido = _monsido || [];
      _monsido.push(['_setDomainToken', '14l5XpM9a7fdx1hVoA-QRQ']);
      _monsido.push(['_withStatistics', 'true']);
      </script>
      <script async src="//cdn.monsido.com/tool/javascripts/monsido.js"></script>

    </head>
    <body <?php body_class(); ?>>
    <div class="container">
      <div id="skip">
        <a href="#main" class="show-on-focus"><?php esc_html_e('skip to content', 'gcc-wp-2018') ?></a>
      </div>
      <?php
      get_template_part( 'template-parts/content', 'weather-alert' );
      ?>
      <div class="off-canvas-wrapper no-js">
        <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
          <?php main_menu(); //main sidebar navigation ?>
          <div class="off-canvas-content" data-off-canvas-content>
            <?php //quicklinks
            get_template_part( 'template-parts/content', 'quicklinks' );
            ?>
            <main>