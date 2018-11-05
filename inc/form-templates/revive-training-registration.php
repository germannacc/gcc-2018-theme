<?php if ( class_exists( 'WPForms_Template' ) ) :
/**
 * REVIVE Training Registration
 * Template for WPForms.
 */
class WPForms_Template_revive_training_registration extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		// Template name
		$this->name = 'REVIVE Training Registration';

		// Template slug
		$this->slug = 'revive_training_registration';

		// Template description
		$this->description = '';

		// Template field and settings
		$this->data = array (
	'field_id' => 10,
	'fields' => array (
		9 => array (
			'id' => '9',
			'type' => 'divider',
			'label' => 'Contact Information',
			'label_disable' => '1',
		),
		1 => array (
			'id' => '1',
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
			'type' => 'phone',
			'label' => 'Phone Number',
			'format' => 'us',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Enter your phone number...',
			'css' => 'wpforms-one-half wpforms-first',
		),
		4 => array (
			'id' => '4',
			'type' => 'email',
			'label' => 'Email Address',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Enter your email address...',
			'css' => 'wpforms-one-half',
		),
		8 => array (
			'id' => '8',
			'type' => 'divider',
			'label' => 'REVIVE Session',
			'label_disable' => '1',
		),
		7 => array (
			'id' => '7',
			'type' => 'html',
			'code' => '<p>Room information will be emailed with enrollment confirmation</p>',
			'label_disable' => '1',
		),
		6 => array (
			'id' => '6',
			'type' => 'select',
			'label' => 'Choose a Session',
			'choices' => array (
				1 => array (
					'label' => 'August 31 at Fredericksburg Area Campus at 11:00 a.m.',
				),
				2 => array (
					'label' => 'August 31 at Fredericksburg Area Campus at 2:00 p.m.',
				),
				3 => array (
					'label' => 'September 26 at Daniel Technology Center in Culpeper at 6:00 p.m. ',
				),
			),
			'size' => 'large',
		),
	),
	'settings' => array (
		'form_title' => 'REVIVE Training Registration',
		'submit_text' => 'Submit',
		'submit_text_processing' => 'Sending...',
		'honeypot' => '1',
		'notification_enable' => '1',
		'notifications' => array (
			1 => array (
				'notification_name' => 'Default Notification',
				'email' => 'mhummel@germanna.edu',
				'subject' => 'New REVIVE Training Registration Entry',
				'sender_name' => 'Germanna Community College Revive Registration Form',
				'sender_address' => '{admin_email}',
				'replyto' => 'No_Reply_Germanna@germanna.edu',
				'message' => '{all_fields}',
			),
		),
		'confirmation_type' => 'message',
		'confirmation_message' => 'Thanks for contacting us! We will be in touch with you shortly.',
		'confirmation_message_scroll' => '1',
		'confirmation_page' => '25',
	),
	'meta' => array (
		'template' => 'revive_training_registration',
	),
);
	}
}
new WPForms_Template_revive_training_registration;
endif; ?>
