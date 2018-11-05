<?php if ( class_exists( 'WPForms_Template' ) ) :
/**
 * Academic Advising Preparation Form
 * Template for WPForms.
 */
class WPForms_Template_academic_advising_preparation_form extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		// Template name
		$this->name = 'Academic Advising Preparation Form';

		// Template slug
		$this->slug = 'academic_advising_preparation_form';

		// Template description
		$this->description = '';

		// Template field and settings
		$this->data = array (
	'field_id' => 16,
	'fields' => array (
		1 => array (
			'id' => 1,
			'type' => 'text',
			'label' => 'Text* Field (student-name)',
			'size' => 'medium',
			'required' => '1',
			'cf7_name' => 'student-name',
		),
		2 => array (
			'id' => 2,
			'type' => 'text',
			'label' => 'Text* Field (student-email)',
			'size' => 'medium',
			'required' => '1',
			'cf7_name' => 'student-email',
		),
		3 => array (
			'id' => 3,
			'type' => 'text',
			'label' => 'Text* Field (advisor-name)',
			'size' => 'medium',
			'required' => '1',
			'cf7_name' => 'advisor-name',
		),
		4 => array (
			'id' => 4,
			'type' => 'text',
			'label' => 'Text* Field (office-location)',
			'size' => 'medium',
			'required' => '1',
			'cf7_name' => 'office-location',
		),
		5 => array (
			'id' => 5,
			'type' => 'text',
			'label' => 'Text* Field (appointment-date)',
			'size' => 'medium',
			'required' => '1',
			'cf7_name' => 'appointment-date',
		),
		6 => array (
			'id' => 6,
			'type' => 'text',
			'label' => 'Text* Field (academic-program)',
			'size' => 'medium',
			'required' => '1',
			'cf7_name' => 'academic-program',
		),
		7 => array (
			'id' => 7,
			'type' => 'radio',
			'label' => 'Radio Field (gpa-credits-earned)',
			'choices' => array (
				0 => array (
					'label' => 'yes',
				),
				1 => array (
					'label' => 'no',
				),
			),
			'size' => 'medium',
			'cf7_name' => 'gpa-credits-earned',
		),
		8 => array (
			'id' => 8,
			'type' => 'radio',
			'label' => 'Radio Field (sis-information)',
			'choices' => array (
				0 => array (
					'label' => 'yes',
				),
				1 => array (
					'label' => 'no',
				),
			),
			'size' => 'medium',
			'cf7_name' => 'sis-information',
		),
		9 => array (
			'id' => 9,
			'type' => 'radio',
			'label' => 'Radio Field (read-requirements)',
			'choices' => array (
				0 => array (
					'label' => 'yes',
				),
				1 => array (
					'label' => 'no',
				),
			),
			'size' => 'medium',
			'cf7_name' => 'read-requirements',
		),
		10 => array (
			'id' => 10,
			'type' => 'radio',
			'label' => 'Radio Field (find-progress)',
			'choices' => array (
				0 => array (
					'label' => 'yes',
				),
				1 => array (
					'label' => 'no',
				),
			),
			'size' => 'medium',
			'cf7_name' => 'find-progress',
		),
		11 => array (
			'id' => 11,
			'type' => 'textarea',
			'label' => 'Textarea Field (visit-goals)',
			'size' => 'medium',
			'default_value' => 'Enter Goals',
			'cf7_name' => 'visit-goals',
		),
		12 => array (
			'id' => 12,
			'type' => 'textarea',
			'label' => 'Textarea Field (courses-taking)',
			'size' => 'medium',
			'default_value' => 'Enter Courses',
			'cf7_name' => 'courses-taking',
		),
		13 => array (
			'id' => 13,
			'type' => 'textarea',
			'label' => 'Textarea Field (session-notes)',
			'size' => 'medium',
			'default_value' => 'Enter Session Notes',
			'cf7_name' => 'session-notes',
		),
		14 => array (
			'id' => 14,
			'type' => 'textarea',
			'label' => 'Textarea Field (extra-help)',
			'size' => 'medium',
			'default_value' => 'Enter Any Extra Help You May Need',
			'cf7_name' => 'extra-help',
		),
		15 => array (
			'id' => 15,
			'type' => 'checkbox',
			'label' => 'Checkbox Field (assistance-type)',
			'choices' => array (
				0 => array (
					'label' => 'Career Service',
				),
				1 => array (
					'label' => 'Financial Aid',
				),
				2 => array (
					'label' => 'Transfer Services',
				),
				3 => array (
					'label' => 'Disability Services',
				),
				4 => array (
					'label' => 'Tutoring',
				),
				5 => array (
					'label' => 'Other',
				),
			),
			'size' => 'medium',
			'cf7_name' => 'assistance-type',
		),
	),
	'settings' => array (
		'form_title' => 'Academic Advising Preparation Form',
		'submit_text' => 'Submit',
		'submit_text_processing' => 'Sending',
		'honeypot' => '1',
		'notification_enable' => '1',
		'notifications' => array (
			1 => array (
				'notification_name' => 'Notification 1',
				'email' => 'cbynum@germanna.edu, mhummel@germanna.edu',
				'subject' => 'Academic Advising Preparation Form',
				'sender_name' => '{field_id="1"} ',
				'sender_address' => 'marketing@germanna.edu',
				'message' => '<p><strong>Student Name:</strong><br/>
{field_id="1"}</p>

<p><strong>Student Email:</strong><br/>
{field_id="2"}</p>

<p><strong>Student Advisor\'s Name</strong><br/>
{field_id="3"}</p>

<p><strong>Advisor\'s Office Locations</strong><br/>
{field_id="4"}</p>

<p><strong>Advising Appointment Date and Time</strong><br/>
{field_id="5"}</p>

<p><strong>Student\'s Academic Program</strong></br>
{field_id="6"}</p>

<p><strong>Does student know GPA and how many credits they have earned?</strong></br>
{field_id="7"}</p>


<p><strong>If no, does student know where in SIS they can find the information</strong><br/>
{field_id="8"}</p>

<p><strong>Does student know how to read their Academic Requirements</strong><br/>
{field_id="9"}</p>

<p><strong>Does student know how to fine their Degree Program</strong><br/>
{field_id="10"}</p>

<p><strong>Student\'s goals/questions for advising visit</strong></p>
{field_id="11"}

<p><strong>Courses the student plans on taking during the upcoming term</strong></p>
{field_id="12"}

<p><strong>Notes from student\'s Advising Session</strong></p>
{field_id="13"}


<p><strong>Does student need further assistance from Faculty Advisor</strong></p>
{field_id="14"}

<p><strong>Extra assistance student needs help with</strong></p>
{field_id="15"}


--
This e-mail was sent from the <a href="https://www.germanna.edu/academic-advising/academic-advising-preparation-form/">Academic Advising Preparation Form</a> on <a href="https://www.germanna.edu">Germanna Community College</a>.',
			),
		),
		'confirmation_type' => 'message',
		'confirmation_message' => 'Thank you for your message. It has been sent.',
		'confirmation_message_scroll' => '1',
		'import_form_id' => 18418,
		'recaptcha' => '1',
	),
	'meta' => array (
		'template' => 'academic_advising_preparation_form',
	),
);
	}
}
new WPForms_Template_academic_advising_preparation_form;
endif; ?>
