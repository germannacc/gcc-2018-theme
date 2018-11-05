<?php if ( class_exists( 'WPForms_Template' ) ) :
/**
 * Formal Student Complaint Form
 * Template for WPForms.
 */
class WPForms_Template_formal_student_complaint_form extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		// Template name
		$this->name = 'Formal Student Complaint Form';

		// Template slug
		$this->slug = 'formal_student_complaint_form';

		// Template description
		$this->description = '';

		// Template field and settings
		$this->data = array (
	'field_id' => 32,
	'fields' => array (
		20 => array (
			'id' => '20',
			'type' => 'html',
			'code' => '<fieldset>
<legend>Student Information',
			'label_disable' => '1',
			'css' => 'wpforms-one-half wpforms-firstwpforms-one-half wpforms-first',
		),
		1 => array (
			'id' => '1',
			'type' => 'text',
			'label' => 'Your Name',
			'required' => '1',
			'size' => 'large',
			'css' => 'wpforms-one-half wpforms-first',
		),
		2 => array (
			'id' => '2',
			'type' => 'date-time',
			'label' => 'Todays Date',
			'format' => 'date',
			'required' => '1',
			'size' => 'large',
			'date_format' => 'm/d/Y',
			'date_type' => 'datepicker',
			'time_format' => 'g:i A',
			'time_interval' => '30',
			'css' => 'wpforms-one-half',
		),
		3 => array (
			'id' => '3',
			'type' => 'phone',
			'label' => 'Cell Phone',
			'format' => 'international',
			'size' => 'large',
			'placeholder' => '555-555-5555',
			'css' => 'wpforms-one-third wpforms-first',
		),
		4 => array (
			'id' => '4',
			'type' => 'phone',
			'label' => 'Home Phone',
			'format' => 'international',
			'size' => 'large',
			'placeholder' => '555-555-5555',
			'css' => 'wpforms-one-third',
		),
		5 => array (
			'id' => '5',
			'type' => 'email',
			'label' => 'Email',
			'required' => '1',
			'size' => 'large',
			'css' => 'wpforms-one-third',
		),
		21 => array (
			'id' => '21',
			'type' => 'html',
			'label_disable' => '1',
		),
		22 => array (
			'id' => '22',
			'type' => 'html',
			'code' => '<fieldset>
<legend>Persons involved',
			'label_disable' => '1',
		),
		6 => array (
			'id' => '6',
			'type' => 'textarea',
			'label' => 'Add list of names involved (Max word count 100)',
			'required' => '1',
			'size' => 'medium',
		),
		24 => array (
			'id' => '24',
			'type' => 'html',
			'label_disable' => '1',
		),
		25 => array (
			'id' => '25',
			'type' => 'html',
			'code' => '<fieldset>
<legend>Description of incident',
			'label_disable' => '1',
		),
		7 => array (
			'id' => '7',
			'type' => 'text',
			'label' => 'Time of Incident',
			'size' => 'large',
			'css' => 'wpforms-one-third wpforms-first',
		),
		8 => array (
			'id' => '8',
			'type' => 'date-time',
			'label' => 'Date of Incident',
			'format' => 'date',
			'required' => '1',
			'size' => 'large',
			'date_format' => 'm/d/Y',
			'date_type' => 'datepicker',
			'time_format' => 'g:i A',
			'time_interval' => '30',
			'css' => 'wpforms-one-third',
		),
		9 => array (
			'id' => '9',
			'type' => 'text',
			'label' => 'Location of Incident',
			'required' => '1',
			'size' => 'large',
			'css' => 'wpforms-one-third',
		),
		26 => array (
			'id' => '26',
			'type' => 'html',
			'code' => '*Please write a detailed description of the events relating to this complaint. Include what, if any, other steps you have taken to attempt to address the complaint.

(Max words 500)',
			'label_disable' => '1',
		),
		10 => array (
			'id' => '10',
			'type' => 'textarea',
			'label' => 'Description',
			'required' => '1',
			'size' => 'medium',
		),
		27 => array (
			'id' => '27',
			'type' => 'html',
			'code' => '<fieldset>
<legend>Date and Sign',
			'label_disable' => '1',
		),
		11 => array (
			'id' => '11',
			'type' => 'text',
			'label' => 'Your Signature',
			'size' => 'large',
			'css' => 'wpforms-one-half wpforms-first',
		),
		12 => array (
			'id' => '12',
			'type' => 'date-time',
			'label' => 'Date of Signature',
			'format' => 'date',
			'required' => '1',
			'size' => 'large',
			'date_format' => 'm/d/Y',
			'date_type' => 'datepicker',
			'time_format' => 'g:i A',
			'time_interval' => '30',
			'css' => 'wpforms-one-half',
		),
		28 => array (
			'id' => '28',
			'type' => 'html',
			'label_disable' => '1',
		),
	),
	'settings' => array (
		'form_title' => 'Formal Student Complaint Form',
		'submit_text' => 'Submit',
		'submit_text_processing' => 'Sending',
		'submit_class' => '.button .primary',
		'honeypot' => '1',
		'recaptcha' => '1',
		'notification_enable' => '1',
		'notifications' => array (
			1 => array (
				'notification_name' => 'Notification 1',
				'email' => 'pharris@germanna.edu',
				'subject' => 'Formal Student Complaint',
				'sender_name' => '{field_id="5"} ',
				'sender_address' => 'marketing@germanna.edu',
				'message' => '<p><strong>Students Name<br />
{field_id="1"}

<p><strong>Date Filled Out<br />
{field_id="2"}

<p><strong>Students Cell Phone<br />
{field_id="3"}

<p><strong>Students Home Phone<br />
{field_id="4"}

<p><strong>Students Email<br />
{field_id="5"}

<p><strong>Persons Involved<br />
{field_id="6"}

<p><strong>Time of Incident<br />
{field_id="7"}

<p><strong>Date of Incident<br />
{field_id="8"}

<p><strong>Location of Incident<br />
{field_id="9"}

<p><strong>Description of Incident<br />
<p>{field_id="10"}

<p><strong>Student\'s Signature<br />
{field_id="11"}

<p><strong>Date of Signature<br />
{field_id="12"}


--
This e-mail was sent from a contact form on Germanna Community College (https://www.germanna.edu)',
			),
			2 => array (
				'notification_name' => 'Notification 2',
				'email' => '{field_id="5"}',
				'subject' => 'Formal Student Complaint Form Confirmation',
				'sender_name' => 'Germanna Community College',
				'sender_address' => '{admin_email}',
				'message' => '<p>Thank you for submitting your concern.	A staff member designated to address your concern will contact you within 5 business days.

<p>If you need more immediate assistance, please contact the Dean of Student Development’s office at 540-423-9123.


--
This e-mail was sent from a contact form on Germanna Community College (https://www.germanna.edu)',
			),
		),
		'confirmation_type' => 'message',
		'confirmation_message' => 'Thank you for your message. It has been sent.',
		'confirmation_message_scroll' => '1',
		'confirmation_page' => '25',
	),
	'meta' => array (
		'template' => 'formal_student_complaint_form',
	),
);
	}
}
new WPForms_Template_formal_student_complaint_form;
endif; ?>
