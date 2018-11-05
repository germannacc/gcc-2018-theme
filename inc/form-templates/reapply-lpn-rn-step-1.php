<?php if ( class_exists( 'WPForms_Template' ) ) :
/**
 * Reapplying LPN to RN Application Step 1
 * Template for WPForms.
 */
class WPForms_Template_reapplying_lpn_to_rn_application_step_1 extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		// Template name
		$this->name = 'Reapplying LPN to RN Application Step 1';

		// Template slug
		$this->slug = 'reapplying_lpn_to_rn_application_step_1';

		// Template description
		$this->description = '';

		// Template field and settings
		$this->data = array (
	'field_id' => 13,
	'fields' => array (
		9 => array (
			'id' => '9',
			'type' => 'html',
			'code' => '<p>Please enter your first name, last name, and VCCS email, these are required to receive your password to begin the application.</p>',
			'label_disable' => '1',
		),
		1 => array (
			'id' => '1',
			'type' => 'text',
			'label' => 'First Name',
			'required' => '1',
			'size' => 'large',
			'css' => 'wpforms-one-third wpforms-first',
		),
		2 => array (
			'id' => '2',
			'type' => 'text',
			'label' => 'Last Name',
			'required' => '1',
			'size' => 'large',
			'css' => 'wpforms-one-third',
		),
		3 => array (
			'id' => '3',
			'type' => 'email',
			'label' => 'VCCS Email',
			'required' => '1',
			'size' => 'large',
			'placeholder' => '@email.vccs.edu',
			'css' => 'wpforms-one-third',
		),
		10 => array (
			'id' => '10',
			'type' => 'divider',
			'label' => 'Application Requirements',
			'label_disable' => '1',
		),
		11 => array (
			'id' => '11',
			'type' => 'html',
			'code' => '<p>Please verify that the following Application Requirements have been completed and are on file.</p>',
			'label_disable' => '1',
		),
		4 => array (
			'id' => '4',
			'type' => 'checkbox',
			'label' => 'LPN - RN Requirements 1',
			'choices' => array (
				0 => array (
					'label' => 'Castlebranch Background Check Results (less than 6 months old) and completed prior to submission of application',
				),
			),
			'required' => '1',
			'choices_images_style' => 'modern',
			'label_hide' => '1',
		),
		5 => array (
			'id' => '5',
			'type' => 'checkbox',
			'label' => 'LPN - RN Requirements 2',
			'choices' => array (
				0 => array (
					'label' => 'GPA 2.5 or greater',
				),
			),
			'required' => '1',
			'random' => '1',
			'choices_images_style' => 'modern',
			'label_hide' => '1',
		),
		6 => array (
			'id' => '6',
			'type' => 'checkbox',
			'label' => 'LPN - RN Requirements 3',
			'choices' => array (
				0 => array (
					'label' => 'HESI Results (750 or greater)',
				),
			),
			'required' => '1',
			'choices_images_style' => 'modern',
			'label_hide' => '1',
		),
		7 => array (
			'id' => '7',
			'type' => 'checkbox',
			'label' => 'LPN - RN Requirements 4',
			'choices' => array (
				0 => array (
					'label' => 'ITE 115-or Computer Competency Challenge Exam (less than 5 years old)',
				),
			),
			'required' => '1',
			'choices_images_style' => 'modern',
			'label_hide' => '1',
		),
		8 => array (
			'id' => '8',
			'type' => 'checkbox',
			'label' => 'LPN - RN Requirements 5',
			'choices' => array (
				0 => array (
					'label' => 'Letter of recommendation from Instructor',
				),
			),
			'required' => '1',
			'choices_images_style' => 'modern',
			'label_hide' => '1',
		),
		12 => array (
			'id' => '12',
			'type' => 'html',
			'code' => '<p>All of the above elements must be completed prior to submission or Application will not be accepted.</p>',
			'label_disable' => '1',
		),
	),
	'settings' => array (
		'form_title' => 'Reapplying LPN to RN Application Step 1',
		'submit_text' => 'Submit',
		'submit_text_processing' => 'Sending',
		'honeypot' => '1',
		'notification_enable' => '1',
		'notifications' => array (
			1 => array (
				'notification_name' => 'Reviewer',
				'email' => 'jhamilton@germanna.edu,kclark@germanna.edu,rhetrick@germanna.edu',
				'subject' => 'Reapplying LPN to RN Verification "{field_id="1"} {field_id="2"}"',
				'sender_name' => 'Germanna Nursing Application',
				'sender_address' => 'No_Reply_Germanna@germanna.edu',
				'message' => '{all_fields}',
			),
			2 => array (
				'notification_name' => 'Student',
				'email' => '{field_id="3"}',
				'subject' => 'Reapply LPN - RN Step 1 Requirements Confirmation',
				'sender_name' => 'Germanna Nursing',
				'sender_address' => 'No_Reply_Germanna@germanna.edu',
				'replyto' => 'nursing@germanna.edu ',
				'message' => 'Dear:
{field_id="1"} {field_id="2"}

Thank you for verifying that you have submitted all of the required paperwork to reapply to Germanna\'s LPN to RN program.

You can continue onto Step 2 to reapply for the LPN to RN program by filling out the <a href="https://www.germanna.edu/nursing/application/reapplying-applicant/apply/lpn-to-rn/">full online application</a>.

Your password to log into the application is <strong>GCCNursing18!</strong>

*Note: The password is case sensitive and will need to be entered exactly as is.

*Note: The password is case sensitive and will need to be entered exactly as is.

Once you complete the application you will receive further instruction on how to become an LPN to RN nursing student.

<strong>Sincerely</strong>,
GermannaCC Nursing Staff

--

This e-mail was sent from the Germanna Nursing Application on <a href="https://germanna.edu">Germanna.EDU</a>',
			),
		),
		'confirmation_type' => 'redirect',
		'confirmation_message' => 'Thank you for confirming you submitted all required documents. Please check your email for further instructions.',
		'confirmation_message_scroll' => '1',
		'confirmation_page' => '25',
		'confirmation_redirect' => 'https://www.germanna.edu/nursing/application/reapplying-applicant/lpn-to-rn/confirmation/',
	),
	'meta' => array (
		'template' => 'reapplying_lpn_to_rn_application_step_1',
	),
);
	}
}
new WPForms_Template_reapplying_lpn_to_rn_application_step_1;
endif; ?>
