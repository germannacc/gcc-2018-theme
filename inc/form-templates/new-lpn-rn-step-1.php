<?php if ( class_exists( 'WPForms_Template' ) ) :
/**
 * New LPN to RN Application Step 1
 * Template for WPForms.
 */
class WPForms_Template_new_lpn_to_rn_application_step_1 extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		// Template name
		$this->name = 'New LPN to RN Application Step 1';

		// Template slug
		$this->slug = 'new_lpn_to_rn_application_step_1';

		// Template description
		$this->description = '';

		// Template field and settings
		$this->data = array (
	'field_id' => 17,
	'fields' => array (
		11 => array (
			'id' => '11',
			'type' => 'html',
			'code' => 'Please enter your first name, last name, and VCCS email, these are required to receive your password to begin the application.',
			'label_disable' => '1',
		),
		2 => array (
			'id' => '2',
			'type' => 'text',
			'label' => 'First Name',
			'required' => '1',
			'size' => 'large',
			'css' => 'wpforms-one-third wpforms-first',
		),
		12 => array (
			'id' => '12',
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
		13 => array (
			'id' => '13',
			'type' => 'divider',
			'label' => 'Application Requirements',
			'label_disable' => '1',
		),
		14 => array (
			'id' => '14',
			'type' => 'html',
			'code' => 'Please verify that the following Application Requirements have been completed and are on file.',
			'label_disable' => '1',
		),
		4 => array (
			'id' => '4',
			'type' => 'checkbox',
			'label' => 'LPN Requirement 1',
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
			'label' => 'LPN Requirements 2',
			'choices' => array (
				0 => array (
					'label' => 'Results - TEAS/KAPLAN Test, if applicable (45% or greater in each category)',
				),
			),
			'required' => '1',
			'choices_images_style' => 'modern',
			'label_hide' => '1',
		),
		6 => array (
			'id' => '6',
			'type' => 'checkbox',
			'label' => 'LPN Requirements 3',
			'choices' => array (
				0 => array (
					'label' => 'Pre-Advising Nursing Checklist Signed by a Nursing Advisor on file in the Nursing Office',
				),
			),
			'required' => '1',
			'choices_images_style' => 'modern',
			'label_hide' => '1',
		),
		7 => array (
			'id' => '7',
			'type' => 'checkbox',
			'label' => 'LPN Requirements 4',
			'choices' => array (
				0 => array (
					'label' => 'Licensed Practical Nursing License on file in the Nursing Office',
				),
			),
			'required' => '1',
			'choices_images_style' => 'modern',
			'label_hide' => '1',
		),
		8 => array (
			'id' => '8',
			'type' => 'checkbox',
			'label' => 'LPN Requirements 5',
			'choices' => array (
				0 => array (
					'label' => 'GPA 2.5 or greater',
				),
			),
			'required' => '1',
			'choices_images_style' => 'modern',
			'label_hide' => '1',
		),
		9 => array (
			'id' => '9',
			'type' => 'checkbox',
			'label' => 'LPN Requirements 6',
			'choices' => array (
				0 => array (
					'label' => 'Current HESI Test on file in nursing department (Score must be 750 or greater)',
				),
			),
			'required' => '1',
			'choices_images_style' => 'modern',
			'label_hide' => '1',
		),
		10 => array (
			'id' => '10',
			'type' => 'checkbox',
			'label' => 'LPN Requirements 7',
			'choices' => array (
				0 => array (
					'label' => 'All transcripts evaluated and on file with Admissions and Records, including High School transcripts',
				),
			),
			'required' => '1',
			'choices_images_style' => 'modern',
			'label_hide' => '1',
		),
		15 => array (
			'id' => '15',
			'type' => 'html',
			'code' => 'All of the above elements must be completed prior to submission or Application will not be accepted.',
			'label_disable' => '1',
		),
	),
	'settings' => array (
		'form_title' => 'New LPN to RN Application Step 1',
		'submit_text' => 'Submit',
		'submit_text_processing' => 'Sending',
		'honeypot' => '1',
		'notification_enable' => '1',
		'notifications' => array (
			1 => array (
				'notification_name' => 'Reviewer',
				'email' => 'jhamilton@germanna.edu,kclark@germanna.edu,rhetrick@germanna.edu',
				'subject' => 'LPN to RN Verification "{field_id="2"} {field_id="12"}"',
				'sender_name' => 'Nursing App New LPN - RN Step 1 Requirements',
				'sender_address' => 'nursing@germanna.edu',
				'replyto' => 'No_Reply_Germanna@germanna.edu',
				'message' => '{all_fields}',
			),
			2 => array (
				'notification_name' => 'Student',
				'email' => '{field_id="3"}',
				'subject' => 'New LPN - RN Step 1 Requirements Confirmation',
				'sender_name' => 'Germanna Nursing Application',
				'sender_address' => 'nursing@germanna.edu',
				'replyto' => 'No_Reply_Germanna@germanna.edu',
				'message' => 'Dear:
{field_id="2"} {field_id="12"}

Thank you for verifying that you have submitted all of the required paperwork to be accepted into the LPN to RN program.

You can continue onto Step 2 to for the LPN to RN program by filling out the <a href="https://www.germanna.edu/nursing/application/new-applicant/apply/lpn-to-rn/">full online application</a>.

Your password to log into the application is GCCNursing18!

*Note: The password is case sensitive and will need to be entered exactly as is.

Once you complete the application you will receive further instruction on how to become a lpn to rn nursing student.

Sincerely,
GermannaCC Nursing Staff

--
This e-mail was sent from the Nursing Online Application on Germanna.EDU',
			),
		),
		'confirmations' => array (
			1 => array (
				'name' => 'Default Confirmation',
				'type' => 'redirect',
				'message' => '<p>Thank you for confirming you submitted all required documents. Please check your email for further instructions.</p>',
				'message_scroll' => '1',
				'page' => '25',
				'redirect' => 'https://www.germanna.edu/nursing/application/new-applicant/lpn-to-rn/confirmation/',
			),
		),
	),
	'meta' => array (
		'template' => 'new_lpn_to_rn_application_step_1',
	),
);
	}
}
new WPForms_Template_new_lpn_to_rn_application_step_1;
endif; ?>
