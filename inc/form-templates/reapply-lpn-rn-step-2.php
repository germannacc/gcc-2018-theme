<?php if ( class_exists( 'WPForms_Template' ) ) :
/**
 * Reapplying LPN to RN Application Step 2
 * Template for WPForms.
 */
class WPForms_Template_reapplying_lpn_to_rn_application_step_2 extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		// Template name
		$this->name = 'Reapplying LPN to RN Application Step 2';

		// Template slug
		$this->slug = 'reapplying_lpn_to_rn_application_step_2';

		// Template description
		$this->description = '';

		// Template field and settings
		$this->data = array (
	'field_id' => 19,
	'fields' => array (
		13 => array (
			'id' => '13',
			'type' => 'divider',
			'label' => 'Applicant Information',
			'label_disable' => '1',
		),
		1 => array (
			'id' => '1',
			'type' => 'text',
			'label' => 'Last Name',
			'required' => '1',
			'size' => 'large',
			'css' => 'wpforms-one-third wpforms-first',
		),
		2 => array (
			'id' => '2',
			'type' => 'text',
			'label' => 'First Name',
			'required' => '1',
			'size' => 'large',
			'css' => 'wpforms-one-third',
		),
		3 => array (
			'id' => '3',
			'type' => 'text',
			'label' => 'Maiden Name',
			'size' => 'large',
			'css' => 'wpforms-one-third',
		),
		4 => array (
			'id' => '4',
			'type' => 'select',
			'label' => 'Adress Type',
			'choices' => array (
				0 => array (
					'label' => 'Current Address',
				),
				1 => array (
					'label' => 'Change of Address',
				),
			),
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Select Type',
			'css' => 'wpforms-one-third wpforms-first',
		),
		5 => array (
			'id' => '5',
			'type' => 'text',
			'label' => 'Address',
			'required' => '1',
			'size' => 'large',
			'css' => 'wpforms-one-third',
		),
		6 => array (
			'id' => '6',
			'type' => 'text',
			'label' => 'County',
			'required' => '1',
			'size' => 'large',
			'css' => 'wpforms-one-third',
		),
		7 => array (
			'id' => '7',
			'type' => 'email',
			'label' => 'VCCS Email',
			'required' => '1',
			'size' => 'large',
			'placeholder' => '@email.vccs.edu',
			'css' => 'wpforms-one-third wpforms-first',
		),
		8 => array (
			'id' => '8',
			'type' => 'text',
			'label' => 'Home Telephone',
			'required' => '1',
			'size' => 'large',
			'css' => 'wpforms-one-third',
		),
		9 => array (
			'id' => '9',
			'type' => 'text',
			'label' => 'Work Phone',
			'size' => 'large',
			'css' => 'wpforms-one-third',
		),
		14 => array (
			'id' => '14',
			'type' => 'html',
			'code' => '<p>I have reviewed the admissions procedure, and prerequisites as outlined in the <a href="https://www.germanna.edu/catalog-and-student-handbook/">Catalog and Student Handbook</a>. In addition, I have on file in the Nursing & Health Technology Division Office a signed student advisor worksheet.</p>',
			'label_disable' => '1',
		),
		10 => array (
			'id' => '10',
			'type' => 'checkbox',
			'label' => 'Permissions for review',
			'choices' => array (
				0 => array (
					'label' => 'I give Germanna Admissions Personnel permission to review my background check. Thank you.',
				),
			),
			'choices_images_style' => 'modern',
		),
		15 => array (
			'id' => '15',
			'type' => 'divider',
			'label' => 'Signature',
			'label_disable' => '1',
		),
		11 => array (
			'id' => '11',
			'type' => 'text',
			'label' => 'Applicant Signature',
			'required' => '1',
			'size' => 'large',
			'css' => 'wpforms-two-thirds wpforms-first',
		),
		16 => array (
			'id' => '16',
			'type' => 'date-time',
			'label' => 'Enter Date of Signature',
			'format' => 'date',
			'required' => '1',
			'size' => 'large',
			'date_format' => 'F j, Y',
			'date_type' => 'datepicker',
			'time_format' => 'g:i A',
			'time_interval' => '30',
			'css' => 'wpforms-one-third',
		),
		17 => array (
			'id' => '17',
			'type' => 'divider',
			'label' => 'Important Information',
			'label_disable' => '1',
		),
		18 => array (
			'id' => '18',
			'type' => 'html',
			'code' => '<p>A criminal history record must be applied for the nursing program application. Admission to the program will be contingent upon the results of the background check.</p>

<p>Misrepresentation on the application will result in dismissal from the Nursing Program.</p>',
			'label_disable' => '1',
		),
	),
	'settings' => array (
		'form_title' => 'Reapplying LPN to RN Application Step 2',
		'submit_text' => 'Submit Application',
		'submit_text_processing' => 'Sending Application',
		'honeypot' => '1',
		'notification_enable' => '1',
		'notifications' => array (
			1 => array (
				'notification_name' => 'Reviewer',
				'email' => 'jhamilton@germanna.edu, kclark@germanna.edu, rhetrick@germanna.edu',
				'subject' => 'Reapplying LPN to RN Program Application "{field_id="2"} {field_id="1"}"',
				'sender_name' => 'Germanna Nursing Application',
				'sender_address' => 'No_Reply_Germanna@germanna.edu',
				'message' => '{all_fields} ',
			),
			2 => array (
				'notification_name' => 'Student',
				'email' => '{field_id="7"}',
				'subject' => 'Reapplying LPN to RN Application Confirmation',
				'sender_name' => 'Germanna Nursing',
				'sender_address' => 'No_Reply_Germanna@germanna.edu',
				'replyto' => 'nursing@germanna.edu',
				'message' => '<strong>Dear:</strong>
{field_id="2"} {field_id="1"}

<p>Thank you for your application to the LPN to RN program. You have indicated that all of the needed elements for your application are on file at Germanna.</p>

<p>Please note if we are unable to locate one of these requirements, you will be notified and requested to provide these prior to the application deadline.</p>

<p>Please know that we are processing your application as quickly as possible. You will receive an email regarding your acceptance status in approximately one month.</p>

<p>Thank you for your patience.</p>


<strong>Your submitted information:</strong>

{all_fields}

<strong>Sincerely,</strong>
GermannaCC Nursing Staff

--
This e-mail was sent from the Germanna Nursing Application on <a href="https://www.germanna.edu">Germanna.Edu</a>',
			),
		),
		'confirmation_type' => 'redirect',
		'confirmation_message' => 'Thank you for applying to Germanna\'s LPN to RN Program. Please check your confirmation email for further steps.',
		'confirmation_message_scroll' => '1',
		'confirmation_page' => '25',
		'confirmation_redirect' => 'https://www.germanna.edu/nursing/application/reapplying-applicant/apply/lpn-to-rn/confirmation/',
	),
	'meta' => array (
		'template' => 'reapplying_lpn_to_rn_application_step_2',
	),
);
	}
}
new WPForms_Template_reapplying_lpn_to_rn_application_step_2;
endif; ?>
