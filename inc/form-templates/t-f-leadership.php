<?php if ( class_exists( 'WPForms_Template' ) ) :
/**
 * Teaching Faculty Leadership Award Form
 * Template for WPForms.
 */
class WPForms_Template_teaching_faculty_leadership_award_form extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		// Template name
		$this->name = 'Teaching Faculty Leadership Award Form';

		// Template slug
		$this->slug = 'teaching_faculty_leadership_award_form';

		// Template description
		$this->description = '';

		// Template field and settings
		$this->data = array (
	'field_id' => 33,
	'fields' => array (
		29 => array (
			'id' => '29',
			'type' => 'pagebreak',
			'position' => 'top',
			'indicator' => 'circles',
			'indicator_color' => '#a30936',
			'title' => 'Nominee Information',
		),
		19 => array (
			'id' => '19',
			'type' => 'divider',
			'label' => 'Nominee Information',
			'label_disable' => '1',
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
					'label' => 'Part-time/Adjunct',
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
		3 => array (
			'id' => '3',
			'type' => 'text',
			'label' => 'Teaching Discipline / Academic School',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Enter nominees teaching discipline or academic school...',
		),
		15 => array (
			'id' => '15',
			'type' => 'phone',
			'label' => 'Nominees Office Telephone #',
			'format' => 'us',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Enter nominees office telephone number...',
		),
		17 => array (
			'id' => '17',
			'type' => 'email',
			'label' => 'Nominees Email',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Enter nominees Germanna email...',
		),
		28 => array (
			'id' => '28',
			'type' => 'pagebreak',
			'title' => 'Your Information',
			'next' => 'Next: Your Information',
		),
		22 => array (
			'id' => '22',
			'type' => 'divider',
			'label' => 'Nomination Submitted By',
			'label_disable' => '1',
		),
		32 => array (
			'id' => '32',
			'type' => 'checkbox',
			'label' => 'Relationship to Nominee',
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
		16 => array (
			'id' => '16',
			'type' => 'name',
			'label' => 'Your Name',
			'format' => 'first-last',
			'required' => '1',
			'size' => 'large',
			'first_placeholder' => 'Enter your first name...',
			'last_placeholder' => 'Enter your last name...',
		),
		24 => array (
			'id' => '24',
			'type' => 'text',
			'label' => 'Title',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Enter your title...',
		),
		25 => array (
			'id' => '25',
			'type' => 'text',
			'label' => 'School / Department',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Enter your school or department...',
		),
		26 => array (
			'id' => '26',
			'type' => 'phone',
			'label' => 'Your Office Telephone #',
			'format' => 'us',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Enter your office telephone number...',
		),
		27 => array (
			'id' => '27',
			'type' => 'email',
			'label' => 'Your Email',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Enter your Germanna email...',
		),
		31 => array (
			'id' => '31',
			'type' => 'pagebreak',
			'title' => 'Reason for Nomination',
			'next' => 'Next: Reason for Nomination',
			'prev_toggle' => '1',
			'prev' => 'Previous: Nominee Information',
		),
		20 => array (
			'id' => '20',
			'type' => 'divider',
			'label' => 'Reason for Nomination',
			'label_disable' => '1',
		),
		18 => array (
			'id' => '18',
			'type' => 'textarea',
			'label' => 'Question 1',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Please provide a brief summary of the candidate\'s accomplishments, contributions, or activities that merit this award. Please identify which area(s) from among the following are most closely associated with the accomplishments, contributions, or activities',
		),
		8 => array (
			'id' => '8',
			'type' => 'checkbox',
			'label' => 'Identify Areas',
			'choices' => array (
				0 => array (
					'label' => 'leadership and commitment to a strategic initiative',
				),
				1 => array (
					'label' => 'leadership and commitment to a special project',
				),
				2 => array (
					'label' => 'leadership and commitment to a special project',
				),
				3 => array (
					'label' => 'leadership and commitment to a college committee',
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
			'placeholder' => 'Please describe how the candidate\'s accomplishments, contributions, or activities supporting this award are innovative, distinctive, or impactful',
		),
		11 => array (
			'id' => '11',
			'type' => 'textarea',
			'label' => 'Question 3',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Please describe how the candidate\'s accomplishments, contributions of student learning outcomes and the college mission.',
		),
		12 => array (
			'id' => '12',
			'type' => 'textarea',
			'label' => 'Question 4',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Please describe how the candidate\'s accomplishments, contributions, or activities associated with this award were supportive of the strategic goals of the college and/or the Virginia Community College System',
		),
		13 => array (
			'id' => '13',
			'type' => 'textarea',
			'label' => 'Question 5',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Please describe how the candidate\'s accomplishments, contributions, or activities associated with this award substantially exceeded performance expectations.',
		),
		30 => array (
			'id' => '30',
			'type' => 'pagebreak',
			'position' => 'bottom',
			'prev_toggle' => '1',
			'prev' => 'Previous: Your Information',
		),
	),
	'settings' => array (
		'form_title' => 'Teaching Faculty Leadership Award Form',
		'submit_text' => 'Submit',
		'submit_text_processing' => 'Sending',
		'honeypot' => '1',
		'notification_enable' => '1',
		'notifications' => array (
			1 => array (
				'notification_name' => 'Notification 1',
				'email' => 'AwardsFaculty@germanna.edu, marketing@germanna.edu',
				'subject' => 'New Entry: Leadership Award',
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
		'template' => 'teaching_faculty_leadership_award_form',
	),
);
	}
}
new WPForms_Template_teaching_faculty_leadership_award_form;
endif; ?>
