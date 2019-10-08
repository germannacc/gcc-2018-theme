<?php if ( class_exists( 'WPForms_Template' ) ) :
/**
 * Schedule Request for GCC President
 * Template for WPForms.
 */
class WPForms_Template_schedule_request_for_gcc_president extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		// Template name
		$this->name = 'Schedule Request for GCC President';

		// Template slug
		$this->slug = 'schedule_request_for_gcc_president';

		// Template description
		$this->description = '';

		// Template field and settings
		$this->data = array (
	'field_id' => 22,
	'fields' => array (
		1 => array (
			'id' => '1',
			'type' => 'text',
			'label' => 'First Name',
			'required' => '1',
			'size' => 'large',
			'css' => 'wpforms-one-half wpforms-first',
		),
		2 => array (
			'id' => '2',
			'type' => 'text',
			'label' => 'Last Name',
			'required' => '1',
			'size' => 'large',
			'css' => 'wpforms-one-half',
		),
		3 => array (
			'id' => '3',
			'type' => 'address',
			'label' => 'Address',
			'scheme' => 'us',
			'required' => '1',
			'size' => 'large',
			'address2_hide' => '1',
		),
		4 => array (
			'id' => '4',
			'type' => 'phone',
			'label' => 'Telephone',
			'format' => 'us',
			'required' => '1',
			'size' => 'large',
			'css' => 'wpforms-one-third wpforms-first',
		),
		5 => array (
			'id' => '5',
			'type' => 'text',
			'label' => 'Organization',
			'required' => '1',
			'size' => 'large',
			'css' => 'wpforms-one-third',
		),
		7 => array (
			'id' => '7',
			'type' => 'email',
			'label' => 'Email',
			'required' => '1',
			'size' => 'large',
			'css' => 'wpforms-one-third',
		),
		8 => array (
			'id' => '8',
			'type' => 'divider',
			'label' => 'Event Information',
			'label_disable' => '1',
		),
		9 => array (
			'id' => '9',
			'type' => 'date-time',
			'label' => 'Date of Event',
			'format' => 'date',
			'required' => '1',
			'size' => 'large',
			'date_format' => 'F j, Y',
			'date_type' => 'datepicker',
			'time_format' => 'g:i A',
			'time_interval' => '30',
			'css' => 'wpforms-one-third wpforms-first',
		),
		10 => array (
			'id' => '10',
			'type' => 'date-time',
			'label' => 'Start Time',
			'format' => 'time',
			'required' => '1',
			'size' => 'large',
			'date_format' => 'm/d/Y',
			'date_type' => 'datepicker',
			'time_format' => 'g:i A',
			'time_interval' => '15',
			'css' => 'wpforms-one-third',
		),
		11 => array (
			'id' => '11',
			'type' => 'date-time',
			'label' => 'End Time',
			'format' => 'time',
			'required' => '1',
			'size' => 'large',
			'date_format' => 'm/d/Y',
			'date_type' => 'datepicker',
			'time_format' => 'g:i A',
			'time_interval' => '15',
			'css' => 'wpforms-one-third',
		),
		19 => array (
			'id' => '19',
			'type' => 'text',
			'label' => 'Event Location',
			'required' => '1',
			'size' => 'large',
			'css' => 'wpforms-one-third wpforms-first',
		),
		15 => array (
			'id' => '15',
			'type' => 'select',
			'label' => 'Type of Event',
			'choices' => array (
				1 => array (
					'label' => 'Faculty Meeting',
				),
				2 => array (
					'label' => 'Staff Meeting',
				),
				5 => array (
					'label' => 'Other',
				),
			),
			'required' => '1',
			'size' => 'large',
			'css' => 'wpforms-one-third',
		),
		17 => array (
			'id' => '17',
			'type' => 'text',
			'label' => 'Event Title',
			'required' => '1',
			'size' => 'large',
			'css' => 'wpforms-one-third',
		),
		18 => array (
			'id' => '18',
			'type' => 'textarea',
			'label' => 'Reason for Request',
			'description' => 'What would you like the President to do at this event (i.e.: deliver keynote address, provide welcome remarks, make appearance, panel discussion, facilitate sessions, etc...)',
			'required' => '1',
			'size' => 'medium',
		),
		20 => array (
			'id' => '20',
			'type' => 'textarea',
			'label' => 'Description',
			'description' => 'Please enter the basic nature and purpose of the event.',
			'required' => '1',
			'size' => 'medium',
		),
		21 => array (
			'id' => '21',
			'type' => 'text',
			'label' => 'Number of Guest',
			'description' => 'How many people do you expect to attend this event?',
			'required' => '1',
			'size' => 'medium',
		),
	),
	'settings' => array (
		'form_title' => 'Schedule Request for GCC President',
		'submit_text' => 'Submit',
		'submit_text_processing' => 'Sending...',
		'honeypot' => '1',
		'recaptcha' => '1',
		'notification_enable' => '1',
		'notifications' => array (
			1 => array (
				'notification_name' => 'Default Notification',
				'email' => 'pharris@germanna.edu',
				'carboncopy' => 'jthompson@germanna.edu',
				'subject' => 'Schedule Request For President ',
				'sender_name' => 'Germanna\'s President Schedule Request Form',
				'sender_address' => '{admin_email}',
				'message' => '{all_fields}',
			),
		),
		'confirmation_type' => 'page',
		'confirmation_message' => 'Thanks for contacting us! We will be in touch with you shortly.',
		'confirmation_message_scroll' => '1',
		'confirmation_page' => '21704',
	),
	'meta' => array (
		'template' => 'schedule_request_for_gcc_president',
	),
);
	}
}
new WPForms_Template_schedule_request_for_gcc_president;
endif; ?>
