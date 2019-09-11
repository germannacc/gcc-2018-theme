<?php
if ( class_exists( 'WPForms_Template', false ) ) :
/**
 * English Language Learner Summit
 * Template for WPForms.
 */
class WPForms_Template_english_language_learner_summit extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		// Template name
		$this->name = 'English Language Learner Summit';

		// Template slug
		$this->slug = 'english_language_learner_summit';

		// Template description
		$this->description = '';

		// Template field and settings
		$this->data = array (
	'field_id' => 7,
	'fields' => array (
		1 => array (
			'id' => '1',
			'type' => 'text',
			'label' => 'Name:',
			'required' => '1',
			'size' => 'medium',
		),
		2 => array (
			'id' => '2',
			'type' => 'text',
			'label' => 'Business:',
			'required' => '1',
			'size' => 'medium',
		),
		4 => array (
			'id' => '4',
			'type' => 'email',
			'label' => 'Email address:',
			'required' => '1',
			'size' => 'medium',
		),
		6 => array (
			'id' => '6',
			'type' => 'phone',
			'label' => 'Phone number:',
			'format' => 'smart',
			'required' => '1',
			'size' => 'medium',
		),
	),
	'settings' => array (
		'form_title' => 'English Language Learner Summit',
		'submit_text' => 'Submit',
		'submit_text_processing' => 'Sending...',
		'honeypot' => '1',
		'ajax_submit' => '1',
		'notification_enable' => '1',
		'notifications' => array (
			1 => array (
				'notification_name' => 'Default Notification',
				'email' => 'marketing@germanna.edu, foundation@germanna.edu',
				'subject' => 'New Entry: English Language Learner Summit',
				'sender_name' => 'Germanna Community College',
				'sender_address' => 'No_Reply_Germanna@germanna.edu',
				'message' => '{all_fields}',
			),
		),
		'confirmations' => array (
			1 => array (
				'name' => 'Default Confirmation',
				'type' => 'message',
				'message' => '<p>Thanks for contacting us! We will be in touch with you shortly.</p>',
				'message_scroll' => '1',
				'page' => '25',
			),
		),
	),
	'meta' => array (
		'template' => 'english_language_learner_summit',
	),
);
	}
}
new WPForms_Template_english_language_learner_summit;
endif;