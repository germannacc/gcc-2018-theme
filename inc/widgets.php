<?php function gcc_wp_2018_widgets_init() {
register_sidebar(array(//default sidebar widget for page.php(default template)
	'id' => 'sidebar-widgets', //used to call widget on page template.
	'name' => __( 'Sidebar widgets', 'gcc-wp-2018' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),//shows description of widget in widget box.
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
));
register_sidebar(array(
	'id' => 'post-widgets',
	'name' => __( 'Post widgets', 'gcc-wp-2018' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),
	'before_widget' => '',
	'after_widget' => '',
	'before_title' => '',
	'after_title' => '',
	));
register_sidebar(array(
	'id' => 'blog-widgets',
	'name' => __( 'Blog Sidebar widgets', 'gcc-wp-2018' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	));
register_sidebar(array(
	'id' => 'archive-widgets',
	'name' => __( 'Archive Sidebar widgets', 'gcc-wp-2018' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	));
	register_sidebar(array(
		'id' => 'single-widgets',
		'name' => __( 'Single Sidebar widgets', 'gcc-wp-2018' ),
		'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
));
register_sidebar(array(
	'id' => 'global-widgets',
	'name' => __( 'Global Widget', 'gcc-wp-2018' ),
	'description' => __( 'Drag widgets to this footer container', 'gcc-wp-2018' ),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	));

register_sidebar(array(
	'id' => 'important-links-widgets',
	'name' => __( 'Important Links widgets', 'gcc-wp-2018' ),
	'description' => __( 'Drag widgets to this footer container', 'gcc-wp-2018' ),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	//end footer widgets
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
	'id' => 'germanna-ready-widgets',
	'name' => __( 'Are You Germanna Ready Sidebar widgets', 'gcc-wp-2018' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	));
register_sidebar(array(
	'id' => 'ase-exam-widgets',
	'name' => __( 'ASE Exam', 'gcc-wp-2018' ),
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
	'id' => 'acc-widgets',
	'name' => __( 'ACC Sidebar widgets', 'gcc-wp-2018' ),
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
	'name' => __( 'Arts and Sciences Sidebar widgets', 'gcc-wp-2018' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	));
register_sidebar(array(
	'id' => 'automotive-widgets',
	'name' => __( 'Automotive Sidebar widgets', 'gcc-wp-2018' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	));
register_sidebar(array(
	'id' => 'awards-widgets',
	'name' => __( 'Awards and Recognition Sidebar widgets', 'gcc-wp-2018' ),
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
	'id' => 'career-center-widgets',
	'name' => __( 'Career Center Sidebar widgets', 'gcc-wp-2018' ),
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
	'id' => 'college-board-widgets',
	'name' => __( 'College Board Sidebar widgets', 'gcc-wp-2018' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	));
register_sidebar(array(
	'id' => 'ccs-widgets',
	'name' => __( 'Course Content Summaries', 'gcc-wp-2018' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	));
register_sidebar(array(
	'id' => 'dental-hygiene-widgets',
	'name' => __( 'Dental Hygiene Sidebar widgets', 'gcc-wp-2018' ),
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
	'id' => 'dental-assisting-widgets',
	'name' => __( 'Dental Assisting Sidebar widgets', 'gcc-wp-2018' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	));
register_sidebar(array(
	'id' => 'developmental-studies-widgets',
	'name' => __( 'Developmental Sidebar widgets', 'gcc-wp-2018' ),
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
'id' => 'edfoundation-widgets',
'name' => __( 'Educational Foundation Sidebar widgets', 'gcc-wp-2018' ),
'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),
'before_widget' => '<div class="widget">',
'after_widget' => '</div>',
'before_title' => '<h3>',
'after_title' => '</h3>',
));
register_sidebar(array(
	'id' => 'faculty-widgets',
	'name' => __( 'Faculty & Staff Sidebar widgets', 'gcc-wp-2018' ),
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
	'id' => 'f1visa-widgets',
	'name' => __( 'F1-Visa Sidebar widgets', 'gcc-wp-2018' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	));
register_sidebar(array(
	'id' => 'gainful-employment-widgets',
	'name' => __( 'Gainful Employment Sidebar widgets', 'gcc-wp-2018' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	));
register_sidebar(array(
	'id' => 'ged-testing-widgets',
	'name' => __( 'GED Testing Sidebar widgets', 'gcc-wp-2018' ),
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
'id' => 'grants-widgets',
'name' => __( 'Grants Sidebar widgets', 'gcc-wp-2018' ),
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
	'id' => 'helpdesk-widgets',
	'name' => __( 'Helpdesk Sidebar widgets', 'gcc-wp-2018' ),
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
	'id' => 'ie-widgets',
	'name' => __( 'Institutional Effectiveness Sidebar widgets', 'gcc-wp-2018' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	));
register_sidebar(array(
'id' => 'information-session-widgets',
'name' => __( 'Information Session widgets', 'gcc-wp-2018' ),
'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),
'before_widget' => '<div class="widget">',
'after_widget' => '</div>',
'before_title' => '<h3>',
'after_title' => '</h3>',
));
register_sidebar(array(
	'id' => 'international-studies-widgets',
	'name' => __( 'International Studies Sidebar widgets', 'gcc-wp-2018' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	));
register_sidebar(array(
'id' => 'legal-widgets',
'name' => __( 'Legal Sidebar widgets', 'gcc-wp-2018' ),
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
	'id' => 'policies-widgets',
	'name' => __( 'Policies Sidebar widgets', 'gcc-wp-2018' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	));
register_sidebar(array(
	'id' => 'presidents-office-widgets',
	'name' => __( 'Presidents Office Sidebar widgets', 'gcc-wp-2018' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	));
	register_sidebar(array(
		'id' => 'presidents-elect-widgets',
		'name' => __( 'President Elect Sidebar widgets', 'gcc-wp-2018' ),
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
	'id' => 'programs-widgets',
	'name' => __( 'Programs of Study Sidebar widgets', 'gcc-wp-2018' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'gcc-wp-2018' ),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	));
register_sidebar(array(
	'id' => 'professional-technical-widgets',
	'name' => __( 'Professional Technical Studies Sidebar widgets', 'gcc-wp-2018' ),
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
'id' => 'request-info-widgets',
'name' => __( 'Request Information Sidebar widgets', 'gcc-wp-2018' ),
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
'id' => 'student-success-widgets',
'name' => __( 'Student Success widgets', 'gcc-wp-2018' ),
'description' => __( 'Drag widgets to this footer container', 'gcc-wp-2018' ),
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
add_action( 'widgets_init', 'gcc_wp_2018_widgets_init' ); ?>
