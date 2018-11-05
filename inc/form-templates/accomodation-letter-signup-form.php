<?php if ( class_exists( 'WPForms_Template' ) ) :
/**
 * Accommodation Letter Signup Form
 * Template for WPForms.
 */
class WPForms_Template_accommodation_letter_signup_form extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		// Template name
		$this->name = 'Accommodation Letter Signup Form';

		// Template slug
		$this->slug = 'accommodation_letter_signup_form';

		// Template description
		$this->description = '';

		// Template field and settings
		$this->data = array (
	'field_id' => 16,
	'fields' => array (
		5 => array (
			'id' => '5',
			'type' => 'name',
			'label' => 'Your name',
			'format' => 'first-last',
			'required' => '1',
			'size' => 'large',
			'first_placeholder' => 'Enter your first name...',
			'last_placeholder' => 'Enter your last name...',
		),
		2 => array (
			'id' => '2',
			'type' => 'email',
			'label' => 'Email Address',
			'required' => '1',
			'confirmation' => '1',
			'size' => 'large',
			'placeholder' => 'Enter your email address...',
			'confirmation_placeholder' => 'Please confirm your email address...',
		),
		6 => array (
			'id' => '6',
			'type' => 'phone',
			'label' => 'Phone Number',
			'format' => 'us',
			'size' => 'large',
			'placeholder' => 'Enter your phone number...',
		),
		8 => array (
			'id' => '8',
			'type' => 'divider',
			'label' => 'Class Information',
			'label_disable' => '1',
		),
		15 => array (
			'id' => '15',
			'type' => 'number',
			'label' => 'Number of Classes',
			'size' => 'large',
			'placeholder' => 'Enter number of classes enrolled for this semester...',
		),
		12 => array (
			'id' => '12',
			'type' => 'select',
			'label' => 'Online Classes (Yes, No or Hybrid)',
			'choices' => array (
				1 => array (
					'label' => 'Yes',
				),
				2 => array (
					'label' => 'No',
				),
				4 => array (
					'label' => 'Hybrid',
				),
			),
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Select option...',
		),
		13 => array (
			'id' => '13',
			'type' => 'select',
			'label' => 'Campus',
			'choices' => array (
				1 => array (
					'label' => 'Fredericksburg Area Campus',
				),
				2 => array (
					'label' => 'Locust Grove Campus',
				),
				3 => array (
					'label' => 'Barbara J. Fried Center in Stafford',
				),
			),
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Select your campus location...',
		),
		14 => array (
			'id' => '14',
			'type' => 'text',
			'label' => 'Semester',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Provide semester for accommodation letter...',
		),
	),
	'settings' => array (
		'form_title' => 'Accommodation Letter Signup Form',
		'submit_text' => 'Submit',
		'submit_text_processing' => 'Sending',
		'honeypot' => '1',
		'notification_enable' => '1',
		'notifications' => array (
			2 => array (
				'notification_name' => 'Students Email',
				'email' => '{field_id="2"}',
				'subject' => 'GCC Disability Services Accommodation Letter Results',
				'sender_name' => 'GCC Disability Services Accommodation Letter Form',
				'sender_address' => 'disabilityservices@germanna.edu',
				'replyto' => 'No_Reply_Germanna@germanna.edu',
				'message' => 'Thank you for requesting your accommodation letters online. You can pick up your accommodation letters at the {field_id="13"} Welcome Center within 48 hours of submitting the request.

Same day request will not be guaranteed.

{all_fields}',
			),
			1 => array (
				'notification_name' => 'Wins Email',
				'email' => 'wstevens@germanna.edu',
				'subject' => 'Accommodation Letter Request',
				'sender_name' => '{field_id="5"}',
				'sender_address' => 'disabilityservices@germanna.edu',
				'replyto' => 'No_Reply_Germanna@germanna.edu',
				'message' => '{all_fields}',
			),
		),
		'confirmation_type' => 'redirect',
		'confirmation_message' => 'Your message was sent successfully. Thanks.',
		'confirmation_message_scroll' => '1',
		'confirmation_page' => '25',
		'confirmation_redirect' => 'https://www.germanna.edu/disability-services/accommodation-signup-form/confirmation/',
	),
	'meta' => array (
		'template' => 'accommodation_letter_signup_form',
	),
);
	}
}
new WPForms_Template_accommodation_letter_signup_form;
endif; ?>
