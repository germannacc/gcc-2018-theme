<?php if ( class_exists( 'WPForms_Template' ) ) :
/**
 * Workforce Student Questionnaire
 * Template for WPForms.
 */
class WPForms_Template_workforce_student_questionnaire extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		// Template name
		$this->name = 'Workforce Student Questionnaire';

		// Template slug
		$this->slug = 'workforce_student_questionnaire';

		// Template description
		$this->description = '';

		// Template field and settings
		$this->data = array (
	'field_id' => 36,
	'fields' => array (
		1 => array (
			'id' => '1',
			'type' => 'text',
			'label' => 'First Name',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Enter your first name...',
			'css' => 'wpforms-one-half wpforms-first',
		),
		2 => array (
			'id' => '2',
			'type' => 'text',
			'label' => 'Last Name',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Enter your last name...',
			'css' => 'wpforms-one-half',
		),
		3 => array (
			'id' => '3',
			'type' => 'phone',
			'label' => 'Phone',
			'format' => 'us',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Enter your phone number...',
			'css' => 'wpforms-one-half wpforms-first',
		),
		4 => array (
			'id' => '4',
			'type' => 'email',
			'label' => 'Email',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Enter your email address...',
			'css' => 'wpforms-one-half',
		),
		6 => array (
			'id' => '6',
			'type' => 'address',
			'label' => 'Address',
			'scheme' => 'us',
			'required' => '1',
			'size' => 'large',
			'address1_placeholder' => 'Enter Address 1...',
			'address2_placeholder' => 'Enter Address 2....',
			'city_placeholder' => 'Enter City...',
			'state_placeholder' => 'Select State',
			'postal_placeholder' => 'Enter your Zip Code',
		),
		31 => array (
			'id' => '31',
			'type' => 'html',
			'code' => '<hr/>',
			'label_disable' => '1',
		),
		7 => array (
			'id' => '7',
			'type' => 'divider',
			'label' => 'Employment History',
			'label_disable' => '1',
		),
		8 => array (
			'id' => '8',
			'type' => 'text',
			'label' => 'Who is your current employer?',
			'size' => 'large',
			'placeholder' => 'Enter your current employer...',
		),
		9 => array (
			'id' => '9',
			'type' => 'text',
			'label' => 'What fields have you worked in?',
			'size' => 'large',
			'placeholder' => 'Enter your the fields you worked in...',
		),
		10 => array (
			'id' => '10',
			'type' => 'text',
			'label' => 'What experience do you have?',
			'size' => 'large',
			'placeholder' => 'Enter your experience',
		),
		11 => array (
			'id' => '11',
			'type' => 'text',
			'label' => 'What was the duration of each working experience?',
			'size' => 'large',
			'placeholder' => 'Enter the duration...',
		),
		32 => array (
			'id' => '32',
			'type' => 'html',
			'code' => '<hr/>',
			'label_disable' => '1',
		),
		18 => array (
			'id' => '18',
			'type' => 'divider',
			'label' => 'Education/Training History',
			'label_disable' => '1',
		),
		19 => array (
			'id' => '19',
			'type' => 'textarea',
			'label' => 'Please include the type & dates of any previous education or training.',
			'size' => 'medium',
			'placeholder' => 'Enter type and dates of previous education...',
		),
		35 => array (
			'id' => '35',
			'type' => 'html',
			'code' => '<p>You may be asked to provide copies of transcripts and certifications during the review process.</p>',
			'label_disable' => '1',
		),
		34 => array (
			'id' => '34',
			'type' => 'html',
			'code' => '<hr/>',
			'label_disable' => '1',
		),
		20 => array (
			'id' => '20',
			'type' => 'divider',
			'label' => 'Program Preferences',
			'label_disable' => '1',
		),
		23 => array (
			'id' => '23',
			'type' => 'checkbox',
			'label' => 'Would you like to start a credential or apprenticeship program?',
			'choices' => array (
				1 => array (
					'label' => 'Yes',
				),
				2 => array (
					'label' => 'No',
				),
			),
			'choices_images_style' => 'modern',
		),
		24 => array (
			'id' => '24',
			'type' => 'text',
			'label' => 'Which location would you prefer? (some programs may only be offered at specific locations).',
			'size' => 'large',
			'placeholder' => 'Enter preferred location...',
		),
		25 => array (
			'id' => '25',
			'type' => 'text',
			'label' => 'Would you need financial or other assistance?',
			'size' => 'large',
			'placeholder' => 'Enter type of assistance...',
		),
		26 => array (
			'id' => '26',
			'type' => 'text',
			'label' => 'What is your field of interest?',
			'size' => 'large',
			'placeholder' => 'Enter your field of interest...',
		),
		28 => array (
			'id' => '28',
			'type' => 'textarea',
			'label' => 'Please briefly explain your goals?',
			'size' => 'large',
			'placeholder' => 'Enter your goals...',
		),
		33 => array (
			'id' => '33',
			'type' => 'html',
			'code' => '<hr/>',
			'label_disable' => '1',
		),
		29 => array (
			'id' => '29',
			'type' => 'divider',
			'label' => 'Availability',
			'label_disable' => '1',
		),
		30 => array (
			'id' => '30',
			'type' => 'textarea',
			'label' => 'Please include any commitments that may affect your shceduling and availability.',
			'size' => 'large',
			'placeholder' => 'Enter your schedule commitments...',
		),
	),
	'settings' => array (
		'form_title' => 'Workforce Student Questionnaire',
		'submit_text' => 'Submit Questionnaire',
		'submit_text_processing' => 'Sending Questionnaire...',
		'submit_class' => 'button primary float-right',
		'honeypot' => '1',
		'notification_enable' => '1',
		'notifications' => array (
			2 => array (
				'notification_name' => 'Student Results',
				'email' => '{field_id="4"}',
				'subject' => 'Germanna Workforce Student Questionnaire Form',
				'sender_name' => 'Germanna Workforce',
				'sender_address' => 'No_Reply_Germanna@germanna.edu',
				'replyto' => 'gccworkforce@germanna.edu',
				'message' => 'Thank you for your interest...

If you have questions, please contact Germanna Center for Workforce by phone (540) 891 - 3012, or email <a href="mailto:gccworkforce@germanna.edu">gccworkforce@germanna.edu</a>

{all_fields}',
			),
			1 => array (
				'notification_name' => 'Results Email',
				'email' => 'gccworkforce@germanna.edu',
				'subject' => 'Workforce Student Questionnaire Entry',
				'sender_name' => 'Germanna Center for Workforce',
				'sender_address' => 'No_Reply_Germanna@germanna.edu',
				'message' => '{all_fields}',
			),
		),
		'confirmation_type' => 'redirect',
		'confirmation_message' => 'Thanks for contacting us! We will be in touch with you shortly.',
		'confirmation_message_scroll' => '1',
		'confirmation_page' => '25',
		'confirmation_redirect' => 'https://www.germanna.edu/workforce/student-questionnaire/confirmation/',
	),
	'meta' => array (
		'template' => 'workforce_student_questionnaire',
	),
);
	}
}
new WPForms_Template_workforce_student_questionnaire;
endif; ?>
