<?php
//Names the page template for each section
/*
Template Name: Site Map
*/
get_header(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php
  while ( have_posts() ) : the_post(); ?>
  <?php //Page Heading
  get_template_part( 'template-parts/content', 'page-heading' );
  ?>
  <div class="row gutter-small expanded content-area">
    <div class="small-12 columns">
      <div class="entry-content" id="main" tabindex="0">
        <?php
        the_content();
        ?>
        <div class="small-12 medium-5 columns">
          <h2><?php _e('Browse sections', 'gcc_wp-2018'); ?></h2>
          <ul>
            <li><a href="<?php esc_html_e('#about-germanna', 'gcc-wp-2018'); ?>"><?php _e('About Germanna', 'gcc_wp_2018'); ?></a></li>
            <li><a href="<?php esc_html_e('#academics', 'gcc-wp-2018'); ?>"><?php _e('Academics', 'gcc_wp_2018'); ?></a></li>
            <li><a href="<?php esc_html_e('#academic-computing-center', 'gcc-wp-2018'); ?>"><?php _e('Academic Computing Center', 'gcc_wp_2018'); ?></a></li>
            <li><a href="<?php esc_html_e('#academic-advising', 'gcc-wp-2018'); ?>"><?php _e('Academic Advising', 'gcc_wp_2018'); ?></a></li>
            <li><a href="<?php esc_html_e('#academic-advising', 'gcc-wp-2018'); ?>"><?php _e('Academic Advising', 'gcc_wp_2018'); ?></a></li>
            <li><a href="<?php esc_html_e('#academic-center-for-excellence', 'gcc-wp-2018'); ?>"><?php _e('Academic Center for Excellence', 'gcc_wp_2018'); ?></a></li>
            <li><a href="<?php esc_html_e('#admissions', 'gcc-wp-2018'); ?>"><?php _e('Admissions', 'gcc_wp_2018'); ?></a></li>
            <li><a href="<?php esc_html_e('#alumni', 'gcc-wp-2018'); ?>"><?php _e('Alumni', 'gcc_wp_2018'); ?></a></li>
            <li><a href="<?php esc_html_e('#are-you-germanna-ready', 'gcc-wp-2018'); ?>"><?php _e('Are you Germanna ready?', 'gcc_wp_2018'); ?></a></li>
            <li><a href="<?php esc_html_e('#awards', 'gcc-wp-2018'); ?>"><?php _e('Awards &amp; Recognition', 'gcc_wp_2018'); ?></a></li>
            <li><a href="<?php esc_html_e('#bookstore', 'gcc-wp-2018'); ?>"><?php _e('Admissions', 'gcc_wp_2018'); ?></a></li>
            <li><a href="<?php esc_html_e('#business-office', 'gcc-wp-2018'); ?>"><?php _e('Business Office', 'gcc_wp_2018'); ?></a></li>
            <li><a href="<?php esc_html_e('#career-center', 'gcc-wp-2018'); ?>"><?php _e('Career Center', 'gcc_wp_2018'); ?></a></li>
            <li><a href="<?php esc_html_e('#career-transfer-center', 'gcc-wp-2018'); ?>"><?php _e('Career and Transfer Center', 'gcc_wp_2018'); ?></a></li>
            <li><a href="<?php esc_html_e('#college-board', 'gcc-wp-2018'); ?>"><?php _e('College Board', 'gcc_wp_2018'); ?></a></li>
            <li><a href="<?php esc_html_e('#college-police', 'gcc-wp-2018'); ?>"><?php _e('College Police Department', 'gcc_wp_2018'); ?></a></li>
            <li><a href="<?php esc_html_e('#contact-germanna', 'gcc-wp-2018'); ?>"><?php _e('Contact Us', 'gcc_wp_2018'); ?></a></li>
            <li><a href="<?php esc_html_e('#counseling', 'gcc-wp-2018'); ?>"><?php _e('Counseling', 'gcc_wp_2018'); ?></a></li>
            <li><a href="<?php esc_html_e('#dental-programs', 'gcc-wp-2018'); ?>"><?php _e('Dental programs', 'gcc_wp_2018'); ?></a></li>
            <li><a href="<?php esc_html_e('#distance-learning', 'gcc-wp-2018'); ?>"><?php _e('Distance Learning', 'gcc_wp_2018'); ?></a></li>
            <li><a href="<?php esc_html_e('#diversity', 'gcc-wp-2018'); ?>"><?php _e('Diversity &amp; Inclusion', 'gcc_wp_2018'); ?></a></li>
            <li><a href="<?php esc_html_e('#dual-enrollment', 'gcc-wp-2018'); ?>"><?php _e('Duel Enrollment', 'gcc_wp_2018'); ?></a></li>
            <li><a href="<?php esc_html_e('#educational-foundation', 'gcc-wp-2018'); ?>"><?php _e('Educational Foundation', 'gcc_wp_2018'); ?></a></li>
            <li><a href="<?php esc_html_e('#facilities', 'gcc-wp-2018'); ?>"><?php _e('Facilities', 'gcc_wp_2018'); ?></a></li>
            <li><a href="<?php esc_html_e('#faculty-staff', 'gcc-wp-2018'); ?>"><?php _e('Faculty &amp; Staff', 'gcc_wp_2018'); ?></a></li>
            <li><a href="<?php esc_html_e('#financial-aid', 'gcc-wp-2018'); ?>"><?php _e('Financial Aid', 'gcc_wp_2018'); ?></a></li>
            <li><a href="<?php esc_html_e('#ged-testing', 'gcc-wp-2018'); ?>"><?php _e('GED Testing', 'gcc_wp_2018'); ?></a></li>
            <li><a href="<?php esc_html_e('#giving', 'gcc-wp-2018'); ?>"><?php _e('Giving', 'gcc_wp_2018'); ?></a></li>
            <li><a href="<?php esc_html_e('#gpta', 'gcc-wp-2018'); ?>"><?php _e('Gladys P. Todd Academy', 'gcc_wp_2018'); ?></a></li>
            <li><a href="<?php esc_html_e('#graduation', 'gcc-wp-2018'); ?>"><?php _e('Graduation', 'gcc_wp_2018'); ?></a></li>
            <li><a href="<?php esc_html_e('#grants', 'gcc-wp-2018'); ?>"><?php _e('Grants', 'gcc_wp_2018'); ?></a></li>
            <li><a href="<?php esc_html_e('#great-expectations', 'gcc-wp-2018'); ?>"><?php _e('Great Expectations', 'gcc_wp_2018'); ?></a></li>
            <li><a href="<?php esc_html_e('#helpdesk', 'gcc-wp-2018'); ?>"><?php _e('HelpDesk', 'gcc_wp_2018'); ?></a></li>
            <li><a href="<?php esc_html_e('#human-resources', 'gcc-wp-2018'); ?>"><?php _e('Human Resources', 'gcc_wp_2018'); ?></a></li>
            <li><a href="<?php esc_html_e('#inauguration', 'gcc-wp-2018'); ?>"><?php _e('Inauguration', 'gcc_wp_2018'); ?></a></li>
            <li><a href="<?php esc_html_e('#institutional-effectiveness', 'gcc-wp-2018'); ?>"><?php _e('Institutional Effectiveness', 'gcc_wp_2018'); ?></a></li>
            <li><a href="<?php esc_html_e('#international-students', 'gcc-wp-2018'); ?>"><?php _e('International Student Admissions', 'gcc_wp_2018'); ?></a></li>
            <li><a href="<?php esc_html_e('#internship-services', 'gcc-wp-2018'); ?>"><?php _e('Internship Services', 'gcc_wp_2018'); ?></a></li>
            <li><a href="<?php esc_html_e('#locations', 'gcc-wp-2018'); ?>"><?php _e('Locations', 'gcc_wp_2018'); ?></a></li>
            <li><a href="<?php esc_html_e('#marketing', 'gcc-wp-2018'); ?>"><?php _e('Marketing &amp; Media Relations', 'gcc_wp_2018'); ?></a></li>
            <li><a href="<?php esc_html_e('#nursing', 'gcc-wp-2018'); ?>"><?php _e('Nursing &amp; Health Technologies', 'gcc_wp_2018'); ?></a></li>
            <li><a href="<?php esc_html_e('#nursing-programs', 'gcc-wp-2018'); ?>"><?php _e('Nursing programs', 'gcc_wp_2018'); ?></a></li>
            <li><a href="<?php esc_html_e('#paying-for-college', 'gcc-wp-2018'); ?>"><?php _e('Paying for College', 'gcc_wp_2018'); ?></a></li>
            <li><a href="<?php esc_html_e('#pathways-programs', 'gcc-wp-2018'); ?>"><?php _e('Pathways', 'gcc_wp_2018'); ?></a></li>
            <li><a href="<?php esc_html_e('#pta', 'gcc-wp-2018'); ?>"><?php _e('Physical Therapist Assistant', 'gcc_wp_2018'); ?></a></li>
            <li><a href="<?php esc_html_e('#presidents-office', 'gcc-wp-2018'); ?>"><?php _e('President&#8217s Office', 'gcc_wp_2018'); ?></a></li>
            <li><a href="<?php esc_html_e('#printing', 'gcc-wp-2018'); ?>"><?php _e('Printing', 'gcc_wp_2018'); ?></a></li>
            <li><a href="<?php esc_html_e('#statements-policies', 'gcc-wp-2018'); ?>"><?php _e('Statements &amp; Policies', 'gcc_wp_2018'); ?></a></li>
          </ul>
        </div>
        <div class="small-12 medium-7 columns">
          <div class="callout small primary">
            <h2 id="about-germanna"><?php _e('About Germanna', 'gcc_wp_2018'); ?></h2>
            <?php //get custom sidebar menu for section
            wp_nav_menu( array( //wp_nav_menu args, look at documentation for more options.
            'menu' => 'About Menu', 'container' => 'false', 'menu_class' => '' ) ); ?>
          </div>
          <div class="callout small primary">
            <h2 id="academics"><?php _e('Academics', 'gcc_wp_2018'); ?></h2>
            <?php //get custom sidebar menu for section
            wp_nav_menu( array( //wp_nav_menu args, look at documentation for more options.
            'menu' => 'Academics Menu', 'container' => 'false', 'menu_class' => '' ) ); ?>
          </div>
          <div class="callout small primary">
            <h2 id="academic-computing-center"><?php _e('Academic Computing Center', 'gcc_wp_2018'); ?></h2>
            <?php //get custom sidebar menu for section
            wp_nav_menu( array( //wp_nav_menu args, look at documentation for more options.
            'menu' => 'ACC Menu', 'container' => 'false', 'menu_class' => '' ) ); ?>
          </div>
          <div class="callout small primary">
            <h2 id="academic-advising"><?php _e('Academic Advising', 'gcc_wp_2018'); ?></h2>
            <?php //get custom sidebar menu for section
            wp_nav_menu( array( //wp_nav_menu args, look at documentation for more options.
            'menu' => 'Advising Menu', 'container' => 'false', 'menu_class' => '' ) ); ?>
          </div>
          <div class="callout small primary">
            <h2 id="academic-center-for-excellence"><?php _e('Academic Center for Excellence', 'gcc_wp_2018'); ?></h2>
            <?php //get custom sidebar menu for section
            wp_nav_menu( array( //wp_nav_menu args, look at documentation for more options.
            'menu' => 'Tutoring Menu', 'container' => 'false', 'menu_class' => '' ) ); ?>
          </div>
          <div class="callout small primary">
            <h2 id="admissions"><?php _e('Admissions', 'gcc_wp_2018'); ?></h2>
            <?php //get custom sidebar menu for section
            wp_nav_menu( array( //wp_nav_menu args, look at documentation for more options.
            'menu' => 'Admissions Menu', 'container' => 'false', 'menu_class' => '' ) ); ?>
          </div>
          <div class="callout small primary">
            <h2 id="alumni"><?php _e('Alumni Association', 'gcc_wp_2018'); ?></h2>
            <?php //get custom sidebar menu for section
            wp_nav_menu( array( //wp_nav_menu args, look at documentation for more options.
            'menu' => 'Alumni Menu', 'container' => 'false', 'menu_class' => '' ) ); ?>
          </div>
          <div class="callout small primary">
            <h2 id="are-you-germanna-ready"><?php _e('Are you Germanna ready?', 'gcc_wp_2018'); ?></h2>
            <?php //get custom sidebar menu for section
            wp_nav_menu( array( //wp_nav_menu args, look at documentation for more options.
            'menu' => 'Germanna Ready Menu', 'container' => 'false', 'menu_class' => '' ) ); ?>
          </div>
          <div class="callout small primary">
            <h2 id="awards"><?php _e('Awards and Recognition', 'gcc_wp_2018'); ?></h2>
            <?php //get custom sidebar menu for section
            wp_nav_menu( array( //wp_nav_menu args, look at documentation for more options.
            'menu' => 'Awards Menu', 'container' => 'false', 'menu_class' => '' ) ); ?>
          </div>
          <div class="callout small primary">
            <h2 id="bookstore"><?php _e('Bookstore', 'gcc_wp_2018'); ?></h2>
            <?php //get custom sidebar menu for section
            wp_nav_menu( array( //wp_nav_menu args, look at documentation for more options.
            'menu' => 'Bookstore Menu', 'container' => 'false', 'menu_class' => '' ) ); ?>
          </div>
          <div class="callout small primary">
            <h2 id="business-office"><?php _e('Business Office', 'gcc_wp_2018'); ?></h2>
            <?php //get custom sidebar menu for section
            wp_nav_menu( array( //wp_nav_menu args, look at documentation for more options.
            'menu' => 'Business Office Menu', 'container' => 'false', 'menu_class' => '' ) ); ?>
          </div>
          <div class="callout small primary">
            <h2 id="career-center"><?php _e('Career Center', 'gcc_wp_2018'); ?></h2>
            <?php //get custom sidebar menu for section
            wp_nav_menu( array( //wp_nav_menu args, look at documentation for more options.
            'menu' => 'Career Services Menu', 'container' => 'false', 'menu_class' => '' ) ); ?>
          </div>
          <div class="callout small primary">
            <h2 id="career-transfer-center"><?php _e('Career and Transfer Center', 'gcc_wp_2018'); ?></h2>
            <?php //get custom sidebar menu for section
            wp_nav_menu( array( //wp_nav_menu args, look at documentation for more options.
            'menu' => 'Career Transfer Menu', 'container' => 'false', 'menu_class' => '' ) ); ?>
          </div>
          <div class="callout small primary">
            <h2 id="college-board"><?php _e('College Board', 'gcc_wp_2018'); ?></h2>
            <?php //get custom sidebar menu for section
            wp_nav_menu( array( //wp_nav_menu args, look at documentation for more options.
            'menu' => 'College Board Menu', 'container' => 'false', 'menu_class' => '' ) ); ?>
          </div>
          <div class="callout small primary">
            <h2 id="college-police"><?php _e('College Police Department', 'gcc_wp_2018'); ?></h2>
            <?php //get custom sidebar menu for section
            wp_nav_menu( array( //wp_nav_menu args, look at documentation for more options.
            'menu' => 'College Police Menu', 'container' => 'false', 'menu_class' => '' ) ); ?>
          </div>
          <div class="callout small primary">
            <h2 id="contact-germanna"><?php _e('Contact Germanna', 'gcc_wp_2018'); ?></h2>
            <?php //get custom sidebar menu for section
            wp_nav_menu( array( //wp_nav_menu args, look at documentation for more options.
            'menu' => 'Locations Menu', 'container' => 'false', 'menu_class' => '' ) ); ?>
          </div>
          <div class="callout small primary">
            <h2 id="counseling"><?php _e('Counseling Services', 'gcc_wp_2018'); ?></h2>
            <?php //get custom sidebar menu for section
            wp_nav_menu( array( //wp_nav_menu args, look at documentation for more options.
            'menu' => 'Counseling Menu', 'container' => 'false', 'menu_class' => '' ) ); ?>
          </div>
          <div class="callout small primary">
            <h2 id="dental-programs"><?php _e('Dental Programs', 'gcc_wp_2018'); ?></h2>
            <?php //get custom sidebar menu for section
            wp_nav_menu( array( //wp_nav_menu args, look at documentation for more options.
            'menu' => 'Dental Partnership Menu', 'container' => 'false', 'menu_class' => '' ) ); ?>
          </div>
          <div class="callout small primary">
            <h2 id="disability-services"><?php _e('Disability Services', 'gcc_wp_2018'); ?></h2>
            <?php //get custom sidebar menu for section
            wp_nav_menu( array( //wp_nav_menu args, look at documentation for more options.
            'menu' => 'Disability Services Menu', 'container' => 'false', 'menu_class' => '' ) ); ?>
          </div>
          <div class="callout small primary">
            <h2 id="distance-learning"><?php _e('Distance Learning', 'gcc_wp_2018'); ?></h2>
            <?php //get custom sidebar menu for section
            wp_nav_menu( array( //wp_nav_menu args, look at documentation for more options.
            'menu' => 'Distance Learning Menu', 'container' => 'false', 'menu_class' => '' ) ); ?>
          </div>
          <div class="callout small primary">
            <h2 id="diversity"><?php _e('Diversity &amp; Inclusion', 'gcc_wp_2018'); ?></h2>
            <?php //get custom sidebar menu for section
            wp_nav_menu( array( //wp_nav_menu args, look at documentation for more options.
            'menu' => 'Diversity Menu', 'container' => 'false', 'menu_class' => '' ) ); ?>
          </div>
          <div class="callout small primary">
            <h2 id="dual-enrollment"><?php _e('Dual Enrollment', 'gcc_wp_2018'); ?></h2>
            <?php //get custom sidebar menu for section
            wp_nav_menu( array( //wp_nav_menu args, look at documentation for more options.
            'menu' => 'Dual Enrollment Menu', 'container' => 'false', 'menu_class' => '' ) ); ?>
          </div>
          <div class="callout small primary">
            <h2 id="educational-foundation"><?php _e('Educational Foundation', 'gcc_wp_2018'); ?></h2>
            <?php //get custom sidebar menu for section
            wp_nav_menu( array( //wp_nav_menu args, look at documentation for more options.
            'menu' => 'Educational Foundation Menu', 'container' => 'false', 'menu_class' => '' ) ); ?>
          </div>
          <div class="callout small primary">
            <h2 id="facilities"><?php _e('Facilities', 'gcc_wp_2018'); ?></h2>
            <?php //get custom sidebar menu for section
            wp_nav_menu( array( //wp_nav_menu args, look at documentation for more options.
            'menu' => 'Facilities Menu', 'container' => 'false', 'menu_class' => '' ) ); ?>
          </div>
          <div class="callout small primary">
            <h2 id="faculty-staff"><?php _e('Faculty &amp; Staff', 'gcc_wp_2018'); ?></h2>
            <?php //get custom sidebar menu for section
            wp_nav_menu( array( //wp_nav_menu args, look at documentation for more options.
            'menu' => 'Faculty Menu', 'container' => 'false', 'menu_class' => '' ) ); ?>
          </div>
          <div class="callout small primary">
            <h2 id="financial-aid"><?php _e('Financial Aid', 'gcc_wp_2018'); ?></h2>
            <?php //get custom sidebar menu for section
            wp_nav_menu( array( //wp_nav_menu args, look at documentation for more options.
            'menu' => 'Financial Aid Menu', 'container' => 'false', 'menu_class' => '' ) ); ?>
          </div>
          <div class="callout small primary">
            <h2 id="ged-testing"><?php _e('GED Testing', 'gcc_wp_2018'); ?></h2>
            <?php //get custom sidebar menu for section
            wp_nav_menu( array( //wp_nav_menu args, look at documentation for more options.
            'menu' => 'GED Testing Menu', 'container' => 'false', 'menu_class' => '' ) ); ?>
          </div>
          <div class="callout small primary">
            <h2 id="giving"><?php _e('Giving', 'gcc_wp_2018'); ?></h2>
            <?php //get custom sidebar menu for section
            wp_nav_menu( array( //wp_nav_menu args, look at documentation for more options.
            'menu' => 'Giving Menu', 'container' => 'false', 'menu_class' => '' ) ); ?>
          </div>
          <div class="callout small primary">
            <h2 id="gpta"><?php _e('Gladys P. Todd Academy', 'gcc_wp_2018'); ?></h2>
            <?php //get custom sidebar menu for section
            wp_nav_menu( array( //wp_nav_menu args, look at documentation for more options.
            'menu' => 'Gladys Todd Menu', 'container' => 'false', 'menu_class' => '' ) ); ?>
          </div>
          <div class="callout small primary">
            <h2 id="graduation"><?php _e('Graduation', 'gcc_wp_2018'); ?></h2>
            <?php //get custom sidebar menu for section
            wp_nav_menu( array( //wp_nav_menu args, look at documentation for more options.
            'menu' => 'Graduation Menu', 'container' => 'false', 'menu_class' => '' ) ); ?>
          </div>
          <div class="callout small primary">
            <h2 id="grants"><?php _e('Grants', 'gcc_wp_2018'); ?></h2>
            <?php //get custom sidebar menu for section
            wp_nav_menu( array( //wp_nav_menu args, look at documentation for more options.
            'menu' => 'Grants Menu', 'container' => 'false', 'menu_class' => '' ) ); ?>
          </div>
          <div class="callout small primary">
            <h2 id="great-expectations"><?php _e('Great Expectations', 'gcc_wp_2018'); ?></h2>
            <?php //get custom sidebar menu for section
            wp_nav_menu( array( //wp_nav_menu args, look at documentation for more options.
            'menu' => 'Great Expectations Menu', 'container' => 'false', 'menu_class' => '' ) ); ?>
          </div>
          <div class="callout small primary">
            <h2 id="helpdesk"><?php _e('Help Desk', 'gcc_wp_2018'); ?></h2>
            <?php //get custom sidebar menu for section
            wp_nav_menu( array( //wp_nav_menu args, look at documentation for more options.
            'menu' => 'Helpdesk Menu', 'container' => 'false', 'menu_class' => '' ) ); ?>
          </div>
          <div class="callout small primary">
            <h2 id="human-resources"><?php _e('Human Resources', 'gcc_wp_2018'); ?></h2>
            <?php //get custom sidebar menu for section
            wp_nav_menu( array( //wp_nav_menu args, look at documentation for more options.
            'menu' => 'Human Resources Menu', 'container' => 'false', 'menu_class' => '' ) ); ?>
          </div>
          <div class="callout small primary">
            <h2 id="inauguration"><?php _e('Inauguration', 'gcc_wp_2018'); ?></h2>
            <?php //get custom sidebar menu for section
            wp_nav_menu( array( //wp_nav_menu args, look at documentation for more options.
            'menu' => 'President Elect Menu', 'container' => 'false', 'menu_class' => '' ) ); ?>
          </div>
          <div class="callout small primary">
            <h2 id="institutional-effectiveness"><?php _e('Institutional Effectiveness', 'gcc_wp_2018'); ?></h2>
            <?php //get custom sidebar menu for section
            wp_nav_menu( array( //wp_nav_menu args, look at documentation for more options.
            'menu' => 'IE Menu', 'container' => 'false', 'menu_class' => '' ) ); ?>
          </div>
          <div class="callout small primary">
            <h2 id="international-students"><?php _e('International Student Admissions', 'gcc_wp_2018'); ?></h2>
            <?php //get custom sidebar menu for section
            wp_nav_menu( array( //wp_nav_menu args, look at documentation for more options.
            'menu' => 'International Students Menu', 'container' => 'false', 'menu_class' => '' ) ); ?>
          </div>
          <div class="callout small primary">
            <h2 id="internship-services"><?php _e('Internship Services', 'gcc_wp_2018'); ?></h2>
            <?php //get custom sidebar menu for section
            wp_nav_menu( array( //wp_nav_menu args, look at documentation for more options.
            'menu' => 'Internships Services Menu', 'container' => 'false', 'menu_class' => '' ) ); ?>
          </div>
          <div class="callout small primary">
            <h2 id="locations"><?php _e('Locations', 'gcc_wp_2018'); ?></h2>
            <?php //get custom sidebar menu for section
            wp_nav_menu( array( //wp_nav_menu args, look at documentation for more options.
            'menu' => 'Locations Menu', 'container' => 'false', 'menu_class' => '' ) ); ?>
          </div>
          <div class="callout small primary">
            <h2 id="marketing"><?php _e('Marketing & Media Relations', 'gcc_wp_2018'); ?></h2>
            <?php //get custom sidebar menu for section
            wp_nav_menu( array( //wp_nav_menu args, look at documentation for more options.
            'menu' => 'Marketing Menu', 'container' => 'false', 'menu_class' => '' ) ); ?>
          </div>
          <div class="callout small primary">
            <h2 id="nursing"><?php _e('Nursing &amp; Health Technologies', 'gcc_wp_2018'); ?></h2>
            <?php //get custom sidebar menu for section
            wp_nav_menu( array( //wp_nav_menu args, look at documentation for more options.
            'menu' => 'Nursing Main Navigation Menu', 'container' => 'false', 'menu_class' => '' ) ); ?>
            <?php //get custom sidebar menu for section
            wp_nav_menu( array( //wp_nav_menu args, look at documentation for more options.
            'menu' => 'Nursing Health Menu', 'container' => 'false', 'menu_class' => '' ) ); ?>
          </div>
          <div class="callout small primary">
            <h2 id="nursing-programs"><?php _e('Nursing programs', 'gcc_wp_2018'); ?></h2>
            <?php //get custom sidebar menu for section
            wp_nav_menu( array( //wp_nav_menu args, look at documentation for more options.
            'menu' => 'Nursing Menu', 'container' => 'false', 'menu_class' => '' ) ); ?>
          </div>
          <div class="callout small primary">
            <h2 id="orientation"><?php _e('Orientation', 'gcc_wp_2018'); ?></h2>
            <?php //get custom sidebar menu for section
            wp_nav_menu( array( //wp_nav_menu args, look at documentation for more options.
            'menu' => 'Orientation Menu', 'container' => 'false', 'menu_class' => '' ) ); ?>
          </div>
          <div class="callout small primary">
            <h2 id="pathways-programs"><?php _e('Pathways', 'gcc_wp_2018'); ?></h2>
            <?php //get custom sidebar menu for section
            wp_nav_menu( array( //wp_nav_menu args, look at documentation for more options.
            'menu' => 'Pathways Menu', 'container' => 'false', 'menu_class' => '' ) ); ?>
          </div>
          <div class="callout small primary">
            <h2 id="paying-for-college"><?php _e('Paying for College', 'gcc_wp_2018'); ?></h2>
            <?php //get custom sidebar menu for section
            wp_nav_menu( array( //wp_nav_menu args, look at documentation for more options.
            'menu' => 'Paying for College Menu', 'container' => 'false', 'menu_class' => '' ) ); ?>
          </div>
          <div class="callout small primary">
            <h2 id="pta"><?php _e('Physical Therapist Assistant Program', 'gcc_wp_2018'); ?></h2>
            <?php //get custom sidebar menu for section
            wp_nav_menu( array( //wp_nav_menu args, look at documentation for more options.
            'menu' => 'PTA Main Menu', 'container' => 'false', 'menu_class' => '' ) ); ?>
          </div>
          <div class="callout small primary">
            <h2 id="presidents-office"><?php _e('President&#8217s Office', 'gcc_wp_2018'); ?></h2>
            <?php //get custom sidebar menu for section
            wp_nav_menu( array( //wp_nav_menu args, look at documentation for more options.
            'menu' => 'Presidents Office Menu', 'container' => 'false', 'menu_class' => '' ) ); ?>
          </div>
          <div class="callout small primary">
            <h2 id="printing"><?php _e('Printing', 'gcc_wp_2018'); ?></h2>
            <?php //get custom sidebar menu for section
            wp_nav_menu( array( //wp_nav_menu args, look at documentation for more options.
            'menu' => 'Printing Menu', 'container' => 'false', 'menu_class' => '' ) ); ?>
          </div>
          <div class="callout small primary">
            <h2 id="statements-policies"><?php _e('Statements &amp; Policies', 'gcc_wp_2018'); ?></h2>
            <?php //get custom sidebar menu for section
            wp_nav_menu( array( //wp_nav_menu args, look at documentation for more options.
            'menu' => 'Legal Menu', 'container' => 'false', 'menu_class' => '' ) ); ?>
          </div>
        </div>
      </div>
    </div>
    <footer class="entry-footer">
      <?php gcc_wp_2018_entry_footer(); ?>
      </footer><!-- .entry-footer -->
    </div>
    <?php endwhile; // End of the loop. ?>
  </article>
  <?php
  get_footer();