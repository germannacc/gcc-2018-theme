<?php 	// This theme uses wp_nav_menu() in one location.
  register_nav_menus( array(
    'main-navigation' => 'Main Navigation', // registers the menu in the WordPress admin menu editor
    'top-navigation' => 'Top Navigation',
    'quicklinks-bar' => 'Quicklinks Bar',
    'callto-buttons' => 'Callto Buttons',
    'about-menu' => 'About Menu',// registers the departmental menus in the WordPress admin menu editor
    'about-governance-menu' => 'About Governance Menu',
    'acc-menu' => 'ACC Menu',
    'academic-calendar-menu' => 'Academic Calendar Menu',
    'academic-departments-menu' => 'Academic Departments Menu',
    'ase-exam-menu' => 'ASE Exam Menu',
    'academics-menu' => 'Academics Menu',
    'administration-menu' => 'Administration Menu',
    'admissions-menu' => 'Admissions Menu',
    'admissions-sub-menu' => 'Admissions Sub Menu',
    'advising-menu' => 'Advising Menu',
    'arts-sciences-menu' => 'Arts Sciences Menu',
    'arts-menu' => 'Arts Menu',
    'automotive-menu' => 'Automotive Menu',
    'available-test-menu' => 'Available Test Menu',
    'awards-menu' => 'Awards Menu',
    'bookstore-menu' => 'Bookstore Menu',
    'business-office-menu' => 'Business Office Menu',
    'career-services-menu' => 'Career Services Menu',
    'career-transfer-menu' => 'Career Transfer Menu',
    'catalog-menu' => 'Catalog Menu',
    'class-schedule-menu' => 'Class Schedule Menu',
    'college-board-menu' => 'College Board Menu',
    'college-police-menu' => 'College Police Menu',
    'contact-menu' => 'Contact Menu',
    'counseling-menu' => 'Counseling Menu',
    'ccs-menu' => 'Course Content Summaries Menu',
    'dental-asstisting-menu' => 'Dental Assisting Menu',
    'dental-partnership-menu' => 'Dental Partnership Menu',
    'da-program-info-menu' => 'Dental Assisting Program Information Menu',
    'dental-hygiene-subnav' => 'Dental Hygiene Subnav Menu',
    'dental-assisting-subnav' => 'Dental Assisting Subnav Menu',
    'dental-subnav' => 'Dental Subnav Menu',
    'dh-important-menu' => 'DH Important Links Menu',
    'da-important-menu' => 'DA Important Links Menu',
    'dental-hygiene-menu' => 'Dental Hygiene Menu',
    'dental-menu' => 'Dental Menu',
    'dental-program-info-menu' => 'Dental Program Information Menu',
    'developmental-studies-menu' => 'Developmental Studies Menu',
    'disability-services-menu' => 'Disability Services Menu',
    'ds-newsletter-menu' => 'DS Newsletter Menu',
    'disability-services-sub-menu' => 'Disability Services Sub Menu',
    'distance-learning-menu' => 'Distance Learning Menu',
    'divisions-menu' => 'Divisions Menu',
    'diversity-menu' => 'Diversity Menu',
    'diversity-secondary-sidebar-menu' => 'Diversity Secondary Sidebar Menu',
    'dual-enrollment-menu' => 'Dual Enrollment Menu',
    'early-college-menu' => 'Early College Menu',
    'early-childhood-menu' => 'Early Childhood Menu',
    'edfoundation-menu' => 'Educational Foundation Menu',
    'engineering-technologies-menu' => 'Engineering Technologies Menu',
    'envisioning-menu' => 'Envisioning Menu',
    'f1-visa-menu' => 'F1 Visa Menu',
    'facilities-menu' => 'Facilities Menu',
    'faculty-menu' => 'Faculty Menu',
    'financial-aid-menu' => 'Financial Aid Menu',
    'footer-col3-menu' => 'Footer Col3 Menu',
    'footer-col4-menu' => 'Footer Col4 Menu',
    'facts-figures-menu' => 'Facts Figures Menu',
    'gainful-employment-menu' => 'Gainful Employment Menu',
    'ged-testing-menu' => 'GED Testing Menu',
    'germanna-ready-menu' => 'Germanna Ready Menu',
    'giving-menu' => 'Giving Menu',
    'gladys-todd-menu' => 'Gladys Todd Menu',
    'global-menu' => 'Global Menu',
    'graduation-menu' => 'Graduation Menu',
    'grants-menu' => 'Grants Menu',
    'great-expectations-menu' => 'Great Expectations Menu',
    'grit-workshops-menu' => 'GRIT Workshops Menu',
    'health-physed-menu' => 'Health Physed Menu',
    'helpdesk-menu' => 'Helpdesk Menu',
    'highlights-menu' => 'Highlights Menu',
    'history-humanities-menu' => 'History Menu',
    'human-resources-menu' => 'Human Resources Menu',
    'ie-menu' => 'IE Menu',
    'important-links-menu' => 'Important Links Menu',
    'information-sessions-menu' => 'Information Sessions Menu',
    'instruction-menu' => 'Instruction Menu',
    'international-studies-menu' => 'International Studies',
    'internships-services-menu' => 'Internships Services Menu',
    'life-sciences-menu' => 'Life Sciences Menu',
    'lyceum-menu' => 'Lyceum Menu',
    'locations-menu' => 'Locations Menu',
    'legal-menu' => 'Legal Menu',
    'marketing-menu' => 'Marketing Menu',
    'math-menu' => 'Math Menu',
    'motorcycle-transportation-menu' => 'Motorcycle Transportation Menu',
    'mobile-off-canvas' => 'Mobile',
    'mobile-quicklinks-menu' => 'Mobile Quicklinks Menu',
    'mobile-administration-menu' => 'Mobile Administration Menu',
    'mobile-main-menu' => 'Mobile Main Menu',
    'mobile-sub-menu' => 'Mobile Sub Menu',
    'nursing-health-menu' => 'Nursing Health Menu',
    'nursing-getting-started-menu' => 'Nursing Home Getting Started Menu',
    'nursing-interactive-tools-menu' => 'Nursing Home Interactive Tools Menu',
    'nursing-programs-menu' => 'Nursing Programs Menu',
    'nursing-main-navigation-menu' => 'Nursing Main Navigation Menu',
    'nursing-menu' => 'Nursing Menu',
    'nursing-program-main-menu' => 'Nursing Program Main Menu',
    'orientation-menu' => 'Orientation Menu',
    'paying-for-college-menu' => 'Paying For College Menu',
    'physical-therapist-assistant-main-menu' => 'PTA Main Menu',
    'physical-therapist-assistant-menu' => 'Physical Therapist Assistant Menu',
    'policies-menu' => 'Policies Menu',
    'publications-menu' => 'Publications Menu',
    'presidents-office-menu' => 'Presidents Office Menu',
    'printing-sidebar-menu' => 'Printing Menu',
    'professional-technical-menu' => 'Professional Technical Menu',
    'programs-menu' => 'Programs Menu',
    'psychology-menu' => 'Psychology Menu',
    'resources-menu' => 'Resources Menu',
    'sacs-menu' => 'SACS Menu',
    'scholars-program-menu' => 'Scholars Program Menu',
    'social-sciences-menu' => 'Social Sciences Menu',
    'sails-menu' => 'Sails Menu',
    'student-activities-menu' => 'Student Activities Menu',
    'student-development-menu' => 'Student Development Menu',
    'students-menu' => 'Students Menu',
    'student-success-menu' => 'Student Success Menu',
    'technical-services-menu' => 'Technical Services Menu',
    'testing-menu' => 'Testing Menu',
    'transfer-services-menu' => 'Transfer Services Menu',
    'tutoring-menu' => 'Tutoring Menu',
    'veterans-sidebar-menu' => 'Veterans Menu',
    'veterans-newsletter-menu' => 'Veterans Newsletter Menu',
    'welcome-day-menu' => 'Welcome Day Menu',
    'workforce-menu' => 'Workforce Menu',
    'workforce-home-menu' => 'Workforce Home Menu'
  ) ); ?>
