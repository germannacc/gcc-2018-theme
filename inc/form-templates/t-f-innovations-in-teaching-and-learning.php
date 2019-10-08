<?php if ( class_exists( 'WPForms_Template' ) ) :
/**
 * Teaching Faculty Innovations in Teaching and Learning Award
 * Template for WPForms.
 */
class WPForms_Template_teaching_faculty_innovations_in_teaching_and_learning_award extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		// Template name
		$this->name = 'Teaching Faculty Innovations in Teaching and Learning Award';

		// Template slug
		$this->slug = 'teaching_faculty_innovations_in_teaching_and_learning_award';

		// Template description
		$this->description = '';

		// Template field and settings
		$this->data = array (
	'field_id' => 33,
	'fields' => array (
		31 => array (
			'id' => '31',
			'type' => 'pagebreak',
			'position' => 'top',
			'indicator' => 'circles',
			'indicator_color' => '#a30936',
			'title' => 'Applicant Information',
		),
		13 => array (
			'id' => '13',
			'type' => 'divider',
			'label' => 'Applicant Information',
			'label_disable' => '1',
		),
		14 => array (
			'id' => '14',
			'type' => 'name',
			'label' => 'Applicant Name',
			'format' => 'first-last',
			'required' => '1',
			'size' => 'large',
			'first_placeholder' => 'Enter your first name...',
			'last_placeholder' => 'Enter your first name...',
		),
		15 => array (
			'id' => '15',
			'type' => 'text',
			'label' => 'Title',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Enter your title...',
		),
		16 => array (
			'id' => '16',
			'type' => 'text',
			'label' => 'Department / Unit',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Enter your department or unit...',
		),
		17 => array (
			'id' => '17',
			'type' => 'phone',
			'label' => 'Office Telephone #',
			'format' => 'us',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Enter your office telephone number...',
		),
		18 => array (
			'id' => '18',
			'type' => 'email',
			'label' => 'Email',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Enter your email address...',
		),
		19 => array (
			'id' => '19',
			'type' => 'text',
			'label' => 'Title of Proposed Project',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Enter	title of the proposed project...',
		),
		20 => array (
			'id' => '20',
			'type' => 'text',
			'label' => 'Grant Amount Request $',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Enter the grant ammount...',
		),
		30 => array (
			'id' => '30',
			'type' => 'pagebreak',
			'title' => 'Submission Requirements',
			'next' => 'Next: Submission Requirements',
		),
		29 => array (
			'id' => '29',
			'type' => 'divider',
			'label' => 'Submission Requirements',
			'label_disable' => '1',
		),
		7 => array (
			'id' => '7',
			'type' => 'textarea',
			'label' => 'Question 1',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Please provide an abstract of the project.',
		),
		21 => array (
			'id' => '21',
			'type' => 'checkbox',
			'label' => 'Identify Area',
			'choices' => array (
				1 => array (
					'label' => 'Instructional Methodology',
				),
				2 => array (
					'label' => 'Student Achievement and Success',
				),
				3 => array (
					'label' => 'Student Engagement',
				),
				4 => array (
					'label' => 'Learning Outcomes Assessment',
				),
				5 => array (
					'label' => 'Innovative Use of Instructional Technology',
				),
				6 => array (
					'label' => 'Offering a course in a new delivery modality (e.g. online)',
				),
			),
			'choices_images_style' => 'modern',
		),
		22 => array (
			'id' => '22',
			'type' => 'textarea',
			'label' => 'Question 2',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Explain the background leading to the proposed project, major research question(s), and how proposed to answer the question(s) or solve the problem(s), and the rationale.',
		),
		24 => array (
			'id' => '24',
			'type' => 'textarea',
			'label' => 'Question 3',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Provide a list of steps required for developing the project, a projected timeline of activities, and a proposed implementation schedule',
		),
		23 => array (
			'id' => '23',
			'type' => 'textarea',
			'label' => 'Question 4',
			'description' => 'Funding will be provided for approved reimbursable expenses only. Be specific about the dollar amount of each item requested and provide information as to how derived the estimated cost, e.g. vendor quotes, business office estimates, catalog research, etc. The maximum award for expenses is $5000',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Provide a cost outline/budget that clearly supports the methodology in question 2 of the proposal.',
		),
		25 => array (
			'id' => '25',
			'type' => 'textarea',
			'label' => 'Question 5',
			'description' => 'Consult Institutional Research as needed to develop reliable and valid assessment methods',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Please explain how the project aligns with the student learning outcomes and how will these outcomes be assessed.',
		),
		26 => array (
			'id' => '26',
			'type' => 'textarea',
			'label' => 'Question 6',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Please explain any anticipated outcomes and benefits of the innovative teaching project. ',
		),
		27 => array (
			'id' => '27',
			'type' => 'textarea',
			'label' => 'Question 7',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Please provide details on how the project supports the strategic goals and mission of the College.',
		),
		28 => array (
			'id' => '28',
			'type' => 'textarea',
			'label' => 'Question 8',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Please provide details on how the project findings will be shared with colleagues inside and outside the college?	',
		),
		32 => array (
			'id' => '32',
			'type' => 'pagebreak',
			'position' => 'bottom',
			'prev_toggle' => '1',
			'prev' => 'Previous: Applicant Information',
		),
	),
	'settings' => array (
		'form_title' => 'Teaching Faculty Innovations in Teaching and Learning Award',
		'submit_text' => 'Submit',
		'submit_text_processing' => 'Sending',
		'honeypot' => '1',
		'notification_enable' => '1',
		'notifications' => array (
			1 => array (
				'notification_name' => 'Notification 1',
				'email' => 'AwardsFaculty@germanna.edu, marketing@germanna.edu',
				'subject' => 'New Entry: Innovations in Teaching and Learning',
				'sender_name' => 'Germanna Community College',
				'sender_address' => 'No_Reply_Germanna@germanna.edu',
				'message' => '{all_fields}',
			),
		),
		'confirmations' => array (
			1 => array (
				'name' => 'Default Confirmation',
				'type' => 'message',
				'message' => '<p>Thank you for making a nomination.</p>',
				'message_scroll' => '1',
				'page' => '25',
			),
		),
	),
	'meta' => array (
		'template' => 'teaching_faculty_innovations_in_teaching_and_learning_award',
	),
);
	}
}
new WPForms_Template_teaching_faculty_innovations_in_teaching_and_learning_award;
endif; ?>
