<?php if ( class_exists( 'WPForms_Template' ) ) :
/**
 * Teaching Faculty Learning Environment Award Form
 * Template for WPForms.
 */
class WPForms_Template_teaching_faculty_learning_environment_award_form extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		// Template name
		$this->name = 'Teaching Faculty Learning Environment Award Form';

		// Template slug
		$this->slug = 'teaching_faculty_learning_environment_award_form';

		// Template description
		$this->description = '';

		// Template field and settings
		$this->data = array (
	'field_id' => 28,
	'fields' => array (
		24 => array (
			'id' => '24',
			'type' => 'pagebreak',
			'position' => 'top',
			'indicator' => 'circles',
			'indicator_color' => '#a30936',
			'title' => 'Nominee Information',
		),
		11 => array (
			'id' => '11',
			'type' => 'divider',
			'label' => 'Nominee Information',
			'label_disable' => '1',
		),
		22 => array (
			'id' => '22',
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
		8 => array (
			'id' => '8',
			'type' => 'name',
			'label' => 'Nominee Name',
			'format' => 'first-last',
			'required' => '1',
			'size' => 'large',
			'first_placeholder' => 'Enter nominees first name...',
			'last_placeholder' => 'Enter nominees last name...',
		),
		2 => array (
			'id' => '2',
			'type' => 'text',
			'label' => 'Teaching Discipline / Academic School',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Enter the nominees teaching discipline or academic school...',
		),
		9 => array (
			'id' => '9',
			'type' => 'phone',
			'label' => 'Office Telphone #',
			'format' => 'us',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Enter the nominees office telephone number...',
		),
		10 => array (
			'id' => '10',
			'type' => 'email',
			'label' => 'Email',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Enter the nominees email...',
		),
		23 => array (
			'id' => '23',
			'type' => 'pagebreak',
			'title' => 'Nomination Submitted By',
			'next' => 'Next: Nomination Submitted By',
		),
		12 => array (
			'id' => '12',
			'type' => 'divider',
			'label' => 'Nomination Submitted By',
			'label_disable' => '1',
		),
		13 => array (
			'id' => '13',
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
			'input_columns' => '3',
		),
		14 => array (
			'id' => '14',
			'type' => 'name',
			'label' => 'Your Name',
			'format' => 'first-last',
			'required' => '1',
			'size' => 'large',
			'first_placeholder' => 'Enter your first name...',
			'last_placeholder' => 'Enter your last name...',
		),
		15 => array (
			'id' => '15',
			'type' => 'text',
			'label' => 'Title',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Enter your title...',
		),
		17 => array (
			'id' => '17',
			'type' => 'text',
			'label' => 'School / Deparment',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Enter your school or department...',
		),
		19 => array (
			'id' => '19',
			'type' => 'phone',
			'label' => 'Office Telephone #',
			'format' => 'us',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Enter your office telephone number...',
		),
		20 => array (
			'id' => '20',
			'type' => 'email',
			'label' => 'Email',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Enter your Germanna email...',
		),
		27 => array (
			'id' => '27',
			'type' => 'pagebreak',
			'title' => 'Reason for Nomination',
			'next' => 'Next: Reason for Nomination',
			'prev_toggle' => '1',
			'prev' => 'Previous: Nominee Information',
		),
		26 => array (
			'id' => '26',
			'type' => 'divider',
			'label' => 'Reason for Nomination',
			'label_disable' => '1',
		),
		7 => array (
			'id' => '7',
			'type' => 'textarea',
			'label' => 'Question 1',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Please describe the activity, behavior, or contribution for which the nominee is being nominated.',
		),
		21 => array (
			'id' => '21',
			'type' => 'checkbox',
			'label' => 'Identify Areas',
			'choices' => array (
				1 => array (
					'label' => 'Teaching',
				),
				2 => array (
					'label' => 'Scholarly and Creative Engagement',
				),
				3 => array (
					'label' => 'Institutional Responsibility',
				),
				4 => array (
					'label' => 'Service to the college or community',
				),
			),
			'choices_images_style' => 'modern',
		),
		25 => array (
			'id' => '25',
			'type' => 'pagebreak',
			'position' => 'bottom',
			'prev_toggle' => '1',
			'prev' => 'Previous: Your Information',
		),
	),
	'settings' => array (
		'form_title' => 'Teaching Faculty Learning Environment Award Form',
		'submit_text' => 'Submit',
		'submit_text_processing' => 'Sending',
		'honeypot' => '1',
		'notification_enable' => '1',
		'notifications' => array (
			1 => array (
				'notification_name' => 'Notification 1',
				'email' => 'AwardsFaculty@germanna.edu, marketing@germanna.edu',
				'subject' => 'New Entry: Learning Environment Award',
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
		'template' => 'teaching_faculty_learning_environment_award_form',
	),
);
	}
}
new WPForms_Template_teaching_faculty_learning_environment_award_form;
endif; ?>
