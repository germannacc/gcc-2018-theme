<?php if ( class_exists( 'WPForms_Template', false ) ) :
/**
 * RIF V2 Sept 2019
 * Template for WPForms.
 */
class WPForms_Template_rif_v2_sept_2019 extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		// Template name
		$this->name = 'RIF V2 Sept 2019';

		// Template slug
		$this->slug = 'rif_v2_sept_2019';

		// Template description
		$this->description = '';

		// Template field and settings
		$this->data = array (
	'field_id' => 39,
	'fields' => array (
		14 => array (
			'id' => '14',
			'type' => 'divider',
			'label' => 'Enter your information',
			'label_disable' => '1',
		),
		28 => array (
			'id' => '28',
			'type' => 'text',
			'label' => 'First name',
			'required' => '1',
			'size' => 'medium',
			'placeholder' => 'Enter your first name...',
		),
		29 => array (
			'id' => '29',
			'type' => 'text',
			'label' => 'Last name',
			'required' => '1',
			'size' => 'medium',
			'placeholder' => 'Enter your last name...',
		),
		36 => array (
			'id' => '36',
			'type' => 'text',
			'label' => 'Email Address',
			'required' => '1',
			'size' => 'medium',
			'placeholder' => 'Enter your email address...',
		),
		11 => array (
			'id' => '11',
			'type' => 'phone',
			'label' => 'Phone',
			'format' => 'us',
			'required' => '1',
			'size' => 'medium',
			'placeholder' => 'Enter your phone number...',
		),
		37 => array (
			'id' => '37',
			'type' => 'text',
			'label' => 'Date of birth',
			'size' => 'medium',
			'placeholder' => 'Enter your birthday',
			'input_mask' => '99/99/9999',
		),
		30 => array (
			'id' => '30',
			'type' => 'text',
			'label' => 'Zip ',
			'required' => '1',
			'size' => 'medium',
			'placeholder' => 'Enter your zipcode...',
			'input_mask' => '99999',
		),
		33 => array (
			'id' => '33',
			'type' => 'text',
			'label' => 'When did/will you get your high school/home school degree or equivalent',
			'size' => 'medium',
			'placeholder' => 'Enter date...',
			'input_mask' => '99/99/9999',
		),
		16 => array (
			'id' => '16',
			'type' => 'checkbox',
			'label' => 'Area of Interest',
			'choices' => array (
				1 => array (
					'label' => 'Business',
				),
				3 => array (
					'label' => 'Health Science',
				),
				4 => array (
					'label' => 'Humanities & Arts',
				),
				5 => array (
					'label' => 'IT & Technical Studies',
				),
				6 => array (
					'label' => 'Public Service',
				),
				7 => array (
					'label' => 'Science & Engineering',
				),
				8 => array (
					'label' => 'Social Science & Education',
				),
			),
			'required' => '1',
			'choices_images_style' => 'modern',
		),
		38 => array (
			'id' => '38',
			'type' => 'select',
			'label' => 'Which best describe you?:',
			'choices' => array (
				1 => array (
					'label' => 'High school/home school student',
				),
				2 => array (
					'label' => 'Transfer/college student',
				),
				3 => array (
					'label' => 'Adult learner',
				),
				4 => array (
					'label' => 'International student',
				),
				5 => array (
					'label' => 'Current Germanna student',
				),
				6 => array (
					'label' => 'Previous Germanna student',
				),
				7 => array (
					'label' => 'Parents',
				),
			),
			'required' => '1',
			'size' => 'medium',
			'placeholder' => 'Select an option...',
		),
		35 => array (
			'id' => '35',
			'type' => 'checkbox',
			'label' => 'How did you hear about Germanna',
			'choices' => array (
				1 => array (
					'label' => 'Advertisement',
				),
				2 => array (
					'label' => 'Friend or family',
				),
				3 => array (
					'label' => 'High school visit',
				),
				4 => array (
					'label' => 'Current student',
				),
				5 => array (
					'label' => 'Alumni',
				),
				6 => array (
					'label' => 'Employer',
				),
				7 => array (
					'label' => 'Counselor/Teacher',
				),
				8 => array (
					'label' => 'Other',
				),
			),
			'required' => '1',
			'choices_images_style' => 'modern',
		),
	),
	'settings' => array (
		'form_title' => 'RIF V2 Sept 2019',
		'submit_text' => 'Submit ',
		'submit_text_processing' => 'Sending',
		'honeypot' => '1',
		'ajax_submit' => '1',
		'notification_enable' => '1',
		'notifications' => array (
			2 => array (
				'notification_name' => 'Student email',
				'email' => '{field_id="10"}',
				'subject' => 'Request information form confirmation',
				'sender_name' => 'Germanna Recruiting',
				'sender_address' => 'No_Reply_Germanna@germanna.edu',
				'message' => 'Thank you for your interest in Germanna Community College.  We’re proud to offer 50+ programs and are here to help you decide which path is best for you.

Browse our <a href="https://issuu.com/germannacc/docs/2018viewbook_online">view book</a> for information about the programs we offer and how to <a href="https://germannacc.staging.wpengine.com/admissions/">become a Germanna student</a>.

Our next class session is starting soon and there is still time to register. For your next step, respond to this email or visit one of our <a href="https://germannacc.staging.wpengine.com/admissions/welcome-center">Welcome Centers</a>.

We look forward to helping you reach your educational goals.

Get help with college application, admission and financial aid. Be ready to start fall classes.

<a href="https://germannacc.staging.wpengine.com/admissions/register/">Register for classes</a>

<h2>Submitted Information</h2>

{all_fields}',
			),
			1 => array (
				'notification_name' => 'Default Notification',
				'email' => 'recruiting@germanna.edu, kviarella@germanna.edu',
				'subject' => 'New Entry: Request Information Form',
				'sender_name' => '{field_id="9"} Information Request',
				'sender_address' => 'No_Reply_Germanna@germanna.edu',
				'message' => '{all_fields}',
			),
		),
		'confirmations' => array (
			1 => array (
				'name' => 'Default Confirmation',
				'type' => 'redirect',
				'message' => '<p>Thank you for your interest in Germanna Community College.  We are proud to offer over 50 programs and are happy to help you decide which pathway is best for you.  Our <a href="https://issuu.com/germannacc/docs/2018viewbook_online">view book</a> contains information about these programs along with how to become a Germanna Community College student.</p>
<p>Our next session is starting soon and there is still time to register for classes.   For your next step, respond to this email or visit one of our <a href="https://germannacc.staging.wpengine.com/admissions/welcome-center/">Welcome Centers</a>. </p>
<p>We look forward to helping you reach your educational goals.</p>
<p>Regards,</p>
<p>Enrollment Services</p>
<p><a href="mailto:Recruiting@germanna.edu">Recruiting@germanna.edu</a></p>
<p>(540) 834-1982</p>
<p>&nbsp;</p>',
				'message_scroll' => '1',
				'page' => '25',
				'redirect' => 'https://germannacc.staging.wpengine.com/admissions/request-information/confirmation/',
			),
		),
	),
	'providers' => array (
		'constant-contact' => array (
			'connection_5d35fa6687c7e' => array (
				'connection_name' => 'Request Info',
				'account_id' => '5d35fa335e52c',
				'list_id' => '2021564274',
				'fields' => array (
					'email' => '36.value.email',
					'full_name' => '',
					'first_name' => '28.value.first',
					'last_name' => '29.value.last',
					'work_phone' => '11.value.text',
					'url' => '',
					'address' => '',
					'job_title' => '',
					'company_name' => '',
				),
			),
		),
	),
	'meta' => array (
		'template' => 'rif_v2_sept_2019',
		'entry_columns' => array (
			0 => 28,
			1 => 29,
			2 => 10,
			3 => 11,
			4 => 16,
		),
	),
);
	}
}
new WPForms_Template_rif_v2_sept_2019;
endif;