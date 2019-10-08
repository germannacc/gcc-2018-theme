<?php if ( class_exists( 'WPForms_Template', false ) ) :
/**
 * Casting Call
 * Template for WPForms.
 */
class WPForms_Template_casting_call extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		// Template name
		$this->name = 'Casting Call';

		// Template slug
		$this->slug = 'casting_call';

		// Template description
		$this->description = '';

		// Template field and settings
		$this->data = array (
	'field_id' => 14,
	'fields' => array (
		1 => array (
			'id' => '1',
			'type' => 'text',
			'label' => 'Name:',
			'required' => '1',
			'size' => 'medium',
		),
		3 => array (
			'id' => '3',
			'type' => 'phone',
			'label' => 'Phone:',
			'format' => 'smart',
			'required' => '1',
			'size' => 'medium',
		),
		12 => array (
			'id' => '12',
			'type' => 'email',
			'label' => 'E-mail:',
			'required' => '1',
			'size' => 'medium',
		),
		4 => array (
			'id' => '4',
			'type' => 'file-upload',
			'label' => 'Attache a current picture of yourself (maximum file size: 2MB):',
		),
		5 => array (
			'id' => '5',
			'type' => 'text',
			'label' => 'Major:',
			'size' => 'medium',
		),
		6 => array (
			'id' => '6',
			'type' => 'text',
			'label' => 'Employer:',
			'size' => 'medium',
		),
		7 => array (
			'id' => '7',
			'type' => 'textarea',
			'label' => 'Paragraph Text',
			'size' => 'medium',
		),
		8 => array (
			'id' => '8',
			'type' => 'textarea',
			'label' => 'Please share your availability to participate in a photo shoot:',
			'required' => '1',
			'size' => 'medium',
		),
		13 => array (
			'id' => '13',
			'type' => 'checkbox',
			'label' => 'Preferred location:',
			'choices' => array (
				1 => array (
					'label' => 'Fredericksburg',
				),
				2 => array (
					'label' => 'Locust Grove',
				),
				3 => array (
					'label' => 'Stafford',
				),
				4 => array (
					'label' => 'Culpeper',
				),
			),
			'required' => '1',
			'choices_images_style' => 'modern',
		),
		9 => array (
			'id' => '9',
			'type' => 'textarea',
			'label' => 'Where do you see yourself in five years? Ten years?:',
			'required' => '1',
			'size' => 'medium',
		),
		10 => array (
			'id' => '10',
			'type' => 'textarea',
			'label' => 'What\'s your favorite thing about Germanna:',
			'required' => '1',
			'size' => 'medium',
		),
		11 => array (
			'id' => '11',
			'type' => 'textarea',
			'label' => 'Anything else we should know:',
			'size' => 'medium',
		),
	),
	'settings' => array (
		'form_title' => 'Casting Call',
		'submit_text' => 'Submit',
		'submit_text_processing' => 'Sending...',
		'honeypot' => '1',
		'ajax_submit' => '1',
		'notification_enable' => '1',
		'notifications' => array (
			1 => array (
				'notification_name' => 'Default Notification',
				'email' => 'marketing@germanna.edu, wberry@germanna.edu',
				'subject' => 'New Entry: Casting Call',
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
		'template' => 'casting_call',
	),
);
	}
}
new WPForms_Template_casting_call;
endif; 