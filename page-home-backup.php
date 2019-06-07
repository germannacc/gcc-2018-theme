<?php
/**
* The template for displaying all pages
*
* This is the template that displays all pages by default.
* Please note that this is the WordPress construct of pages
* and that other 'pages' on your WordPress site may use a
* different template.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package gccwp-2018
* Template Name: Home
*/
get_header();  ?>
<?php  ?>
<div class="hero">
  <script>
  var player;
  var player2;
  function onYouTubePlayerAPIReady() {
  player = new YT.Player('player', {
  playerVars: { 'rel': 0, 'autoplay': 1, 'controls': 0,'autohide':1,'showinfo': 0, 'wmode':'opaque' },
  videoId: 'DMHhrhCyU3M',
  //suggestedQuality: 'hd720',
  events: {
  'onReady': onPlayerReady}
  });
  player2 = new YT.Player('player2', {
  player2Vars: { 'rel': 0, 'autoplay': 1, 'controls': 0,'autohide':1,'showinfo': 0, 'wmode':'opaque' },
  videoId: '8qxH3CqYVeQ',
  //suggestedQuality: 'hd720',
  events: {
  'onReady': onPlayerReady}
  });
  }
  </script>
  <div class="owl-carousel owl-theme owl-1"  data-slider-id="1">
    <div class="item">
      <div class="expanded row" id="slider-row">
        <div class="columns small-12 box-background">
          <div class="slider-text">
            <span class="text-uppercase subheader">Slider subheading</span>
            <h1 class="h1">Slider main heading</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum venenatis, erat vitae porta ornare.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum venenatis, erat vitae porta ornare.</p>
            <a href="#" type="button" class="button primary">register <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
            <a href="#" type="button" class="button primary">academic calendar <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
          </div>
          <div class="video fluid-width-video-wrapper" style="padding-top: 56.25%;">
            <div id="player"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="item">
      <div class="expanded row" id="slider-row">
        <div class="columns small-12 box-background">
          <div class="slider-text">
            <span class="text-uppercase subheader">Slider subheading</span>
            <h1 class="h1">Slider main heading</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum venenatis, erat vitae porta ornare.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum venenatis, erat vitae porta ornare.</p>
            <a href="#" type="button" class="button primary">register <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
            <a href="#" type="button" class="button primary">academic calendar <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
          </div>
          <div class="video fluid-width-video-wrapper" style="padding-top: 56.25%;">
            <div id="player2"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="owl-thumbs" data-slider-id="1">
    <button class="owl-thumb-item">
    <img src="https://78bbm3rv7ks4b6i8j3cuklc1-wpengine.netdna-ssl.com/wp-content/uploads/revslider/highlight-carousel51/student-resources-featured-image.jpg" height="100" width="150" alt="slide thumbnail" />
    </button>
    <button class="owl-thumb-item">
    <img src="https://78bbm3rv7ks4b6i8j3cuklc1-wpengine.netdna-ssl.com/wp-content/uploads/revslider/highlight-carousel51/student-resources-featured-image.jpg" height="100" width="150" alt="slide thumbnail" />
    </button>
  </div>
</div>
<?php
//get_template_part( 'template-parts/content', 'pathways' );
//get_template_part( 'template-parts/content', 'getstarted' );
//get_template_part( 'template-parts/content', 'home-video' );
get_template_part( 'template-parts/content', 'highlights' );
get_footer();