<?php if ( class_exists( 'WPForms_Template', false ) ) :
/**
 * Request Information Form
 * Template for WPForms.
 */
class WPForms_Template_request_information_form extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		// Template name
		$this->name = 'Request Information Form';

		// Template slug
		$this->slug = 'request_information_form';

		// Template description
		$this->description = '';

		// Template field and settings
		$this->data = array (
	'field_id' => 30,
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
			'size' => 'large',
			'placeholder' => 'Enter your first name...',
			'css' => 'wpforms-one-half wpforms-first',
		),
		29 => array (
			'id' => '29',
			'type' => 'text',
			'label' => 'Last name',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Enter your last name...',
			'css' => 'wpforms-one-half',
		),
		10 => array (
			'id' => '10',
			'type' => 'email',
			'label' => 'Email',
			'required' => '1',
			'confirmation' => '1',
			'size' => 'large',
			'placeholder' => 'Enter your email...',
		),
		11 => array (
			'id' => '11',
			'type' => 'phone',
			'label' => 'Phone',
			'format' => 'us',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Enter your phone number...',
		),
		13 => array (
			'id' => '13',
			'type' => 'address',
			'label' => 'Address',
			'scheme' => 'us',
			'required' => '1',
			'size' => 'large',
			'address1_placeholder' => 'Enter your street address...',
			'city_placeholder' => 'Enter your city...',
			'postal_placeholder' => 'Enter your zip-code...',
		),
		16 => array (
			'id' => '16',
			'type' => 'checkbox',
			'label' => 'Type of student',
			'choices' => array (
				1 => array (
					'label' => 'Undecided',
				),
				3 => array (
					'label' => 'Transfer student',
				),
				4 => array (
					'label' => 'Military',
				),
				5 => array (
					'label' => 'High school or home school',
				),
				6 => array (
					'label' => 'International',
				),
				7 => array (
					'label' => 'Non-credit (Workforce)',
				),
			),
			'choices_images_style' => 'modern',
		),
	),
	'settings' => array (
		'form_title' => 'Request Information Form',
		'submit_text' => 'Submit request',
		'submit_text_processing' => 'Sending request',
		'honeypot' => '1',
		'notification_enable' => '1',
		'notifications' => array (
			2 => array (
				'notification_name' => 'Student email',
				'email' => '{field_id="10"}',
				'subject' => 'Request information form confirmation',
				'sender_name' => 'Germanna Recruiting',
				'sender_address' => 'No_Reply_Germanna@germanna.edu',
				'message' => 'Thank you for your interest in Germanna Community College.  We’re proud to offer 50+ programs and are here to help you decide which path is best for you.

Browse our <a href="https://issuu.com/germannacc/docs/2018viewbook_online">view book</a> for information about the programs we offer and how to <a href="https://www.germanna.edu/admissions/">become a Germanna student</a>.

Our next class session is starting soon and there is still time to register. For your next step, respond to this email or visit one of our <a href="https://www.germanna.edu/admissions/welcome-center">Welcome Centers</a>.

We look forward to helping you reach your educational goals.

Get help with college application, admission and financial aid. Be ready to start fall classes.

<a href="https://www.germanna.edu/admissions/register/">Register for classes</a>

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
<p>Our next session is starting soon and there is still time to register for classes.   For your next step, respond to this email or visit one of our <a href="https://www.germanna.edu/admissions/welcome-center/">Welcome Centers</a>. </p>
<p>We look forward to helping you reach your educational goals.</p>
<p>Regards,</p>
<p>Enrollment Services</p>
<p><a href="mailto:Recruiting@germanna.edu">Recruiting@germanna.edu</a></p>
<p>(540) 834-1982</p>
<p>&nbsp;</p>',
				'message_scroll' => '1',
				'page' => '25',
				'redirect' => 'https://www.germanna.edu/admissions/request-information/confirmation/',
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
					'email' => '10.value.email',
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
		'template' => 'request_information_form',
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
new WPForms_Template_request_information_form;
endif;