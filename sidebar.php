<?php
/**
 * The sidebar for pages that pulls navigation and widgets for each parent and child pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gccwp-2018
 */
 ?>
 <aside class="small-12 medium-4 large-3 gutter-small right page-nav">

    <?php //get page widgets

    //admissions

      if ( is_page('24') || $post->post_parent == '24' ) {
        //custom department widgets
          dynamic_sidebar( 'admissions-widgets' );
        }

    //academic center for excellence sidebar

        if ( is_page('108') || $post->post_parent == '108' ) {
        //custom department widgets
          dynamic_sidebar( 'tutoring-services-widgets' );
   }

   //about germanna

   if ( is_page('108') || $post->post_parent == '108' ) {
   //custom department widgets
     dynamic_sidebar( 'about-widgets' );
}


   //academics

   if ( is_page('5761') || $post->post_parent == '5761' ) {
   //custom department widgets
     dynamic_sidebar( 'academic-widgets' );
}


   //acc

   if ( is_page('27') || $post->post_parent == '27' ) {
   //custom department widgets
     dynamic_sidebar( 'acc-widgets' );
}


   //advising

   if ( is_page('9124') || $post->post_parent == '9124' ) {
   //custom department widgets
     dynamic_sidebar( 'advising-widgets' );
}


   //alumni

   if ( is_page('20401') || $post->post_parent == '20401' ) {
   //custom department widgets
     dynamic_sidebar( 'alumni-widgets' );
}

   //archive

   if ( is_archive() ) {
   //custom department widgets
     dynamic_sidebar( 'archive-widgets' );
}


   //awards

   if ( is_page('35') || $post->post_parent == '35' ) {
   //custom department widgets
     dynamic_sidebar( 'awards-widgets' );
}


   //bookstore

   if ( is_page('36') || $post->post_parent == '36' ) {
   //custom department widgets
     dynamic_sidebar( 'bookstore-widgets' );
}


   //business office

   if ( is_page('37') || $post->post_parent == '37' ) {
   //custom department widgets
     dynamic_sidebar( 'business-office-widgets' );
}


   //career services

   if ( is_page('177') || $post->post_parent == '177' ) {
   //custom department widgets
     dynamic_sidebar( 'career-services-widgets' );
}


   //career transfer

   if ( is_page('6954') || $post->post_parent == '6954' ) {
   //custom department widgets
     dynamic_sidebar( 'career-center-widgets' );
}


   //catalog

   if ( is_page('11035') || $post->post_parent == '11035' ) {
   //custom department widgets
     dynamic_sidebar( 'catalog-widgets' );
}


   //ccs

   if ( is_page('108') || $post->post_parent == '108' ) {
   //custom department widgets
     dynamic_sidebar( 'ccs-widgets' );
}


   //college board

   if ( is_page('108') || $post->post_parent == '108' ) {
   //custom department widgets
     dynamic_sidebar( 'college-board-widgets' );
}


   //college police

   if ( is_page('42') || $post->post_parent == '42' ) {
   //custom department widgets
     dynamic_sidebar( 'college-police-widgets' );
}


   //contact

   if ( is_page('18651') || $post->post_parent == '18651' ) {
   //custom department widgets
     dynamic_sidebar( 'contact-widgets' );
}


   //counseling

   if ( is_page('44') || $post->post_parent == '44' ) {
   //custom department widgets
     dynamic_sidebar( 'counseling-widgets' );
}


   //default

   if ( is_page() ) {
   //custom department widgets
     dynamic_sidebar( 'sidebar-widgets' );
}


   ///dental

   if ( is_page('114') || $post->post_parent == '114' ) {
   //custom department widgets
     dynamic_sidebar( 'dental-widgets' );
}


   //disability services

   if ( is_page('47') || $post->post_parent == '47' ) {
   //custom department widgets
     dynamic_sidebar( 'disability-services-widgets' );
}


   //distance learning

   if ( is_page('48') || $post->post_parent == '48' ) {
   //custom department widgets
     dynamic_sidebar( 'distance-learning-widgets' );
}


   //diversity

   if ( is_page('12255') || $post->post_parent == '12255' ) {
   //custom department widgets
     dynamic_sidebar( 'diversity-widgets' );
}

   //dual enrollment

   if ( is_page('49') || $post->post_parent == '49' ) {
   //custom department widgets
     dynamic_sidebar( 'dual-enrollment-widget' );
}


   //educational foundation

   if ( is_page('52') || $post->post_parent == '52' ) {
   //custom department widgets
     dynamic_sidebar( 'edfoundation-widgets' );
}


   //international students

   if ( is_page('24') || $post->post_parent == '24' ) {
   //custom department widgets
     dynamic_sidebar( 'admissions-widgets' );
}


   //facilities

   if ( is_page('57') || $post->post_parent == '57' ) {
   //custom department widgets
     dynamic_sidebar( 'facilities-widgets' );
}


   //faculty and staff

   if ( is_page('58') || $post->post_parent == '58' ) {
   //custom department widgets
     dynamic_sidebar( 'faculty-widgets' );
}


   //financial aid

   if ( is_page('59') || $post->post_parent == '59' ) {
   //custom department widgets
     dynamic_sidebar( 'financial-aid-widgets' );
}


   //foundation events

   if ( is_page('108') || $post->post_parent == '108' ) {
   //custom department widgets
     dynamic_sidebar( 'edfoundation-widgets' );
}


   //ged testing

   if ( is_page('62') || $post->post_parent == '62' ) {
   //custom department widgets
     dynamic_sidebar( 'testing-services-widgets' );
}


   //germanna ready

   if ( is_page('108') || $post->post_parent == '108' ) {
   //custom department widgets
     dynamic_sidebar( 'germanna-ready-widgets' );
}


   //gpta

   if ( is_page('64') || $post->post_parent == '64' ) {
   //custom department widgets
     dynamic_sidebar( 'gladys-todd-widgets' );
}

   //graduation

   if ( is_page('66') || $post->post_parent == '66' ) {
   //custom department widgets
     dynamic_sidebar( 'graduation-widgets' );
}


   //grants

   if ( is_page('108') || $post->post_parent == '108' ) {
   //custom department widgets
     dynamic_sidebar( 'grants-widgets' );
}


   //great expectations

   if ( is_page('67') || $post->post_parent == '67' ) {
   //custom department widgets
     dynamic_sidebar( 'great-expectations-widgets' );
}


   //grit workshops

   if ( is_page('108') || $post->post_parent == '108' ) {
   //custom department widgets
     dynamic_sidebar( 'grit-widgets' );
}


   //gsa

   if ( is_page('108') || $post->post_parent == '108' ) {
   //custom department widgets
     dynamic_sidebar( 'gssa-widgets' );
}


   //helpdesk

   if ( is_page('69') || $post->post_parent == '69' ) {
   //custom department widgets
     dynamic_sidebar( 'helpdesk-widgets' );
}


   //human resources

   if ( is_page('75') || $post->post_parent == '75' ) {
   //custom department widgets
     dynamic_sidebar( 'human-resources-widgets' );
}


   //institutional advancement

   if ( is_page('93') || $post->post_parent == '93' ) {
   //custom department widgets
     dynamic_sidebar( 'ie-widgets' );
}


   //inauguration

   if ( is_page('24232') || $post->post_parent == '24232' ) {
   //custom department widgets
     dynamic_sidebar( 'inauguration-widgets' );
}


   //institutional effectiveness

   if ( is_page('93') || $post->post_parent == '93' ) {
   //custom department widgets
     dynamic_sidebar( 'human-resources-widgets' );
}


   //internships

   if ( is_page('7134') || $post->post_parent == '7134' ) {
   //custom department widgets
     dynamic_sidebar( 'internship-services-widgets' );
}


   //legal (statements & policies)

   if ( is_page('12778') || $post->post_parent == '12778' ) {
   //custom department widgets
     dynamic_sidebar( 'legal-widgets' );
}


   //locations

   if ( is_page('1221') || $post->post_parent == '1221' ) {
   //custom department widgets
     dynamic_sidebar( 'about-widgets' );
}


   //marketing

   if ( is_page('79') || $post->post_parent == '79' ) {
   //custom department widgets
     dynamic_sidebar( 'marketing-widgets' );
}


   //nursing

   if ( is_page('85') || $post->post_parent == '85' ) {
   //custom department widgets
     dynamic_sidebar( 'nursing-health-widgets' );
}


   //open houses

   if ( is_page('20972') || $post->post_parent == '20972' ) {
   //custom department widgets
     dynamic_sidebar( 'open-houses-widgets' );
}


   //orientation

   if ( is_page('88') || $post->post_parent == '88' ) {
   //custom department widgets
     dynamic_sidebar( 'orientation-widgets' );
}


   //pathways

   if ( is_page('20591') || $post->post_parent == '20591' ) {
   //custom department widgets
     dynamic_sidebar( 'pathways-widgets' );
}


   //paying for college

   if ( is_page('89') || $post->post_parent == '89' ) {
   //custom department widgets
     dynamic_sidebar( 'payingforcollege-widgets' );
}


   //pta

   if ( is_page('92') || $post->post_parent == '92' ) {
   //custom department widgets
     dynamic_sidebar( 'physical-therapist-widgets' );
}


   //policies

   if ( is_page('63') || $post->post_parent == '63' ) {
   //custom department widgets
     dynamic_sidebar( 'policies-widgets' );
}


   //presidents office

   if ( is_page('94') || $post->post_parent == '94' ) {
   //custom department widgets
     dynamic_sidebar( 'policies-widgets' );
}


   //printing

   if ( is_page('96') || $post->post_parent == '96' ) {
   //custom department widgets
     dynamic_sidebar( 'presidents-office-widgets' );
}


   //professional and technical

   if ( is_page('108') || $post->post_parent == '108' ) {
   //custom department widgets
     dynamic_sidebar( 'professional-technical-widgets' );
}


   //publications

   if ( is_page('99') || $post->post_parent == '99' ) {
   //custom department widgets
     dynamic_sidebar( 'publications-widgets' );
}


   //resources / students / services and support

   if ( is_page('21833') || $post->post_parent == '21833' ) {
   //custom department widgets
     dynamic_sidebar( 'resources-widgets' );
}

   //sails

   if ( is_page('108') || $post->post_parent == '108' ) {
   //custom department widgets
     dynamic_sidebar( 'sails-widgets' );
}


   //scholars program

   if ( is_page('9106') || $post->post_parent == '9106' ) {
   //custom department widgets
     dynamic_sidebar( 'dual-enrollment-widgets' );
}


   //single

   if ( is_single( )) {
   //custom department widgets
     dynamic_sidebar( 'single-sidebar-widgets' );
}


   //student activities

   if ( is_page('104') || $post->post_parent == '104' ) {
   //custom department widgets
     dynamic_sidebar( 'student-activities-widgets' );
}


   //student development

   if ( is_page('14001') || $post->post_parent == '14001' ) {
   //custom department widgets
     dynamic_sidebar( 'student-development-widgets' );
}


   //students

   if ( is_page('20') || $post->post_parent == '20' ) {
   //custom department widgets
     dynamic_sidebar( 'students-widgets' );
}


   //technical Services

   if ( is_page('106') || $post->post_parent == '106' ) {
   //custom department widgets
     dynamic_sidebar( 'technical-services-widgets' );
}
//testing

if ( is_page('107') || $post->post_parent == '107' ) {
//custom department widgets
  dynamic_sidebar( 'testing-services-widgets' );
}


   //transfer

   if ( is_page('7059') || $post->post_parent == '7059' ) {
   //custom department widgets
     dynamic_sidebar( 'transfer-center-widgets' );
}


    //veterans

    if ( is_page('110') || $post->post_parent == '110' ) {
   //custom department widgets
      dynamic_sidebar( 'veterans-widgets' );
}


    //welcome day

    if ( is_page('108') || $post->post_parent == '108' ) {
   //custom department widgets
      dynamic_sidebar( 'welcome-day-widgets' );
}


    //workforce

    if ( is_page('108') || $post->post_parent == '108' ) {
   //custom department widgets
      dynamic_sidebar( 'workforce-widgets' );
}


    //workforce news

    if ( is_page('11656') ) {
   //custom department widgets
      dynamic_sidebar( 'workforce-widgets' );
}


 ?>





 </aside>
