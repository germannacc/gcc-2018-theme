<?php if ( class_exists( 'WPForms_Template' ) ) :
/**
 * Rick Brehm Innovations in A&P Leadership Grant App
 * Template for WPForms.
 */
class WPForms_Template_rick_brehm_innovations_in_ap_leadership_grant_app extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		// Template name
		$this->name = 'Rick Brehm Innovations in A&P Leadership Grant App';

		// Template slug
		$this->slug = 'rick_brehm_innovations_in_ap_leadership_grant_app';

		// Template description
		$this->description = '';

		// Template field and settings
		$this->data = array (
	'field_id' => 34,
	'fields' => array (
		32 => array (
			'id' => '32',
			'type' => 'pagebreak',
			'position' => 'top',
			'indicator' => 'circles',
			'indicator_color' => '#a30936',
			'title' => 'Applicant Information',
			'nav_align' => 'left',
		),
		1 => array (
			'id' => '1',
			'type' => 'divider',
			'label' => 'Applicant Information',
			'label_disable' => '1',
		),
		2 => array (
			'id' => '2',
			'type' => 'name',
			'label' => 'Applicant Name',
			'format' => 'first-last',
			'required' => '1',
			'size' => 'large',
			'first_placeholder' => 'Enter applicants first name...',
			'last_placeholder' => 'Enter applicants last name...',
		),
		3 => array (
			'id' => '3',
			'type' => 'text',
			'label' => 'Title',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Enter applicants title...',
		),
		4 => array (
			'id' => '4',
			'type' => 'text',
			'label' => 'Department / Unit',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Enter applicants department...',
		),
		19 => array (
			'id' => '19',
			'type' => 'phone',
			'label' => 'Office Telephone Number',
			'format' => 'us',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Enter applicants office telephone number...',
		),
		6 => array (
			'id' => '6',
			'type' => 'email',
			'label' => 'Email',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Enter nominees email...',
		),
		20 => array (
			'id' => '20',
			'type' => 'text',
			'label' => 'Title of Proposed Project',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Enter title of proposed project...',
		),
		21 => array (
			'id' => '21',
			'type' => 'text',
			'label' => 'Grant Amount Requested',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Enter amount request...$',
		),
		31 => array (
			'id' => '31',
			'type' => 'pagebreak',
			'title' => 'Submission Requirements',
			'next' => 'Next: Submission Requirements ',
			'prev_toggle' => '1',
			'prev' => 'Previous: Applicant Information',
		),
		22 => array (
			'id' => '22',
			'type' => 'divider',
			'label' => 'Submission Requirements',
			'label_disable' => '1',
		),
		23 => array (
			'id' => '23',
			'type' => 'textarea',
			'label' => 'Innovative project abstract',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Please explain a detailed abstract of your project...',
		),
		24 => array (
			'id' => '24',
			'type' => 'textarea',
			'label' => 'Project Background',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Please explain the background leading to the proposed project, major research questions(s), and the rationale...',
		),
		25 => array (
			'id' => '25',
			'type' => 'textarea',
			'label' => 'Steps for Developing the Project',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Please explain a list of steps required for developing the project, a projected timeline of activities, and a proposed implementation schedule...',
		),
		26 => array (
			'id' => '26',
			'type' => 'textarea',
			'label' => 'Cost outline/budget',
			'description' => 'Funding will be provided for approved reimbursable expenses only. Be specific about the dollar amount of each item requested and provide information as to how derived the estimated cost, e.g. vendor quotes, business office estimates, catalog research, etc. The maximum award for expenses is $5000.',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Please explain a cost outline/budget that clearly supports the methodology section (#2) of the proposal. ',
		),
		27 => array (
			'id' => '27',
			'type' => 'textarea',
			'label' => 'Mission and Goals Alignment',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Please explain how the project aligns with the college mission and goals, how the project will be assessed and evaluated, and how these findings will be used to improve college processes and outcomes....',
		),
		29 => array (
			'id' => '29',
			'type' => 'textarea',
			'label' => 'Project Outcomes / Benefits',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Please explain the outcomes, benefits, and the anticipated return on investment...',
		),
		28 => array (
			'id' => '28',
			'type' => 'textarea',
			'label' => 'Supporting Strategic Goals',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Please explain how the project supports the strategic goals and mission of the College...',
		),
		30 => array (
			'id' => '30',
			'type' => 'textarea',
			'label' => 'Project Finding Sharings',
			'description' => 'Suggestions include College Learning Day, Leadership Team, New Horizons, Peer Group opportunities and state and national conferences.	',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Please explain how the project findings will be shared with colleagues inside and outside the college...	',
		),
		33 => array (
			'id' => '33',
			'type' => 'pagebreak',
			'position' => 'bottom',
			'prev_toggle' => '1',
			'prev' => 'Previous: Your Information',
		),
	),
	'settings' => array (
		'form_title' => 'Rick Brehm Innovations in A&P Leadership Grant App',
		'submit_text' => 'Submit',
		'submit_text_processing' => 'Sending...',
		'honeypot' => '1',
		'notification_enable' => '1',
		'notifications' => array (
			1 => array (
				'notification_name' => 'Default Notification',
				'email' => 'AwardsFaculty@germanna.edu, mhummel@germanna.edu',
				'subject' => 'New Entry: A&P Rick Brehm Innovations Award',
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
		'template' => 'rick_brehm_innovations_in_ap_leadership_grant_app',
	),
);
	}
}
new WPForms_Template_rick_brehm_innovations_in_ap_leadership_grant_app;
endif; ?>
