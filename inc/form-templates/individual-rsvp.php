<?php if ( class_exists( 'WPForms_Template' ) ) :
/**
 * Individual RVSP
 * Template for WPForms.
 */
class WPForms_Template_individual_rvsp extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		// Template name
		$this->name = 'Individual RVSP';

		// Template slug
		$this->slug = 'individual_rvsp';

		// Template description
		$this->description = '';

		// Template field and settings
		$this->data = array (
	'field_id' => 17,
	'fields' => array (
		16 => array (
			'id' => '16',
			'type' => 'html',
			'code' => '*-Required Fields',
			'label_disable' => '1',
		),
		15 => array (
			'id' => '15',
			'type' => 'checkbox',
			'label' => 'Will you attend the Inauguration Ceremony',
			'choices' => array (
				1 => array (
					'label' => 'Will attend the Inauguration Ceremony',
				),
				2 => array (
					'label' => 'Will not attend the Inauguration Ceremony',
				),
			),
			'choices_images_style' => 'modern',
		),
		3 => array (
			'id' => '3',
			'type' => 'text',
			'label' => 'First Name',
			'required' => '1',
			'size' => 'large',
			'css' => 'wpforms-one-third wpforms-first',
		),
		4 => array (
			'id' => '4',
			'type' => 'text',
			'label' => 'Middle Initial',
			'size' => 'medium',
			'css' => 'wpforms-one-third',
		),
		5 => array (
			'id' => '5',
			'type' => 'text',
			'label' => 'Last Name',
			'required' => '1',
			'size' => 'large',
			'css' => 'wpforms-one-third',
		),
		6 => array (
			'id' => '6',
			'type' => 'text',
			'label' => 'Company/Organization',
			'required' => '1',
			'size' => 'large',
			'css' => 'wpforms-one-half wpforms-first',
		),
		9 => array (
			'id' => '9',
			'type' => 'text',
			'label' => 'Title',
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
			'css' => 'wpforms-one-third wpforms-first',
		),
		10 => array (
			'id' => '10',
			'type' => 'phone',
			'label' => 'Phone',
			'format' => 'us',
			'size' => 'large',
			'css' => 'wpforms-one-third',
		),
		11 => array (
			'id' => '11',
			'type' => 'text',
			'label' => 'Phone Extension',
			'size' => 'large',
			'css' => 'wpforms-one-third',
		),
		12 => array (
			'id' => '12',
			'type' => 'address',
			'label' => 'Address',
			'scheme' => 'us',
			'size' => 'large',
		),
		13 => array (
			'id' => '13',
			'type' => 'number',
			'label' => 'Number of Additional Guests',
			'size' => 'medium',
		),
		2 => array (
			'id' => '2',
			'type' => 'textarea',
			'label' => 'Names of Additional Guest',
			'required' => '1',
			'size' => 'large',
		),
		14 => array (
			'id' => '14',
			'type' => 'textarea',
			'label' => 'Special Greetings or Regrets',
			'required' => '1',
			'size' => 'large',
		),
	),
	'settings' => array (
		'form_title' => 'Individual RVSP',
		'submit_text' => 'Submit Request',
		'submit_text_processing' => 'Sending Request...',
		'honeypot' => '1',
		'notification_enable' => '1',
		'notifications' => array (
			1 => array (
				'notification_name' => 'Default Notification',
				'email' => 'foundation@germanna.edu',
				'subject' => 'New Entry: Delagate rsvp',
				'sender_name' => 'No_Reply_Germanna@germanna.edu',
				'sender_address' => '{admin_email}',
				'message' => '{all_fields}',
			),
		),
		'confirmation_type' => 'redirect',
		'confirmation_message' => 'Thanks for contacting us! We will be in touch with you shortly.',
		'confirmation_message_scroll' => '1',
		'confirmation_page' => '25',
		'confirmation_redirect' => 'https://www.germanna.edu/inauguration/individual-rsvp/confirmation/',
	),
	'meta' => array (
		'template' => 'individual_rvsp',
	),
);
	}
}
new WPForms_Template_individual_rvsp;
endif; ?>
