<?php if ( class_exists( 'WPForms_Template' ) ) :
/**
 * Milestone Awards RSVP
 * Template for WPForms.
 */
class WPForms_Template_milestone_awards_rsvp extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		// Template name
		$this->name = 'Milestone Awards RSVP';

		// Template slug
		$this->slug = 'milestone_awards_rsvp';

		// Template description
		$this->description = '';

		// Template field and settings
		$this->data = array (
	'field_id' => '5',
	'fields' => array (
		1 => array (
			'id' => '1',
			'type' => 'text',
			'label' => 'First-Name',
			'required' => '1',
			'size' => 'medium',
		),
		2 => array (
			'id' => '2',
			'type' => 'email',
			'label' => 'Email Address',
			'required' => '1',
			'size' => 'medium',
		),
		3 => array (
			'id' => '3',
			'type' => 'text',
			'label' => 'Phone-Number',
			'size' => 'medium',
		),
		4 => array (
			'id' => '4',
			'type' => 'text',
			'label' => 'Family-Members',
			'required' => '1',
			'size' => 'medium',
		),
	),
	'settings' => array (
		'form_title' => 'Milestone Awards RSVP',
		'submit_text' => 'Submit',
		'submit_text_processing' => 'Sending',
		'honeypot' => '1',
		'recaptcha' => '1',
		'notification_enable' => '1',
		'notifications' => array (
			1 => array (
				'notification_name' => 'Notification 1',
				'email' => 'nburke@germanna.edu,wstevens@germanna.edu',
				'subject' => '[your-subject]',
				'sender_name' => '{field_id="1"}',
				'sender_address' => 'wordpress@www.germanna.edu',
				'replyto' => '{field_id="2"}',
				'message' => 'From: {field_id="1"}
Subject: [your-subject]

p&gt;Student Name (required)
		{field_id="1"}

Student Email Address (required)
		{field_id="2"}

Phone Number
		{field_id="3"}

Number of family members attending (required)
		[text* family-members]

This e-mail was sent from a contact form on Germanna Community College (http://www.germanna.edu)',
			),
		),
		'confirmation_type' => 'message',
		'confirmation_message' => 'Your message was sent successfully. Thanks.',
		'confirmation_message_scroll' => '1',
		'confirmation_page' => '25',
	),
	'meta' => array (
		'template' => 'milestone_awards_rsvp',
	),
);
	}
}
new WPForms_Template_milestone_awards_rsvp;
endif; ?>
