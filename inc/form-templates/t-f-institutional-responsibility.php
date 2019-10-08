<?php if ( class_exists( 'WPForms_Template' ) ) :
/**
 * Teaching Faculty Institutional Responsibility Award Form
 * Template for WPForms.
 */
class WPForms_Template_teaching_faculty_institutional_responsibility_award_form extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		// Template name
		$this->name = 'Teaching Faculty Institutional Responsibility Award Form';

		// Template slug
		$this->slug = 'teaching_faculty_institutional_responsibility_award_form';

		// Template description
		$this->description = '';

		// Template field and settings
		$this->data = array (
	'field_id' => 33,
	'fields' => array (
		30 => array (
			'id' => '30',
			'type' => 'pagebreak',
			'position' => 'top',
			'indicator' => 'circles',
			'indicator_color' => '#a30936',
			'title' => 'Nominee Information',
		),
		17 => array (
			'id' => '17',
			'type' => 'divider',
			'label' => 'Nominee Information',
			'label_disable' => '1',
		),
		18 => array (
			'id' => '18',
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
		13 => array (
			'id' => '13',
			'type' => 'name',
			'label' => 'Nominee Name',
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
		19 => array (
			'id' => '19',
			'type' => 'phone',
			'label' => 'Nominees Office Telephone #',
			'format' => 'us',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Enter nominees office telephone number...',
		),
		20 => array (
			'id' => '20',
			'type' => 'email',
			'label' => 'Nominees Email',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Enter nominees Germanna email...',
		),
		29 => array (
			'id' => '29',
			'type' => 'pagebreak',
			'title' => 'Your Information',
			'next' => 'Next: Your Information',
		),
		21 => array (
			'id' => '21',
			'type' => 'divider',
			'label' => 'Nomination Submitted By',
			'label_disable' => '1',
		),
		22 => array (
			'id' => '22',
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
		23 => array (
			'id' => '23',
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
			'label' => 'Your Title',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Enter your title...',
		),
		25 => array (
			'id' => '25',
			'type' => 'text',
			'label' => 'Your School / Department',
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
		32 => array (
			'id' => '32',
			'type' => 'pagebreak',
			'title' => 'Reason for Nomination',
			'next' => 'Next: Reason for Nomination',
			'prev_toggle' => '1',
			'prev' => 'Previous: Nominee Information',
		),
		28 => array (
			'id' => '28',
			'type' => 'divider',
			'label' => 'Reason for Nomination',
			'label_disable' => '1',
		),
		16 => array (
			'id' => '16',
			'type' => 'textarea',
			'label' => 'Question 1',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Please provide a brief summary of the candidate\'s accomplishments, contributions, or activities that merit this award. Please identify which area(s) from among the following are most closely associated with the accomplishments, contributions, or activities.',
		),
		7 => array (
			'id' => '7',
			'type' => 'checkbox',
			'label' => 'Identify Areas',
			'choices' => array (
				0 => array (
					'label' => 'Special Projects',
				),
				1 => array (
					'label' => 'Student Advising',
				),
				2 => array (
					'label' => 'Administrative Responsibility',
				),
				3 => array (
					'label' => 'Leadership in one\'s academic discipline, department, or division',
				),
				4 => array (
					'label' => 'Other non-teaching duties',
				),
			),
			'description' => 'Identify which area(s) are most closely associated with the accomplishments, contributions, or activities.',
			'required' => '1',
			'choices_images_style' => 'modern',
		),
		8 => array (
			'id' => '8',
			'type' => 'textarea',
			'label' => 'Question 2',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Please describe how the candidate\'s accomplishments, contributions, or activities supporting this award are innovative, distinctive, or impactful.',
		),
		9 => array (
			'id' => '9',
			'type' => 'textarea',
			'label' => 'Question 3',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Please describe how the candidate\'s accomplishments, contributions, or activities supporting this award are innovative, distinctive, or impactful.',
		),
		10 => array (
			'id' => '10',
			'type' => 'textarea',
			'label' => 'Question 4',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Please describe how the candidate\'s accomplishments, contributions, or activities supporting this award are innovative, distinctive, or impactful.',
		),
		11 => array (
			'id' => '11',
			'type' => 'textarea',
			'label' => 'Question 5',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Please describe how the candidate\'s accomplishments, contributions, or activities associated with this award substantially exceeded performance expectations',
		),
		31 => array (
			'id' => '31',
			'type' => 'pagebreak',
			'position' => 'bottom',
			'prev_toggle' => '1',
			'prev' => 'Previous: Your Information',
		),
	),
	'settings' => array (
		'form_title' => 'Teaching Faculty Institutional Responsibility Award Form',
		'submit_text' => 'Submit',
		'submit_text_processing' => 'Sending',
		'honeypot' => '1',
		'notification_enable' => '1',
		'notifications' => array (
			1 => array (
				'notification_name' => 'Notification 1',
				'email' => 'AwardsFaculty@germanna.edu, marketing@germanna.edu',
				'subject' => 'New Entry: Institutional Responsibility Award',
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
		'template' => 'teaching_faculty_institutional_responsibility_award_form',
	),
);
	}
}
new WPForms_Template_teaching_faculty_institutional_responsibility_award_form;
endif; ?>
