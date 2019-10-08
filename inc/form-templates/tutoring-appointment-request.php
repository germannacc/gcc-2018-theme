<?php if ( class_exists( 'WPForms_Template' ) ) :
/**
 * Tutoring Appointment Request Form
 * Template for WPForms.
 */
class WPForms_Template_tutoring_appointment_request_form extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		// Template name
		$this->name = 'Tutoring Appointment Request Form';

		// Template slug
		$this->slug = 'tutoring_appointment_request_form';

		// Template description
		$this->description = '';

		// Template field and settings
		$this->data = array (
	'field_id' => 16,
	'fields' => array (
		1 => array (
			'id' => '1',
			'type' => 'date-time',
			'label' => 'Todays Date',
			'format' => 'date',
			'required' => '1',
			'size' => 'large',
			'date_format' => 'm/d/Y',
			'date_type' => 'datepicker',
			'time_format' => 'g:i A',
			'time_interval' => '30',
			'css' => 'wpforms-one-third wpforms-first',
		),
		2 => array (
			'id' => '2',
			'type' => 'text',
			'label' => 'Your Name',
			'required' => '1',
			'size' => 'large',
			'css' => 'wpforms-one-third',
		),
		3 => array (
			'id' => '3',
			'type' => 'email',
			'label' => 'Your Email',
			'required' => '1',
			'size' => 'large',
			'css' => 'wpforms-one-third',
		),
		4 => array (
			'id' => '4',
			'type' => 'text',
			'label' => 'Phone',
			'required' => '1',
			'size' => 'large',
			'css' => 'wpforms-one-half wpforms-first',
		),
		5 => array (
			'id' => '5',
			'type' => 'text',
			'label' => 'Secondary Phone',
			'size' => 'large',
			'css' => 'wpforms-one-half',
		),
		6 => array (
			'id' => '6',
			'type' => 'text',
			'label' => 'Text* Field (course-name)',
			'required' => '1',
			'size' => 'medium',
		),
		7 => array (
			'id' => '7',
			'type' => 'text',
			'label' => 'Text* Field (course-number)',
			'required' => '1',
			'size' => 'medium',
		),
		8 => array (
			'id' => '8',
			'type' => 'text',
			'label' => 'Text* Field (instructor-name)',
			'required' => '1',
			'size' => 'medium',
		),
		9 => array (
			'id' => '9',
			'type' => 'radio',
			'label' => 'Radio Field (appointment-location)',
			'choices' => array (
				0 => array (
					'label' => 'Fredericksburg',
				),
				1 => array (
					'label' => 'Locust Grove',
				),
			),
		),
		10 => array (
			'id' => '10',
			'type' => 'select',
			'label' => 'Select* Field (monday-times)',
			'choices' => array (
				0 => array (
					'label' => 'Unavailable',
				),
				1 => array (
					'label' => '9am-10am',
				),
				2 => array (
					'label' => '10am-11am',
				),
				3 => array (
					'label' => '11am-12pm',
				),
				4 => array (
					'label' => '12pm-1pm',
				),
				5 => array (
					'label' => '1pm-2pm',
				),
				6 => array (
					'label' => '2pm-3pm',
				),
				7 => array (
					'label' => '3pm-4pm',
				),
				8 => array (
					'label' => '4pm-5pm',
				),
				9 => array (
					'label' => '5pm-6pm',
				),
				10 => array (
					'label' => '6pm-7pm',
				),
			),
			'required' => '1',
			'size' => 'medium',
		),
		11 => array (
			'id' => '11',
			'type' => 'select',
			'label' => 'Select* Field (tuesday-times)',
			'choices' => array (
				0 => array (
					'label' => 'Unavailable',
				),
				1 => array (
					'label' => '9am-10am',
				),
				2 => array (
					'label' => '10am-11am',
				),
				3 => array (
					'label' => '11am-12pm',
				),
				4 => array (
					'label' => '12pm-1pm',
				),
				5 => array (
					'label' => '1pm-2pm',
				),
				6 => array (
					'label' => '2pm-3pm',
				),
				7 => array (
					'label' => '3pm-4pm',
				),
				8 => array (
					'label' => '4pm-5pm',
				),
				9 => array (
					'label' => '5pm-6pm',
				),
				10 => array (
					'label' => '6pm-7pm',
				),
			),
			'required' => '1',
			'size' => 'medium',
		),
		12 => array (
			'id' => '12',
			'type' => 'select',
			'label' => 'Select* Field (wednesday-times)',
			'choices' => array (
				0 => array (
					'label' => 'Unavailable',
				),
				1 => array (
					'label' => '9am-10am',
				),
				2 => array (
					'label' => '10am-11am',
				),
				3 => array (
					'label' => '11am-12pm',
				),
				4 => array (
					'label' => '12pm-1pm',
				),
				5 => array (
					'label' => '1pm-2pm',
				),
				6 => array (
					'label' => '2pm-3pm',
				),
				7 => array (
					'label' => '3pm-4pm',
				),
				8 => array (
					'label' => '4pm-5pm',
				),
				9 => array (
					'label' => '5pm-6pm',
				),
				10 => array (
					'label' => '6pm-7pm',
				),
			),
			'required' => '1',
			'size' => 'medium',
		),
		13 => array (
			'id' => '13',
			'type' => 'select',
			'label' => 'Select* Field (thursday-times)',
			'choices' => array (
				0 => array (
					'label' => 'Unavailable',
				),
				1 => array (
					'label' => '9am-10am',
				),
				2 => array (
					'label' => '10am-11am',
				),
				3 => array (
					'label' => '11am-12pm',
				),
				4 => array (
					'label' => '12pm-1pm',
				),
				5 => array (
					'label' => '1pm-2pm',
				),
				6 => array (
					'label' => '2pm-3pm',
				),
				7 => array (
					'label' => '3pm-4pm',
				),
				8 => array (
					'label' => '4pm-5pm',
				),
				9 => array (
					'label' => '5pm-6pm',
				),
				10 => array (
					'label' => '6pm-7pm',
				),
			),
			'required' => '1',
			'size' => 'medium',
		),
		14 => array (
			'id' => '14',
			'type' => 'select',
			'label' => 'Select* Field (friday-times)',
			'choices' => array (
				0 => array (
					'label' => 'Unavailable',
				),
				1 => array (
					'label' => '9am-10am',
				),
				2 => array (
					'label' => '10am-11am',
				),
				3 => array (
					'label' => '11am-12pm',
				),
				4 => array (
					'label' => '12pm-1pm',
				),
				5 => array (
					'label' => '1pm-2pm',
				),
				6 => array (
					'label' => '2pm-3pm',
				),
				7 => array (
					'label' => '3pm-4pm',
				),
			),
			'required' => '1',
			'size' => 'medium',
		),
		15 => array (
			'id' => '15',
			'type' => 'checkbox',
			'label' => 'Acceptance Field',
			'choices' => array (
				1 => array (
					'label' => 'Acceptance Field (acceptance)',
				),
			),
			'required' => '1',
			'label_hide' => '1',
		),
	),
	'settings' => array (
		'form_title' => 'Tutoring Appointment Request Form',
		'submit_text' => 'Submit',
		'submit_text_processing' => 'Sending',
		'honeypot' => '1',
		'recaptcha' => '1',
		'notification_enable' => '1',
		'notifications' => array (
			1 => array (
				'notification_name' => 'Notification 1',
				'email' => 'cdoyne@germanna.edu',
				'subject' => 'Tutoring Appointment Request',
				'sender_name' => '{field_id="2"} ',
				'sender_address' => 'wordpress@www.germanna.edu',
				'replyto' => '{field_id="3"}',
				'message' => 'From: {field_id="2"}

<p>Date Signed: <br />
{field_id="1"}

<p>First/Last Name (required)<br />
		{field_id="2"}

<p>Email Address (required)<br />
		{field_id="3"}

<p>Phone<br />
{field_id="4"}

<p>Secondary Phone<br />
{field_id="5"}

<p>Course Name<br />
{field_id="6"}

<p>Course Number<br />
{field_id="7"}

<p>Instructor<br />
{field_id="8"}

<p>Appointment Location
{field_id="9"}

<h2>Choose The Best Days/Times For Appointment

*Multiple selections acceptable.

<p><strong>Monday
{field_id="10"}

<p><strong>Tuesday
{field_id="11"}

<p><strong>Wednesday
{field_id="12"}

<p><strong>Thursday
{field_id="13"}

<p><strong>Friday
{field_id="14"}

--
This e-mail was sent from the tutoring appointment request form on Germanna Community College (http://www.germanna.edu)',
			),
		),
		'confirmation_type' => 'message',
		'confirmation_message' => 'Your appointment request was successfully submitted. One of our tutors will get back to you as soon as we can.',
		'confirmation_message_scroll' => '1',
		'confirmation_page' => '25',
	),
	'meta' => array (
		'template' => 'tutoring_appointment_request_form',
	),
);
	}
}
new WPForms_Template_tutoring_appointment_request_form;
endif; ?>
