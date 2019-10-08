<?php if ( class_exists( 'WPForms_Template' ) ) :
/**
 * Request Information Form
 * Template for WPForms.
 */
class WPForms_Template_request_information_form extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		// Template name
		$this->name = 'Request Information Form';

		// Template slug
		$this->slug = 'request_information_form';

		// Template description
		$this->description = '';

		// Template field and settings
		$this->data = array (
	'field_id' => 9,
	'fields' => array (
		1 => array (
			'id' => 1,
			'type' => 'text',
			'label' => 'Text* Field (first-name)',
			'size' => 'medium',
			'required' => '1',
			'cf7_name' => 'first-name',
		),
		2 => array (
			'id' => 2,
			'type' => 'text',
			'label' => 'Text* Field (last-name)',
			'size' => 'medium',
			'required' => '1',
			'cf7_name' => 'last-name',
		),
		3 => array (
			'id' => 3,
			'type' => 'text',
			'label' => 'Text* Field (email)',
			'size' => 'medium',
			'required' => '1',
			'cf7_name' => 'email',
		),
		4 => array (
			'id' => 4,
			'type' => 'text',
			'label' => 'Text* Field (phone)',
			'size' => 'medium',
			'required' => '1',
			'cf7_name' => 'phone',
		),
		5 => array (
			'id' => 5,
			'type' => 'text',
			'label' => 'Text* Field (address)',
			'size' => 'medium',
			'required' => '1',
			'cf7_name' => 'address',
		),
		6 => array (
			'id' => 6,
			'type' => 'text',
			'label' => 'Text* Field (city)',
			'size' => 'medium',
			'required' => '1',
			'cf7_name' => 'city',
		),
		7 => array (
			'id' => 7,
			'type' => 'text',
			'label' => 'Text* Field (state)',
			'size' => 'medium',
			'required' => '1',
			'cf7_name' => 'state',
		),
		8 => array (
			'id' => 8,
			'type' => 'text',
			'label' => 'Text* Field (zipcode)',
			'size' => 'medium',
			'required' => '1',
			'cf7_name' => 'zipcode',
		),
	),
	'settings' => array (
		'form_title' => 'Request Information Form',
		'submit_text' => 'Submit',
		'submit_text_processing' => 'Sending',
		'honeypot' => '1',
		'notification_enable' => '1',
		'notifications' => array (
			1 => array (
				'notification_name' => 'Notification 1',
				'email' => 'recruiting@germanna.edu',
				'subject' => 'Request Information Form',
				'sender_name' => '{field_id="1"} {field_id="2"} ',
				'sender_address' => 'marketing@germanna.edu',
				'message' => '<p><strong>Field of Study Interested In</strong><br/>
[field-of-study]</p>

<p><strong>Students Name </strong><br/>
{field_id="1"}{field_id="2"}</p>

<p><strong>Email</strong><br/>
{field_id="3"}</p>

<p><strong>Phone</strong><br/>
{field_id="4"}</p>

<p><strong>Address or P.O. Box</strong><br/>
{field_id="5"}</p>

<p><strong>City</strong><br/>
{field_id="6"}</p>

<p><strong>State</strong><br/>
{field_id="7"}</p>

<p><strong>Zipcode</strong><br/>
{field_id="8"}</p>

--
This e-mail was sent from a contact form on GermannaCC (http://www.germanna.edu)',
			),
		),
		'confirmation_type' => 'message',
		'confirmation_message' => 'Thank you for requesting information from Germanna. A member of our admissions team will be in touch with your shortly.',
		'confirmation_message_scroll' => '1',
		'import_form_id' => 12449,
		'recaptcha' => '1',
	),
	'meta' => array (
		'template' => 'request_information_form',
	),
);
	}
}
new WPForms_Template_request_information_form;
endif; ?>
