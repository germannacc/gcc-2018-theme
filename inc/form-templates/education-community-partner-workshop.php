<?php if ( class_exists( 'WPForms_Template' ) ) :
/**
 * Education and Community Partner Workshop and Luncheon (ID #20309)
 * Template for WPForms.
 */
class WPForms_Template_education_and_community_partner_workshop_and_luncheon_id_20309 extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		// Template name
		$this->name = 'Education and Community Partner Workshop and Luncheon (ID #20309)';

		// Template slug
		$this->slug = 'education_and_community_partner_workshop_and_luncheon_id_20309';

		// Template description
		$this->description = '';

		// Template field and settings
		$this->data = array (
	'field_id' => 10,
	'fields' => array (
		8 => array (
			'id' => '8',
			'type' => 'text',
			'label' => 'First Name',
			'required' => '1',
			'size' => 'large',
			'css' => 'wpforms-one-half wpforms-first wpforms-mobile-full ',
		),
		9 => array (
			'id' => '9',
			'type' => 'text',
			'label' => 'Last Name',
			'required' => '1',
			'size' => 'large',
			'css' => 'wpforms-one-half wpforms-mobile-full ',
		),
		1 => array (
			'id' => '1',
			'type' => 'email',
			'label' => 'Email',
			'required' => '1',
			'size' => 'large',
			'css' => 'wpforms-one-half wpforms-first wpforms-mobile-full ',
		),
		5 => array (
			'id' => '5',
			'type' => 'phone',
			'label' => 'Phone',
			'format' => 'us',
			'required' => '1',
			'size' => 'large',
			'css' => 'wpforms-one-half wpforms-mobile-full ',
		),
		3 => array (
			'id' => '3',
			'type' => 'text',
			'label' => 'Institution or Organization',
			'size' => 'large',
		),
		7 => array (
			'id' => '7',
			'type' => 'checkbox',
			'label' => 'CEU\'s',
			'choices' => array (
				1 => array (
					'label' => 'Yes',
				),
				2 => array (
					'label' => 'No',
				),
			),
			'description' => 'Will be applying for CEUs?',
			'required' => '1',
		),
	),
	'settings' => array (
		'form_title' => 'Education and Community Partner Workshop and Luncheon (ID #20309)',
		'submit_text' => 'RSVP for Workshop',
		'submit_text_processing' => 'Sending...',
		'submit_class' => 'button primary right expand',
		'honeypot' => '1',
		'notification_enable' => '1',
		'notifications' => array (
			1 => array (
				'notification_name' => 'Default Notification',
				'email' => 'kviarella@germanna.edu',
				'subject' => 'ECP Workshop and Luncheon RSVP',
				'sender_name' => '{field_id="0"}',
				'sender_address' => '{admin_email}',
				'replyto' => '{field_id="1"}',
				'message' => '{all_fields}',
			),
		),
		'confirmation_type' => 'redirect',
		'confirmation_message' => 'Thanks for RSVPing for the Education and Community Partner Workshop and Luncheon. We will get back to you as soon as possible.',
		'confirmation_message_scroll' => '1',
		'confirmation_page' => '25',
		'confirmation_redirect' => 'https://www.germanna.edu/ecp-rsvp-confirmation/',
	),
	'meta' => array (
		'template' => 'education_and_community_partner_workshop_and_luncheon_id_20309',
	),
);
	}
}
new WPForms_Template_education_and_community_partner_workshop_and_luncheon_id_20309;
endif; ?>
