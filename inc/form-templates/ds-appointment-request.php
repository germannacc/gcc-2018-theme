<?php if ( class_exists( 'WPForms_Template' ) ) :
/**
 * DS Appointment Request
 * Template for WPForms.
 */
class WPForms_Template_ds_appointment_request extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		// Template name
		$this->name = 'DS Appointment Request';

		// Template slug
		$this->slug = 'ds_appointment_request';

		// Template description
		$this->description = '';

		// Template field and settings
		$this->data = array (
	'field_id' => 13,
	'fields' => array (
		11 => array (
			'id' => '11',
			'type' => 'divider',
			'label' => 'Contact Information',
			'label_disable' => '1',
		),
		7 => array (
			'id' => '7',
			'type' => 'name',
			'label' => 'Your Name',
			'format' => 'first-last',
			'required' => '1',
			'size' => 'large',
			'first_placeholder' => 'Enter your first name...',
			'last_placeholder' => 'Enter your last name...',
		),
		2 => array (
			'id' => '2',
			'type' => 'email',
			'label' => 'Your Email Address',
			'required' => '1',
			'confirmation' => '1',
			'size' => 'large',
			'placeholder' => 'Enter your email address...',
			'confirmation_placeholder' => 'Please confirm your email address...',
		),
		12 => array (
			'id' => '12',
			'type' => 'phone',
			'label' => 'Phone',
			'format' => 'us',
			'size' => 'large',
			'placeholder' => 'Enter your phone number...',
		),
		10 => array (
			'id' => '10',
			'type' => 'divider',
			'label' => 'Appointment Date and Time',
			'label_disable' => '1',
		),
		8 => array (
			'id' => '8',
			'type' => 'html',
			'code' => '<p>Appointments available Monday through Friday from 9:00 a.m. to 4:30 p.m. and Monday and Thursday until 6:00 p.m.</p>',
			'label_disable' => '1',
		),
		3 => array (
			'id' => '3',
			'type' => 'date-time',
			'label' => 'Preferred Appointment Time',
			'format' => 'date',
			'required' => '1',
			'size' => 'large',
			'date_placeholder' => 'Select appointment date...',
			'date_format' => 'F j, Y',
			'date_type' => 'datepicker',
			'time_format' => 'g:i A',
			'time_interval' => '30',
		),
		4 => array (
			'id' => '4',
			'type' => 'select',
			'label' => 'Preferred Appointment Time',
			'choices' => array (
				1 => array (
					'label' => '9:00 Am ',
				),
				2 => array (
					'label' => '9:30 AM',
				),
				3 => array (
					'label' => '10:00 AM',
				),
				4 => array (
					'label' => '10:30 AM',
				),
				5 => array (
					'label' => '11:00 AM',
				),
				6 => array (
					'label' => '11:30 AM',
				),
				7 => array (
					'label' => '12:00 PM',
				),
				8 => array (
					'label' => '12:30 PM',
				),
				9 => array (
					'label' => '1:00 PM',
				),
				10 => array (
					'label' => '1:30 PM',
				),
				11 => array (
					'label' => '2:00 PM',
				),
				12 => array (
					'label' => '2:30 PM',
				),
				13 => array (
					'label' => '3:00 PM',
				),
				14 => array (
					'label' => '3:30 PM',
				),
				15 => array (
					'label' => '4:00 PM',
				),
				16 => array (
					'label' => '4:30 PM',
				),
				17 => array (
					'label' => '5:00 PM Monday',
				),
				19 => array (
					'label' => '5:00 PM Thursday',
				),
				20 => array (
					'label' => '6:00 PM Monday',
				),
				21 => array (
					'label' => '6:00 PM Thursday',
				),
			),
			'required' => '1',
			'size' => 'medium',
		),
		9 => array (
			'id' => '9',
			'type' => 'select',
			'label' => 'Select Appointment Type',
			'choices' => array (
				1 => array (
					'label' => 'New Student',
				),
				2 => array (
					'label' => 'Registration Meeting',
				),
				3 => array (
					'label' => 'Professor Concern Meeting',
				),
				4 => array (
					'label' => 'Other',
				),
			),
			'required' => '1',
			'size' => 'large',
		),
	),
	'settings' => array (
		'form_title' => 'DS Appointment Request',
		'submit_text' => 'Submit',
		'submit_text_processing' => 'Sending',
		'honeypot' => '1',
		'notification_enable' => '1',
		'notifications' => array (
			2 => array (
				'notification_name' => 'Students Email',
				'email' => '{field_id="2"}',
				'subject' => 'Disability Services Appointment Request',
				'sender_name' => 'Disability Services Appointment Request Form',
				'sender_address' => 'disabilityservices@germanna.edu',
				'replyto' => 'No_Reply_Germanna@germanna.edu',
				'message' => 'Thank you for your meeting request. You will receive a confirmation email or a phone call within 48 hours. If your request for an appointment is sooner than 48 hours we will do our best to accommodate your request.

Please be on the lookout for an email or a phone to confirm your appointment date and time.

{all_fields}',
			),
			1 => array (
				'notification_name' => 'Wins Email',
				'email' => 'wstevens@germanna.edu',
				'subject' => 'DS Student Appointment Request',
				'sender_name' => 'DS Student Appointment Request Form',
				'sender_address' => '{field_id="2"}',
				'replyto' => 'No_Reply_Germanna@germanna.edu',
				'message' => '{all_fields}',
			),
		),
		'confirmation_type' => 'redirect',
		'confirmation_message' => 'Your message was sent successfully. Thanks.',
		'confirmation_message_scroll' => '1',
		'confirmation_page' => '25',
		'confirmation_redirect' => 'https://www.germanna.edu/disability-services/students/schedule-an-appointment/confirmation/',
	),
	'meta' => array (
		'template' => 'ds_appointment_request',
	),
);
	}
}
new WPForms_Template_ds_appointment_request;
endif; ?>
