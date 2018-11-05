<?php if ( class_exists( 'WPForms_Template' ) ) :
/**
 * DS Intake Form
 * Template for WPForms.
 */
class WPForms_Template_ds_intake_form extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		// Template name
		$this->name = 'DS Intake Form';

		// Template slug
		$this->slug = 'ds_intake_form';

		// Template description
		$this->description = '';

		// Template field and settings
		$this->data = array (
	'field_id' => 6,
	'fields' => array (
		1 => array (
			'id' => '1',
			'type' => 'name',
			'label' => 'Name',
			'format' => 'first-last',
			'required' => '1',
			'size' => 'large',
			'first_placeholder' => 'Enter your first name...',
			'last_placeholder' => 'Enter your last name..',
		),
		2 => array (
			'id' => '2',
			'type' => 'email',
			'label' => 'Email',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Enter your email address...',
			'css' => 'wpforms-one-half wpforms-first',
		),
		3 => array (
			'id' => '3',
			'type' => 'phone',
			'label' => 'Phone',
			'format' => 'us',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Enter your phone number...',
			'css' => 'wpforms-one-half',
		),
		4 => array (
			'id' => '4',
			'type' => 'select',
			'label' => 'Documentation type',
			'choices' => array (
				1 => array (
					'label' => 'IEP/504 in school',
				),
				2 => array (
					'label' => 'New to receiving serves with documentation',
				),
				3 => array (
					'label' => 'No documentation but would like more information',
				),
			),
			'required' => '1',
			'size' => 'large',
		),
		5 => array (
			'id' => '5',
			'type' => 'select',
			'label' => 'Would you like summer program information',
			'choices' => array (
				1 => array (
					'label' => 'Yes',
				),
				2 => array (
					'label' => 'No',
				),
			),
			'size' => 'large',
		),
	),
	'settings' => array (
		'form_title' => 'DS Intake Form',
		'submit_text' => 'Submit',
		'submit_text_processing' => 'Sending...',
		'honeypot' => '1',
		'notification_enable' => '1',
		'notifications' => array (
			2 => array (
				'notification_name' => 'Students Email',
				'email' => '{field_id="2"}',
				'subject' => 'New Student Intake Form Confirmation',
				'sender_name' => 'GCC Student Intake Form',
				'sender_address' => 'disabilityservices@germanna.edu',
				'replyto' => 'No_Reply_Germanna@germanna.edu',
				'message' => '{all_fields}',
			),
			1 => array (
				'notification_name' => 'Wins Email',
				'email' => 'wstevens@germanna.edu',
				'subject' => 'New DS Intake Form Entry',
				'sender_name' => 'GCC DS Intake Form',
				'sender_address' => '{field_id="2"}',
				'replyto' => 'No_Reply_Germanna@germanna.edu',
				'message' => '{all_fields}',
			),
		),
		'confirmation_type' => 'redirect',
		'confirmation_message' => 'Thanks for contacting us! We will be in touch with you shortly.',
		'confirmation_message_scroll' => '1',
		'confirmation_page' => '25',
		'confirmation_redirect' => 'https://www.germanna.edu/disability-services/students/student-intake-form/confirmation/',
	),
	'meta' => array (
		'template' => 'ds_intake_form',
	),
);
	}
}
new WPForms_Template_ds_intake_form;
endif; ?>
