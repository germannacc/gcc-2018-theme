<?php if ( class_exists( 'WPForms_Template' ) ) :
/**
 * Welcome Day Registration Form
 * Template for WPForms.
 */
class WPForms_Template_welcome_day_registration_form extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		// Template name
		$this->name = 'Welcome Day Registration Form';

		// Template slug
		$this->slug = 'welcome_day_registration_form';

		// Template description
		$this->description = '';

		// Template field and settings
		$this->data = array (
	'field_id' => '8',
	'fields' => array (
		6 => array (
			'id' => '6',
			'type' => 'text',
			'label' => 'First Name',
			'required' => '1',
			'size' => 'large',
			'css' => 'wpforms-one-third wpforms-first',
		),
		7 => array (
			'id' => '7',
			'type' => 'text',
			'label' => 'Last Name',
			'required' => '1',
			'size' => 'large',
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
		3 => array (
			'id' => '3',
			'type' => 'select',
			'label' => 'Location Attending',
			'choices' => array (
				1 => array (
					'label' => 'Fredericksburg Area Campus',
				),
				2 => array (
					'label' => 'Locust Grove Campus',
				),
				3 => array (
					'label' => 'Barbara J. Fried Center',
				),
				4 => array (
					'label' => 'Daniel Technology Center',
				),
			),
			'required' => '1',
			'size' => 'large',
			'css' => 'wpforms-one-half wpforms-first',
		),
		4 => array (
			'id' => '4',
			'type' => 'text',
			'label' => 'Number of Guests',
			'size' => 'large',
			'css' => 'wpforms-one-half',
		),
	),
	'settings' => array (
		'form_title' => 'Welcome Day Registration Form',
		'submit_text' => 'Submit',
		'submit_text_processing' => 'Sending...',
		'honeypot' => '1',
		'notification_enable' => '1',
		'notifications' => array (
			2 => array (
				'notification_name' => 'Student Email',
				'email' => '{field_id="5"}',
				'subject' => 'Welcome Day Registration Confirmation',
				'sender_name' => 'Germanna Student Development',
				'sender_address' => 'No_Reply_Germanna@germanna.edu',
				'message' => 'Thank you for registering for Germanna\'s Welcome Day.	We look forward to seeing you.

For event details please visit our welcome day website.

{all_fields}',
			),
			1 => array (
				'notification_name' => 'Staff Email',
				'subject' => 'Welcome Day Registration Form Entry',
				'sender_name' => 'Germanna Student Development',
				'sender_address' => 'No_Reply_Germanna@germanna.edu',
				'message' => '{all_fields}',
			),
		),
		'confirmation_type' => 'redirect',
		'confirmation_message' => 'Thanks for contacting us! We will be in touch with you shortly.',
		'confirmation_message_scroll' => '1',
		'confirmation_page' => '833',
		'confirmation_redirect' => 'https://www.germanna.edu/welcome-day/registration/confirmation/',
	),
	'meta' => array (
		'template' => 'welcome_day_registration_form',
		'entry_columns' => array (
			0 => 6,
			1 => 7,
			2 => 3,
			3 => 4,
		),
	),
);
	}
}
new WPForms_Template_welcome_day_registration_form;
endif; ?>
