<!-- Global Site Tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-11698249-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments)};
  gtag('js', new Date());

  gtag('config', 'UA-11698249-1');
</script>
<?php if ( is_page('108') || $post->post_parent == '108' ) { //ACE google tracking ?>
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-100518862-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-100518862-1');
  </script>
<?php } ?>
