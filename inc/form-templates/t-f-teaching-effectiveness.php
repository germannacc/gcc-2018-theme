<?php if ( class_exists( 'WPForms_Template' ) ) :
/**
 * Teaching Faculty Teaching Effectiveness
 * Template for WPForms.
 */
class WPForms_Template_teaching_faculty_teaching_effectiveness extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		// Template name
		$this->name = 'Teaching Faculty Teaching Effectiveness';

		// Template slug
		$this->slug = 'teaching_faculty_teaching_effectiveness';

		// Template description
		$this->description = '';

		// Template field and settings
		$this->data = array (
	'field_id' => 40,
	'fields' => array (
		37 => array (
			'id' => '37',
			'type' => 'pagebreak',
			'position' => 'top',
			'indicator' => 'circles',
			'indicator_color' => '#a30936',
			'title' => 'Nominee Information',
		),
		24 => array (
			'id' => '24',
			'type' => 'divider',
			'label' => 'Nominee Information',
			'label_disable' => '1',
		),
		26 => array (
			'id' => '26',
			'type' => 'checkbox',
			'label' => 'Teaching Status',
			'choices' => array (
				1 => array (
					'label' => 'Full-time',
				),
				2 => array (
					'label' => 'Part-time/Adjunct',
				),
			),
			'required' => '1',
			'choices_images_style' => 'modern',
			'input_columns' => 'inline',
		),
		20 => array (
			'id' => '20',
			'type' => 'name',
			'label' => 'Nominee Name',
			'format' => 'first-last',
			'required' => '1',
			'size' => 'large',
			'first_placeholder' => 'Enter your first name...',
			'last_placeholder' => 'Enter your last name...',
		),
		1 => array (
			'id' => '1',
			'type' => 'email',
			'label' => 'Teaching Discipline / Academic School',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Enter nominees teaching discipline or academic school...',
		),
		27 => array (
			'id' => '27',
			'type' => 'phone',
			'label' => 'Nominee Office Telephone #',
			'format' => 'us',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Enter nominees office telephone number...',
		),
		28 => array (
			'id' => '28',
			'type' => 'email',
			'label' => 'Nominee Email',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Enter nominees Germanna email...',
		),
		36 => array (
			'id' => '36',
			'type' => 'pagebreak',
			'title' => 'Your Information',
			'next' => 'Next: Your Information',
		),
		25 => array (
			'id' => '25',
			'type' => 'divider',
			'label' => 'Nomination Submitted By',
			'label_disable' => '1',
		),
		29 => array (
			'id' => '29',
			'type' => 'checkbox',
			'label' => 'Teaching Status',
			'choices' => array (
				1 => array (
					'label' => 'Faculty Colleague',
				),
				2 => array (
					'label' => 'Dean / Supervisor',
				),
				4 => array (
					'label' => 'Other',
				),
			),
			'required' => '1',
			'choices_images_style' => 'modern',
			'input_columns' => 'inline',
		),
		30 => array (
			'id' => '30',
			'type' => 'name',
			'label' => 'Your Name',
			'format' => 'first-last',
			'required' => '1',
			'size' => 'large',
			'first_placeholder' => 'Enter your first name...',
			'last_placeholder' => 'Enter your last name...',
		),
		31 => array (
			'id' => '31',
			'type' => 'email',
			'label' => 'Your Title',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Enter your title...',
		),
		32 => array (
			'id' => '32',
			'type' => 'email',
			'label' => 'School / Department',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Enter your school or department...',
		),
		33 => array (
			'id' => '33',
			'type' => 'phone',
			'label' => 'Your Office Telephone # ',
			'format' => 'us',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Enter your office telephone number...',
		),
		34 => array (
			'id' => '34',
			'type' => 'email',
			'label' => 'Your Email',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Enter your Germanna email...',
		),
		39 => array (
			'id' => '39',
			'type' => 'pagebreak',
			'title' => 'Reason for Nomination',
			'next' => 'Next: Reason for Nomination',
			'prev_toggle' => '1',
			'prev' => 'Previous: Nominee Information',
		),
		35 => array (
			'id' => '35',
			'type' => 'divider',
			'label' => 'Reason for Nomination',
			'label_disable' => '1',
		),
		2 => array (
			'id' => '2',
			'type' => 'textarea',
			'label' => 'Question 1',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Please provide a brief summary of the candidate\'s accomplishments, contributions, or activities that merit this award. Please identify which area(s) from among the following are most closely associated with the accomplishments, contributions, or activities.',
		),
		15 => array (
			'id' => '15',
			'type' => 'radio',
			'label' => 'Identify Areas',
			'choices' => array (
				1 => array (
					'label' => 'Instructional Methodology',
				),
				2 => array (
					'label' => 'Student Achievement and Success',
				),
				3 => array (
					'label' => 'Student Engagement',
				),
				4 => array (
					'label' => 'Learning Outcomes Assessment',
				),
				5 => array (
					'label' => 'Innovative Use of Instructional Technology',
				),
				6 => array (
					'default' => '1',
					'label' => 'Offering a course in a new delivery modality (e.g. online)',
				),
			),
			'choices_images_style' => 'modern',
			'css' => 'wpforms-one-half',
		),
		16 => array (
			'id' => '16',
			'type' => 'textarea',
			'label' => 'Question 2',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Please describe how the candidate\'s accomplishments, contributions, or activities supporting this award are innovative, distinctive, or impactful.',
		),
		17 => array (
			'id' => '17',
			'type' => 'textarea',
			'label' => 'Question 3',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Please describe how the candidate\'s accomplishments, contributions, or activities associated with this award were supportive of student learning outcomes and the college mission.',
		),
		18 => array (
			'id' => '18',
			'type' => 'textarea',
			'label' => 'Question 4',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Please describe how the candidate\'s accomplishments, contributions, or activities associated with this award were supportive of the strategic goals of the college and/or the Virginia Community College System.',
		),
		19 => array (
			'id' => '19',
			'type' => 'textarea',
			'label' => 'Question 5',
			'size' => 'large',
			'placeholder' => 'Please describe how the candidate\'s accomplishments, contributions, or activities associated with this award substantially exceeded performance expectations.',
		),
		38 => array (
			'id' => '38',
			'type' => 'pagebreak',
			'position' => 'bottom',
			'prev_toggle' => '1',
			'prev' => 'Previous: Your Information',
		),
	),
	'settings' => array (
		'form_title' => 'Teaching Faculty Teaching Effectiveness',
		'submit_text' => 'Submit',
		'submit_text_processing' => 'Sending...',
		'honeypot' => '1',
		'notification_enable' => '1',
		'notifications' => array (
			1 => array (
				'notification_name' => 'Default Notification',
				'email' => 'AwardsFaculty@germanna.edu, marketing@germanna.edu',
				'subject' => 'New Entry: Teaching Effectiveness',
				'sender_name' => 'Germanna Community College',
				'sender_address' => 'No_Reply_Germanna@germanna.edu',
				'message' => '{all_fields}',
			),
		),
		'confirmations' => array (
			1 => array (
				'name' => 'Default Confirmation',
				'type' => 'message',
				'message' => '<p>Thank you for making a nomination.</p>',
				'message_scroll' => '1',
				'page' => '25',
			),
		),
	),
	'meta' => array (
		'template' => 'teaching_faculty_teaching_effectiveness',
	),
);
	}
}
new WPForms_Template_teaching_faculty_teaching_effectiveness;
endif; ?>
