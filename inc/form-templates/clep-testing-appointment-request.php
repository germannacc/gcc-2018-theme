<?php if ( class_exists( 'WPForms_Template' ) ) :
/**
 * CLEP Testing - Appointment Request
 * Template for WPForms.
 */
class WPForms_Template_clep_testing_appointment_request_ extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		// Template name
		$this->name = 'CLEP Testing - Appointment Request';

		// Template slug
		$this->slug = 'clep_testing_-_appointment_request_';

		// Template description
		$this->description = 'CANDIDATE CONTACT INFORMATION';

		// Template field and settings
		$this->data = array (
	'field_id' => 16,
	'fields' => array (
		0 => array (
			'id' => '0',
			'type' => 'name',
			'label' => '*Name: ',
			'format' => 'first-last',
			'required' => '1',
			'size' => 'large',
			'css' => 'wpforms-one-half wpforms-firstwpforms-one-third wpforms-first',
		),
		11 => array (
			'id' => '11',
			'type' => 'text',
			'label' => 'Address: ',
			'size' => 'large',
		),
		1 => array (
			'id' => '1',
			'type' => 'email',
			'label' => '*Phone: ',
			'required' => '1',
			'size' => 'large',
		),
		12 => array (
			'id' => '12',
			'type' => 'text',
			'label' => '*Email Address: ',
			'size' => 'large',
		),
		2 => array (
			'id' => '2',
			'type' => 'textarea',
			'label' => 'SPECIAL ACCOMMODATION REQUEST',
			'required' => '1',
			'size' => 'large',
			'css' => 'wpforms-one-half wpforms-first',
		),
		10 => array (
			'id' => '10',
			'type' => 'select',
			'label' => 'TEST DATE INFORMATION ',
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
			'size' => 'large',
			'placeholder' => ' Date of 1st Choice: ',
			'css' => 'wpforms-one-third wpforms-first',
		),
		14 => array (
			'id' => '14',
			'type' => 'select',
			'label' => 'Dropdown',
			'choices' => array (
				1 => array (
					'label' => 'First Choice',
				),
				2 => array (
					'default' => '1',
					'label' => 'Second Choice',
				),
				3 => array (
					'label' => 'Third Choice',
				),
			),
			'size' => 'large',
		),
	),
	'settings' => array (
		'form_title' => 'CLEP Testing - Appointment Request ',
		'form_desc' => 'CANDIDATE CONTACT INFORMATION',
		'submit_text' => 'Submit',
		'submit_text_processing' => 'Sending...',
		'honeypot' => '1',
		'notification_enable' => '1',
		'notifications' => array (
			1 => array (
				'notification_name' => 'Default Notification',
				'email' => '{admin_email}',
				'subject' => 'New Entry: CLEP Testing - Appointment Request (ID #20193)',
				'sender_name' => '{field_id="0"}',
				'sender_address' => '{admin_email}',
				'replyto' => '{field_id="1"}',
				'message' => '{all_fields}',
			),
		),
		'confirmation_type' => 'message',
		'confirmation_message' => 'Thanks for contacting us! We will be in touch with you shortly.',
		'confirmation_message_scroll' => '1',
		'confirmation_page' => '25',
	),
	'meta' => array (
		'template' => 'clep_testing_-_appointment_request_',
	),
);
	}
}
new WPForms_Template_clep_testing_-_appointment_request_;
endif; ?>
