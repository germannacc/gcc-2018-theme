<?php if ( class_exists( 'WPForms_Template' ) ) :
/**
 * Teaching Faculty Rising Star Award
 * Template for WPForms.
 */
class WPForms_Template_teaching_faculty_rising_star_award extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		// Template name
		$this->name = 'Teaching Faculty Rising Star Award';

		// Template slug
		$this->slug = 'teaching_faculty_rising_star_award';

		// Template description
		$this->description = '';

		// Template field and settings
		$this->data = array (
	'field_id' => 35,
	'fields' => array (
		32 => array (
			'id' => '32',
			'type' => 'pagebreak',
			'position' => 'top',
			'indicator' => 'circles',
			'indicator_color' => '#a30936',
			'title' => 'Nominee Information',
		),
		23 => array (
			'id' => '23',
			'type' => 'checkbox',
			'label' => 'Teaching Status',
			'choices' => array (
				1 => array (
					'label' => 'Full-time',
				),
				2 => array (
					'label' => 'Part-time / Adjunct',
				),
			),
			'required' => '1',
			'choices_images_style' => 'modern',
			'input_columns' => 'inline',
		),
		14 => array (
			'id' => '14',
			'type' => 'name',
			'label' => 'Nominees Name',
			'format' => 'first-last',
			'required' => '1',
			'size' => 'large',
			'first_placeholder' => 'Enter nominees first name...',
			'last_placeholder' => 'Enter nominees last name...',
		),
		15 => array (
			'id' => '15',
			'type' => 'text',
			'label' => 'Teaching Discipline / Academic School',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Enter nominees teaching discipline or academic school..',
		),
		16 => array (
			'id' => '16',
			'type' => 'phone',
			'label' => 'Nominees Office Telephone #',
			'format' => 'us',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Enter nominees office telephone number...',
		),
		19 => array (
			'id' => '19',
			'type' => 'email',
			'label' => 'Nominees Email',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Enter nominees Germanna email...',
		),
		31 => array (
			'id' => '31',
			'type' => 'pagebreak',
			'title' => 'Your Information',
			'next' => 'Next: Your Information',
		),
		24 => array (
			'id' => '24',
			'type' => 'divider',
			'label' => 'Nomination Submitted By',
			'label_disable' => '1',
		),
		26 => array (
			'id' => '26',
			'type' => 'checkbox',
			'label' => 'Relationship to Nominee',
			'choices' => array (
				1 => array (
					'label' => 'Faculty Colleague',
				),
				2 => array (
					'label' => 'Dean / Supervisor',
				),
				3 => array (
					'label' => 'Other',
				),
			),
			'required' => '1',
			'choices_images_style' => 'modern',
			'input_columns' => 'inline',
		),
		18 => array (
			'id' => '18',
			'type' => 'name',
			'label' => 'Your Name',
			'format' => 'first-last',
			'required' => '1',
			'size' => 'large',
			'first_placeholder' => 'Enter your first name...',
			'last_placeholder' => 'Enter your last name...',
		),
		25 => array (
			'id' => '25',
			'type' => 'text',
			'label' => 'Title',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Enter your title...',
		),
		27 => array (
			'id' => '27',
			'type' => 'text',
			'label' => 'School / Department',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Enter your school or department...',
		),
		28 => array (
			'id' => '28',
			'type' => 'phone',
			'label' => 'Office Telephone #',
			'format' => 'us',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Enter your office telephone number...',
		),
		29 => array (
			'id' => '29',
			'type' => 'email',
			'label' => 'Your Email',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Enter your Germanna email...',
		),
		34 => array (
			'id' => '34',
			'type' => 'pagebreak',
			'title' => 'Reason for Nomination',
			'next' => 'Next: Reason for Nomination',
			'prev_toggle' => '1',
			'prev' => 'Previous: Nominee Information',
		),
		30 => array (
			'id' => '30',
			'type' => 'divider',
			'label' => 'Reason for Nomination',
			'label_disable' => '1',
		),
		9 => array (
			'id' => '9',
			'type' => 'textarea',
			'label' => 'Question 1',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Please provide a brief summary of the candidate\'s accomplishments, contributions, or activities that merit this award. Please identify which area(s) from among the following are most closely associated with the accomplishments, contributions, or activities.',
		),
		22 => array (
			'id' => '22',
			'type' => 'checkbox',
			'label' => 'Checkboxes',
			'choices' => array (
				1 => array (
					'label' => 'First Choice',
				),
				2 => array (
					'label' => 'Second Choice',
				),
				3 => array (
					'label' => 'Third Choice',
				),
			),
			'choices_images_style' => 'modern',
		),
		8 => array (
			'id' => '8',
			'type' => 'checkbox',
			'label' => 'Identify Areas',
			'choices' => array (
				0 => array (
					'label' => 'Superior accomplishment in teaching, research, integration of knowledge, and service',
				),
				1 => array (
					'label' => 'Selection criteria for this award are in line with the SCHEV Outstanding Faculty Award',
				),
				2 => array (
					'label' => 'The selected Germanna Outstanding Faculty will be willing to represent Germanna by submitting an application for the SCHEV Outstanding Faculty Award and the Chancellor\'s Award for Teaching Excellence',
				),
			),
			'required' => '1',
			'choices_images_style' => 'modern',
		),
		10 => array (
			'id' => '10',
			'type' => 'textarea',
			'label' => 'Question 2',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Please describe how the candidate\'s accomplishments, contributions, or activities supporting this award are innovative, distinctive, or impactful.',
		),
		11 => array (
			'id' => '11',
			'type' => 'textarea',
			'label' => 'Question 3',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Please describe how the candidate\'s accomplishments, contributions, or activities associated with this award were supportive of student learning outcomes and the college mission.',
		),
		12 => array (
			'id' => '12',
			'type' => 'textarea',
			'label' => 'Question 4',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Please describe how the candidate\'s accomplishments, contributions, or activities associated with this award were supportive of the strategic goals of the college and/or the Virginia Community College System.',
		),
		13 => array (
			'id' => '13',
			'type' => 'textarea',
			'label' => 'Question 5',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Please describe how the candidate\'s accomplishments, contributions, or activities associated with this award substantially exceeded performance expectations.',
		),
		33 => array (
			'id' => '33',
			'type' => 'pagebreak',
			'position' => 'bottom',
			'prev_toggle' => '1',
			'prev' => 'Previous: Your Information',
		),
	),
	'settings' => array (
		'form_title' => 'Teaching Faculty Rising Star Award',
		'submit_text' => 'Submit',
		'submit_text_processing' => 'Sending',
		'honeypot' => '1',
		'notification_enable' => '1',
		'notifications' => array (
			1 => array (
				'notification_name' => 'Notification 1',
				'email' => 'AwardsFaculty@germanna.edu, marketing@germanna.edu',
				'subject' => 'New Entry: Rising Star Award',
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
		'template' => 'teaching_faculty_rising_star_award',
	),
);
	}
}
new WPForms_Template_teaching_faculty_rising_star_award;
endif; ?>
