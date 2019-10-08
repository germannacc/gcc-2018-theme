<?php function gcc_wp_2018_widgets_init() {
register_sidebar(array(//default sidebar widget for page.php(default template)
	'id' => 'sidebar-widgets', //used to call widget on page template.
	'name' => __( 'Sidebar', 'gcc-wp-2018' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),//shows description of widget in widget box.
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
));
register_sidebar(array(
	'id' => 'post-widgets',
	'name' => __( 'Post ', 'gcc-wp-2018' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),
	'before_widget' => '',
	'after_widget' => '',
	'before_title' => '',
	'after_title' => '',
	));
register_sidebar(array(
	'id' => 'blog-widgets',
	'name' => __( 'Blog Sidebar', 'gcc-wp-2018' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	));
register_sidebar(array(
	'id' => 'archive-widgets',
	'name' => __( 'Archive Sidebar', 'gcc-wp-2018' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	));
	register_sidebar(array(
		'id' => 'single-widgets',
		'name' => __( 'Single Sidebar', 'gcc-wp-2018' ),
		'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
));
register_sidebar(array(
	'id' => 'important-links-widgets',
	'name' => __( 'Important Links', 'gcc-wp-2018' ),
	'description' => __( 'Drag widgets to this footer container', 'gcc-wp-2018' ),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	//end footer widgets
	));
register_sidebar(array(
	'id' => 'germanna-ready-widgets',
	'name' => __( 'Are You Germanna Ready Sidebar widgets', 'gcc-wp-2018' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	));
	register_sidebar(array(
		'id' => 'about-widgets',
		'name' => __( 'About Sidebar widgets', 'gcc-wp-2018' ),
		'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	register_sidebar(array(
		'id' => 'alumni-widgets',
		'name' => __( 'Alumni Sidebar', 'gcc-wp-2018' ),
		'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
));
register_sidebar(array(
	'id' => 'acc-widgets',
	'name' => __( 'ACC Sidebar', 'gcc-wp-2018' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
));
register_sidebar(array(
	'id' => 'awards-widgets',
	'name' => __( 'Awards Sidebar', 'gcc-wp-2018' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
));
register_sidebar(array(
	'id' => 'teaching-awards-widgets',
	'name' => __( 'Teaching Awards Sidebar', 'gcc-wp-2018' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
));
register_sidebar(array(
	'id' => 'anp-awards-widgets',
	'name' => __( 'A & P Awards Sidebar', 'gcc-wp-2018' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
));
register_sidebar(array(
	'id' => 'cae-widgets',
	'name' => __( 'CAE Sidebar', 'gcc-wp-2018' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
));
register_sidebar(array(
	'id' => 'classified-awards-widgets',
	'name' => __( 'Classified Awards Sidebar', 'gcc-wp-2018' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
));
register_sidebar(array(
	'id' => 'advising-widgets',
	'name' => __( 'Advising Sidebar widgets', 'gcc-wp-2018' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
		));
register_sidebar(array(
	'id' => 'admissions-widgets',
	'name' => __( 'Admissions Sidebar widgets', 'gcc-wp-2018' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	));
register_sidebar(array(
	'id' => 'academic-widgets',
	'name' => __( 'Academic Sidebar widgets', 'gcc-wp-2018' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	));
register_sidebar(array(
	'id' => 'academic-calendar-widgets',
	'name' => __( 'Academic Calendar widgets', 'gcc-wp-2018' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	));
	register_sidebar(array(
		'id' => 'arts-sciences-widgets',
		'name' => __( 'Arts and Sciences Sidebar', 'gcc-wp-2018' ),
		'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
register_sidebar(array(
'id' => 'bookstore-widgets',
'name' => __( 'Bookstore Sidebar widgets', 'gcc-wp-2018' ),
'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),
'before_widget' => '<div class="widget">',
'after_widget' => '</div>',
'before_title' => '<h3>',
'after_title' => '</h3>',
));
register_sidebar(array(
	'id' => 'business-office-widgets',
	'name' => __( 'Business Office Sidebar widgets', 'gcc-wp-2018' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	));
	register_sidebar(array(
		'id' => 'catalog-widgets',
		'name' => __( 'Catalog Sidebar widgets', 'gcc-wp-2018' ),
		'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
		));
register_sidebar(array(
	'id' => 'college-police-widgets',
	'name' => __( 'College Police Sidebar widgets', 'gcc-wp-2018' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	));
register_sidebar(array(
	'id' => 'counseling-widgets',
	'name' => __( 'Counseling Sidebar widgets', 'gcc-wp-2018' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	));
	register_sidebar(array(
		'id' => 'career-services-widgets',
		'name' => __( 'Career Services Sidebar widgets', 'gcc-wp-2018' ),
		'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),
		'before_widget' => '<div class="widget">',
	    'after_widget' => '</div>',
	    'before_title' => '<h3>',
	    'after_title' => '</h3>',
));
register_sidebar(array(
	'id' => 'career-transfer-widgets',
	'name' => __( 'Career and Transfer Sidebar', 'gcc-wp-2018' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),
	'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
));
register_sidebar(array(
	'id' => 'dental-widgets',
	'name' => __( 'Dental Sidebar widgets', 'gcc-wp-2018' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	));
register_sidebar(array(
	'id' => 'distance-learning-widgets',
	'name' => __( 'Distance Learning Sidebar widgets', 'gcc-wp-2018' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	));
register_sidebar(array(
	'id' => 'disability-services-widgets',
	'name' => __( 'Disability Services Sidebar widgets', 'gcc-wp-2018' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	));
register_sidebar(array(
	'id' => 'diversity-widgets',
	'name' => __( 'Diversity Sidebar widgets', 'gcc-wp-2018' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	));
register_sidebar(array(
	'id' => 'dual-enrollment-widgets',
	'name' => __( 'Dual Enrollment Sidebar widgets', 'gcc-wp-2018' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	));
	register_sidebar(array(
		'id' => 'inauguration-widgets',
		'name' => __( 'Inauguration Sidebar widgets', 'gcc-wp-2018' ),
		'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
		));
register_sidebar(array(
'id' => 'edfoundation-widgets',
'name' => __( 'Educational Foundation Sidebar widgets', 'gcc-wp-2018' ),
'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),
'before_widget' => '<div class="widget">',
'after_widget' => '</div>',
'before_title' => '<h3>',
'after_title' => '</h3>',
));
register_sidebar(array(
	'id' => 'facilities-widgets',
	'name' => __( 'Facilities Sidebar widgets', 'gcc-wp-2018' ),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	));
register_sidebar(array(
	'id' => 'financial-aid-widgets',
	'name' => __( 'Financial Aid Sidebar widgets', 'gcc-wp-2018' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	));

register_sidebar(array(
	'id' => 'great-expectations-widgets',
	'name' => __( 'Great Expectation Sidebar widgets', 'gcc-wp-2018' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	));
	register_sidebar(array(
		'id' => 'gainful-employment-widgets',
		'name' => __( 'Gainful Employment Sidebar', 'gcc-wp-2018' ),
		'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
		));
register_sidebar(array(
	'id' => 'gladys-todd-widgets',
	'name' => __( 'Gladys Todd Sidebar widgets', 'gcc-wp-2018' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	));
register_sidebar(array(
	'id' => 'graduation-widgets',
	'name' => __( 'Graduation Sidebar widgets', 'gcc-wp-2018' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	));
	register_sidebar(array(
		'id' => 'grants-widgets',
		'name' => __( 'Grants Sidebar', 'gcc-wp-2018' ),
		'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
		));
register_sidebar(array(
	'id' => 'human-resources-widgets',
	'name' => __( 'Human Resources Sidebar widgets', 'gcc-wp-2018' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	));
	register_sidebar(array(
		'id' => 'helpdesk-widgets',
		'name' => __( 'Helpdesk Sidebar', 'gcc-wp-2018' ),
		'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
		));
register_sidebar(array(
	'id' => 'ie-widgets',
	'name' => __( 'Institutional Effectiveness Sidebar widgets', 'gcc-wp-2018' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	));
register_sidebar(array(
	'id' => 'internship-widgets',
	'name' => __( 'Internships Services Sidebar', 'gcc-wp-2018' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),
	'before_widget' => '<div class="widget">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
	));
	register_sidebar(array(
	'id' => 'international-education-widgets',
	'name' => __( 'International Education Sidebar', 'gcc-wp-2018' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	));
	register_sidebar(array(
	'id' => 'international-students-widgets',
	'name' => __( 'International Students Sidebar', 'gcc-wp-2018' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	));
	register_sidebar(array(
	'id' => 'location-widgets',
	'name' => __( 'Locations Sidebar', 'gcc-wp-2018' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	));
register_sidebar(array(
'id' => 'marketing-widgets',
'name' => __( 'Marketing Sidebar widgets', 'gcc-wp-2018' ),
'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),
'before_widget' => '<div class="widget">',
'after_widget' => '</div>',
'before_title' => '<h3>',
'after_title' => '</h3>',
));
register_sidebar(array(
	'id' => 'navigate-widgets',
	'name' => __( 'Navigate Sidebar widgets', 'gcc-wp-2018' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	));
register_sidebar(array(
	'id' => 'nursing-health-widgets',
	'name' => __( 'Nursing Health Sidebar widgets', 'gcc-wp-2018' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	));
register_sidebar(array(
	'id' => 'nursing-widgets',
	'name' => __( 'Nursing Sidebar widgets', 'gcc-wp-2018' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	));
register_sidebar(array(
	'id' => 'orientation-widgets',
	'name' => __( 'Orientation Sidebar widgets', 'gcc-wp-2018' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	));
register_sidebar(array(
	'id' => 'payingforcollege-widgets',
	'name' => __( 'Paying For College Sidebar widgets', 'gcc-wp-2018' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	));
register_sidebar(array(
	'id' => 'physical-therapist-widgets',
	'name' => __( 'Physical Therapist Sidebar widgets', 'gcc-wp-2018' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	));
register_sidebar(array(
	'id' => 'printing-widgets',
	'name' => __( 'Printing Sidebar widgets', 'gcc-wp-2018' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	));
register_sidebar(array(
	'id' => 'pathways-widgets',
	'name' => __( 'Pathways Sidebar widgets', 'gcc-wp-2018' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	));
register_sidebar(array(
'id' => 'publications-widgets',
'name' => __( 'Publications Sidebar widgets', 'gcc-wp-2018' ),
'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),
'before_widget' => '<div class="widget">',
'after_widget' => '</div>',
'before_title' => '<h3>',
'after_title' => '</h3>',
));
register_sidebar(array(
'id' => 'presidents-office-widgets',
'name' => __( 'Presidents Office Sidebar', 'gcc-wp-2018' ),
'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),
'before_widget' => '<div class="widget">',
'after_widget' => '</div>',
'before_title' => '<h3>',
'after_title' => '</h3>',
));
	register_sidebar(array(
		'id' => 'sails-widgets',
		'name' => __( 'Sails Sidebar widgets', 'gcc-wp-2018' ),
		'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),
		'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
		));
register_sidebar(array(
	'id' => 'scholars-widgets',
	'name' => __( 'Scholars Program Sidebar widgets', 'gcc-wp-2018' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	));
	register_sidebar(array(
		'id' => 'services-support-widgets',
		'name' => __( 'Services and Support Sidebar', 'gcc-wp-2018' ),
		'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
		));
	register_sidebar(array(
		'id' => 'statements-widgets',
		'name' => __( 'Statements & Policies Sidebar', 'gcc-wp-2018' ),
		'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
		));
	register_sidebar(array(
		'id' => 'student-widgets',
		'name' => __( 'Student Sidebar', 'gcc-wp-2018' ),
		'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
		));
register_sidebar(array(
	'id' => 'student-activities-widgets',
	'name' => __( 'Student Activities Sidebar widgets', 'gcc-wp-2018' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	));
register_sidebar(array(
	'id' => 'student-development-widgets',
	'name' => __( 'Student Development Sidebar widgets', 'gcc-wp-2018' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	));
register_sidebar(array(
	'id' => 'testing-services-widgets',
	'name' => __( 'Testing Services Sidebar widgets', 'gcc-wp-2018' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	));
register_sidebar(array(
	'id' => 'technical-services-widgets',
	'name' => __( 'Technical Services Sidebar widgets', 'gcc-wp-2018' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	));
	register_sidebar(array(
		'id' => 'transfer-services-widgets',
		'name' => __( 'Transfer Services Sidebar widgets', 'gcc-wp-2018' ),
		'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
		));
register_sidebar(array(
	'id' => 'tutoring-services-widgets',
	'name' => __( 'Tutoring Services Sidebar widgets', 'gcc-wp-2018' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	));
register_sidebar(array(
	'id' => 'veterans-widgets',
	'name' => __( 'Veterans Sidebar widgets', 'gcc-wp-2018' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	));
register_sidebar(array(
'id' => 'welcome-day-widgets',
'name' => __( 'Welcome Day Sidebar widgets', 'gcc-wp-2018' ),
'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),
'before_widget' => '<div class="widget">',
'after_widget' => '</div>',
'before_title' => '<h3>',
'after_title' => '</h3>',
));
register_sidebar(array(
	'id' => 'workforce-widgets',
	'name' => __( 'Workforce Sidebar widgets', 'gcc-wp-2018' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	));
register_sidebar(array(//FEATURED AREA WIDGETS
	'id' => 'highlights-widgets',
	'name' => __( 'Highlights widgets', 'gcc-wp-2018' ),
	'description' => __( 'Drag widgets to this footer container', 'gcc-wp-2018' ),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	));
register_sidebar(array(
	'id' => 'upcoming-events-widgets',
	'name' => __( 'Upcoming Events widgets', 'gcc-wp-2018' ),
	'description' => __( 'Drag widgets to this footer container', 'gcc-wp-2018' ),
	'before_widget' => '',
	'after_widget' => '',
	'before_title' => '',
	'after_title' => '',
	));
	register_sidebar(array(
		'id' => 'latest-stories-widgets',
		'name' => __( 'Latest Stories widgets', 'gcc-wp-2018' ),
		'description' => __( 'Drag widgets to this footer container', 'gcc-wp-2018' ),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => '',
		));
register_sidebar(array(
	'id' => 'upcoming-workforceevents-widgets',
	'name' => __( 'Upcoming Workforce Events widgets', 'gcc-wp-2018' ),
	'description' => __( 'Drag widgets to this footer container', 'gcc-wp-2018' ),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	));
register_sidebar(array(
	'id' => 'quicklinks-widgets',
	'name' => __( 'Quicklinks widgets', 'gcc-wp-2018' ),
	'description' => __( 'Drag widgets to this footer container', 'gcc-wp-2018' ),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	));
}
add_action( 'widgets_init', 'gcc_wp_2018_widgets_init' );