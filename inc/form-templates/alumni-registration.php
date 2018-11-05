<?php
if ( class_exists( 'WPForms_Template' ) ) :
/**
 * Alumni Registration Form (ID #20457)
 * Template for WPForms.
 */
class WPForms_Template_alumni_registration_form_id_20457 extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		// Template name
		$this->name = 'Alumni Registration Form (ID #20457)';

		// Template slug
		$this->slug = 'alumni_registration_form_id_20457';

		// Template description
		$this->description = '';

		// Template field and settings
		$this->data = array (
	'field_id' => 43,
	'fields' => array (
		37 => array (
			'id' => '37',
			'type' => 'divider',
			'label' => 'Contact Information',
			'label_disable' => '1',
		),
		30 => array (
			'id' => '30',
			'type' => 'text',
			'label' => 'First Name',
			'required' => '1',
			'size' => 'large',
			'css' => 'wpforms-one-half wpforms-first',
		),
		31 => array (
			'id' => '31',
			'type' => 'text',
			'label' => 'Last Name',
			'required' => '1',
			'size' => 'large',
			'css' => 'wpforms-one-half',
		),
		1 => array (
			'id' => '1',
			'type' => 'email',
			'label' => 'Email',
			'required' => '1',
			'size' => 'large',
			'css' => 'wpforms-one-half wpforms-first',
		),
		33 => array (
			'id' => '33',
			'type' => 'phone',
			'label' => 'Phone',
			'format' => 'us',
			'size' => 'large',
			'css' => 'wpforms-one-half',
		),
		7 => array (
			'id' => '7',
			'type' => 'text',
			'label' => 'Address',
			'required' => '1',
			'size' => 'large',
			'css' => 'wpforms-two-fourths wpforms-first',
		),
		8 => array (
			'id' => '8',
			'type' => 'text',
			'label' => 'State',
			'required' => '1',
			'size' => 'large',
			'css' => 'wpforms-one-fourth',
		),
		9 => array (
			'id' => '9',
			'type' => 'text',
			'label' => 'Zip',
			'required' => '1',
			'size' => 'large',
			'css' => 'wpforms-one-fourth',
		),
		38 => array (
			'id' => '38',
			'type' => 'html',
			'code' => '<hr/>',
			'label_disable' => '1',
		),
		11 => array (
			'id' => '11',
			'type' => 'divider',
			'label' => 'Class Information',
			'label_disable' => '1',
		),
		34 => array (
			'id' => '34',
			'type' => 'text',
			'label' => 'Degree',
			'size' => 'large',
		),
		35 => array (
			'id' => '35',
			'type' => 'text',
			'label' => 'Major',
			'size' => 'large',
		),
		15 => array (
			'id' => '15',
			'type' => 'text',
			'label' => 'Year graduated, expected graduation year or year last attended*: ',
			'size' => 'large',
		),
		23 => array (
			'id' => '23',
			'type' => 'divider',
			'label' => 'I am interested in the following alumni-related opportunities: ',
			'label_disable' => '1',
		),
		26 => array (
			'id' => '26',
			'type' => 'checkbox',
			'label' => 'Checkboxes',
			'choices' => array (
				1 => array (
					'label' => 'Germanna Alumni Association Updates',
				),
				4 => array (
					'label' => 'Mentoring Programs',
				),
				2 => array (
					'label' => 'Volunteer Activities',
				),
				3 => array (
					'label' => 'Alumni Fundraising Events',
				),
				5 => array (
					'label' => 'Special Events',
				),
			),
			'choices_images_style' => 'modern',
		),
		27 => array (
			'id' => '27',
			'type' => 'textarea',
			'label' => 'Comments, news, accomplishments, notes: ',
			'size' => 'large',
		),
	),
	'settings' => array (
		'form_title' => 'Alumni Registration Form (ID #20457)',
		'submit_text' => 'Submit',
		'submit_text_processing' => 'Sending...',
		'honeypot' => '1',
		'recaptcha' => '1',
		'notification_enable' => '1',
		'notifications' => array (
			1 => array (
				'notification_name' => 'Default Notification',
				'email' => 'foundation@germanna.edu',
				'carboncopy' => 'jthompson@germanna.edu',
				'subject' => 'New Entry: Alumni Registration Form (ID #20457)',
				'sender_name' => '{field_id="0"}',
				'sender_address' => 'No_Reply_Germanna@germanna.edu',
				'message' => '{all_fields}',
			),
		),
		'confirmation_type' => 'page',
		'confirmation_message' => 'Thanks for contacting us! We will be in touch with you shortly.',
		'confirmation_message_scroll' => '1',
		'confirmation_page' => '21387',
	),
	'providers' => array (
		'constant-contact' => array (
			'connection_5ae337728717e' => array (
				'connection_name' => 'Alumni Form Emails',
				'account_id' => '5ae336f78d860',
				'list_id' => '3',
				'fields' => array (
					'email' => '1.value.email',
					'full_name' => '',
					'first_name' => '30.value.first',
					'last_name' => '31.value.last',
					'work_phone' => '33.value.text',
					'url' => '',
					'address' => '',
					'job_title' => '',
					'company_name' => '',
				),
			),
		),
	),
	'meta' => array (
		'template' => 'alumni_registration_form_id_20457',
	),
);
	}
}
new WPForms_Template_alumni_registration_form_id_20457;
endif;

 ?>
