<?php if ( class_exists( 'WPForms_Template' ) ) :
/**
 * Contact Germannaa
 * Template for WPForms.
 */
class WPForms_Template_contact_germannaa extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		// Template name
		$this->name = 'Contact Germannaa';

		// Template slug
		$this->slug = 'contact_germannaa';

		// Template description
		$this->description = '';

		// Template field and settings
		$this->data = array (
	'field_id' => 16,
	'fields' => array (
		10 => array (
			'id' => '10',
			'type' => 'text',
			'label' => 'Your Name',
			'required' => '1',
			'size' => 'large',
			'css' => 'wpforms-one-half wpforms-first wpforms-mobile-full',
		),
		1 => array (
			'id' => '1',
			'type' => 'email',
			'label' => 'Email',
			'required' => '1',
			'size' => 'large',
			'css' => 'wpforms-one-half wpforms-mobile-full',
		),
		4 => array (
			'id' => '4',
			'type' => 'select',
			'label' => 'I am a...',
			'choices' => array (
				7 => array (
					'label' => 'Prospective Student',
				),
				2 => array (
					'label' => 'Current Germanna Student',
				),
				4 => array (
					'label' => 'Military Veteran Student',
				),
				5 => array (
					'label' => 'High School Student',
				),
				6 => array (
					'label' => 'Other',
				),
			),
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Select Student Type',
			'css' => 'wpforms-one-third wpforms-first wpforms-mobile-full',
		),
		5 => array (
			'id' => '5',
			'type' => 'select',
			'label' => 'Campus/Center of Choice',
			'choices' => array (
				5 => array (
					'label' => 'Caroline',
				),
				1 => array (
					'label' => 'Culpeper',
				),
				2 => array (
					'label' => 'Fredericksburg',
				),
				3 => array (
					'label' => 'Locust Grove',
				),
				4 => array (
					'label' => 'Stafford',
				),
			),
			'size' => 'large',
			'placeholder' => 'Select Campus or Center',
			'css' => 'wpforms-one-third wpforms-mobile-full',
		),
		3 => array (
			'id' => '3',
			'type' => 'select',
			'label' => 'I Need Help With',
			'choices' => array (
				22 => array (
					'label' => 'Academic Information',
				),
				3 => array (
					'label' => 'Administrative Services',
				),
				4 => array (
					'label' => 'Admissions & Records',
				),
				5 => array (
					'label' => 'Help Desk',
				),
				6 => array (
					'label' => 'Facilities',
				),
				7 => array (
					'label' => 'Business Office',
				),
				8 => array (
					'label' => 'Counseling Services',
				),
				9 => array (
					'label' => 'Educational Foundation',
				),
				10 => array (
					'label' => 'Financial Aid',
				),
				11 => array (
					'label' => 'Instruction',
				),
				12 => array (
					'label' => 'Germanna Libraries',
				),
				20 => array (
					'label' => 'Marketing & Public Information',
				),
				13 => array (
					'label' => 'Nursing and Health Technologies',
				),
				14 => array (
					'label' => 'Physical Education',
				),
				15 => array (
					'label' => 'President\'s Office',
				),
				16 => array (
					'label' => 'College Police Department',
				),
				17 => array (
					'label' => 'Special Events & News',
				),
				18 => array (
					'label' => 'Student Services',
				),
				19 => array (
					'label' => 'Transcripts',
				),
				21 => array (
					'label' => 'Other',
				),
			),
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Select Topic',
			'css' => 'wpforms-one-third wpforms-mobile-full',
		),
		11 => array (
			'id' => '11',
			'type' => 'textarea',
			'label' => 'What do you need help with?',
			'required' => '1',
			'size' => 'medium',
		),
		15 => array (
			'id' => '15',
			'type' => 'captcha',
			'required' => '1',
			'label' => 'Please enter a correct answer to submit.',
			'format' => 'math',
			'questions' => array (
				1 => array (
					'question' => 'What is the fourth letter of the alphabet?',
					'answer' => 'D',
				),
				2 => array (
				),
			),
			'size' => 'medium',
		),
	),
	'settings' => array (
		'form_title' => 'Contact Germannaa',
		'submit_text' => 'Submit',
		'submit_text_processing' => 'Sending...',
		'submit_class' => 'button primary',
		'honeypot' => '1',
		'notification_enable' => '1',
		'notifications' => array (
			10 => array (
				'notification_name' => 'Financial Aid',
				'email' => 'financialaid@germanna.edu',
				'carboncopy' => 'mhummel@germanna.edu',
				'subject' => 'Questions about {field_id="11"}{field_id="3"}',
				'sender_name' => '{field_id="10"}',
				'sender_address' => '{field_id="1"}',
				'replyto' => '{field_id="1"}',
				'message' => '{all_fields}',
				'conditional_logic' => '1',
				'conditional_type' => 'go',
				'conditionals' => array (
					0 => array (
						0 => array (
							'field' => '3',
							'operator' => '==',
							'value' => '10',
						),
					),
				),
			),
			9 => array (
				'notification_name' => 'Physical Education',
				'email' => 'jstroffolino@germanna.edu',
				'carboncopy' => 'marketing@germanna.edu',
				'subject' => 'Questions about {field_id="3"}',
				'sender_name' => '{field_id="10"}',
				'sender_address' => '{field_id="1"}',
				'replyto' => '{field_id="1"}',
				'message' => '{all_fields}',
				'conditional_logic' => '1',
				'conditional_type' => 'go',
				'conditionals' => array (
					0 => array (
						0 => array (
							'field' => '3',
							'operator' => '==',
							'value' => '14',
						),
					),
					3 => array (
						0 => array (
							'field' => '5',
							'operator' => '==',
							'value' => '2',
						),
					),
					4 => array (
						0 => array (
							'field' => '5',
							'operator' => '==',
							'value' => '3',
						),
					),
				),
			),
			8 => array (
				'notification_name' => 'Academics and Instruction',
				'email' => 'instruction@germanna.edu',
				'carboncopy' => 'cbaetz@germanna.edu, mhummel@germanna.edu',
				'subject' => 'Question about {field_id="3"}',
				'sender_name' => '{field_id="10"}',
				'sender_address' => '{field_id="1"}',
				'replyto' => '{field_id="1"}',
				'message' => '{all_fields}',
				'conditional_logic' => '1',
				'conditional_type' => 'go',
				'conditionals' => array (
					0 => array (
						0 => array (
							'field' => '3',
							'operator' => '==',
							'value' => '22',
						),
					),
					1 => array (
						0 => array (
							'field' => '3',
							'operator' => '==',
							'value' => '11',
						),
					),
					2 => array (
						0 => array (
							'field' => '5',
							'operator' => '==',
							'value' => '5',
						),
					),
					3 => array (
						0 => array (
							'field' => '5',
							'operator' => '==',
							'value' => '1',
						),
					),
					4 => array (
						0 => array (
							'field' => '5',
							'operator' => '==',
							'value' => '2',
						),
					),
					5 => array (
						0 => array (
							'field' => '5',
							'operator' => '==',
							'value' => '3',
						),
					),
					6 => array (
						0 => array (
							'field' => '5',
							'operator' => '==',
							'value' => '4',
						),
					),
				),
			),
			7 => array (
				'notification_name' => 'Germanna Libraries',
				'email' => 'tremhof@germanna.edu',
				'carboncopy' => 'kbowers@germanna.edu, mhummel@germanna.edu',
				'subject' => 'Questions about {field_id="3"}',
				'sender_name' => '{field_id="10"}',
				'sender_address' => '{field_id="1"}',
				'replyto' => '{field_id="1"}',
				'message' => '{all_fields}',
				'conditional_logic' => '1',
				'conditional_type' => 'go',
				'conditionals' => array (
					0 => array (
						0 => array (
							'field' => '3',
							'operator' => '==',
							'value' => '12',
						),
					),
					1 => array (
						0 => array (
							'field' => '5',
							'operator' => '==',
							'value' => '5',
						),
					),
					2 => array (
						0 => array (
							'field' => '5',
							'operator' => '==',
							'value' => '1',
						),
					),
					3 => array (
						0 => array (
							'field' => '5',
							'operator' => '==',
							'value' => '2',
						),
					),
					4 => array (
						0 => array (
							'field' => '5',
							'operator' => '==',
							'value' => '3',
						),
					),
					5 => array (
						0 => array (
							'field' => '5',
							'operator' => '==',
							'value' => '4',
						),
					),
				),
			),
			6 => array (
				'notification_name' => 'Marketing/Events',
				'email' => 'marketing@germanna.edu',
				'carboncopy' => 'mhummel@germanna.edu',
				'subject' => 'Questions about {field_id="3"}',
				'sender_name' => '{field_id="10"}',
				'sender_address' => '{field_id="1"}',
				'replyto' => '{field_id="1"}',
				'message' => '{all_fields}',
				'conditional_logic' => '1',
				'conditional_type' => 'go',
				'conditionals' => array (
					0 => array (
						0 => array (
							'field' => '3',
							'operator' => '==',
							'value' => '17',
						),
					),
					1 => array (
						0 => array (
							'field' => '3',
							'operator' => '==',
							'value' => '20',
						),
					),
					2 => array (
						0 => array (
							'field' => '3',
							'operator' => '==',
							'value' => '21',
						),
					),
				),
			),
			5 => array (
				'notification_name' => 'Student Services',
				'email' => 'counseling@germanna.edu',
				'carboncopy' => 'marketing@germanna.edu',
				'subject' => 'Questions about {field_id="3"}',
				'sender_name' => '{field_id="10"}',
				'sender_address' => '{field_id="1"}',
				'message' => '{all_fields}',
				'conditional_logic' => '1',
				'conditional_type' => 'go',
				'conditionals' => array (
					0 => array (
						0 => array (
							'field' => '3',
							'operator' => '==',
							'value' => '18',
						),
					),
					1 => array (
						0 => array (
							'field' => '5',
							'operator' => '==',
							'value' => '5',
						),
						1 => array (
							'field' => '5',
							'operator' => '==',
							'value' => '1',
						),
						2 => array (
							'field' => '5',
							'operator' => '==',
							'value' => '2',
						),
						3 => array (
							'field' => '5',
							'operator' => '==',
							'value' => '3',
						),
						4 => array (
							'field' => '5',
							'operator' => '==',
							'value' => '4',
						),
					),
				),
			),
			4 => array (
				'notification_name' => 'Counseling Services',
				'email' => 'counseling@germanna.edu',
				'carboncopy' => 'marketing@germanna.edu',
				'subject' => 'Questions About {field_id="3"}',
				'sender_name' => '{field_id="10"}',
				'sender_address' => '{field_id="1"}',
				'replyto' => '{field_id="1"}',
				'message' => '{all_fields}',
				'conditional_logic' => '1',
				'conditional_type' => 'go',
				'conditionals' => array (
					0 => array (
						0 => array (
							'field' => '3',
							'operator' => '==',
							'value' => '8',
						),
					),
					1 => array (
						0 => array (
							'field' => '5',
							'operator' => '==',
							'value' => '5',
						),
						1 => array (
							'field' => '5',
							'operator' => '==',
							'value' => '1',
						),
						2 => array (
							'field' => '5',
							'operator' => '==',
							'value' => '2',
						),
						3 => array (
							'field' => '5',
							'operator' => '==',
							'value' => '3',
						),
						4 => array (
							'field' => '5',
							'operator' => '==',
							'value' => '4',
						),
					),
				),
			),
		),
		'confirmation_type' => 'redirect',
		'confirmation_message' => 'Thanks for contacting us! We will be in touch with you shortly.',
		'confirmation_message_scroll' => '1',
		'confirmation_page' => '25',
		'confirmation_redirect' => 'https://www.germanna.edu/about-germanna/contact-us/confirm/',
	),
	'meta' => array (
		'template' => 'contact_germannaa',
	),
);
	}
}
new WPForms_Template_contact_germannaa;
endif; ?>
