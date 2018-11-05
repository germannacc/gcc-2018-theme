<?php if ( class_exists( 'WPForms_Template' ) ) :
/**
 * Dreamwork Award
 * Template for WPForms.
 */
class WPForms_Template_dreamwork_award extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		// Template name
		$this->name = 'Dreamwork Award';

		// Template slug
		$this->slug = 'dreamwork_award';

		// Template description
		$this->description = '';

		// Template field and settings
		$this->data = array (
	'field_id' => 32,
	'fields' => array (
		16 => array (
			'id' => '16',
			'type' => 'pagebreak',
			'position' => 'top',
			'indicator' => 'circles',
			'indicator_color' => '#a30936',
			'title' => 'Team Information',
			'nav_align' => 'left',
		),
		20 => array (
			'id' => '20',
			'type' => 'divider',
			'label' => 'Team Information',
			'label_disable' => '1',
		),
		22 => array (
			'id' => '22',
			'type' => 'text',
			'label' => 'What is the Innovative Solution or Process Improvement?',
			'required' => '1',
			'size' => 'large',
		),
		23 => array (
			'id' => '23',
			'type' => 'checkbox',
			'label' => 'How many are nominated for this team award?',
			'choices' => array (
				1 => array (
					'label' => '3 (min)',
				),
				2 => array (
					'label' => '4',
				),
				3 => array (
					'label' => '5',
				),
				4 => array (
					'label' => '6',
				),
				5 => array (
					'label' => '7',
				),
				6 => array (
					'label' => '8',
				),
				7 => array (
					'label' => '9',
				),
				8 => array (
					'label' => '10+',
				),
			),
			'choices_images_style' => 'modern',
		),
		21 => array (
			'id' => '21',
			'type' => 'pagebreak',
			'title' => 'Nominee Information',
			'next' => 'Next: Nominee Information',
		),
		1 => array (
			'id' => '1',
			'type' => 'divider',
			'label' => 'Nominee Information',
			'label_disable' => '1',
		),
		2 => array (
			'id' => '2',
			'type' => 'name',
			'label' => 'Nominees Name #1',
			'format' => 'first-last',
			'required' => '1',
			'size' => 'large',
			'first_placeholder' => 'Enter nominees first name...',
			'last_placeholder' => 'Enter nominees last name...',
		),
		3 => array (
			'id' => '3',
			'type' => 'text',
			'label' => 'Title',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Enter nominees title...',
		),
		4 => array (
			'id' => '4',
			'type' => 'text',
			'label' => 'Department / Unit',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Enter nominees department...',
		),
		19 => array (
			'id' => '19',
			'type' => 'phone',
			'label' => 'Office Telephone Number',
			'format' => 'us',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Enter nominees office telephone number...',
		),
		6 => array (
			'id' => '6',
			'type' => 'email',
			'label' => 'Email',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Enter nominees email...',
		),
		24 => array (
			'id' => '24',
			'type' => 'text',
			'label' => 'Team Role and Involvement',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Enter team roles...',
		),
		27 => array (
			'id' => '27',
			'type' => 'textarea',
			'label' => 'Additional Nominee Information',
			'description' => 'Enter additional nominees and their information here...',
			'size' => 'medium',
		),
		15 => array (
			'id' => '15',
			'type' => 'pagebreak',
			'title' => 'Your Information',
			'next' => 'Next: Your Information',
			'prev_toggle' => '1',
			'prev' => 'Previous: Team Information',
		),
		8 => array (
			'id' => '8',
			'type' => 'divider',
			'label' => 'Nomination Submitted By',
			'label_disable' => '1',
		),
		9 => array (
			'id' => '9',
			'type' => 'checkbox',
			'label' => 'Relationship to Nominee',
			'choices' => array (
				1 => array (
					'label' => 'Colleague / Co-worker',
				),
				2 => array (
					'label' => 'Immediate Supervisor',
				),
				3 => array (
					'label' => 'Other',
				),
			),
			'required' => '1',
			'choices_images_style' => 'modern',
			'input_columns' => 'inline',
		),
		10 => array (
			'id' => '10',
			'type' => 'name',
			'label' => 'Your Name',
			'format' => 'first-last',
			'required' => '1',
			'size' => 'large',
			'first_placeholder' => 'Enter your first name...',
			'last_placeholder' => 'Enter your last name...',
		),
		11 => array (
			'id' => '11',
			'type' => 'text',
			'label' => 'Your Title',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Enter your title...',
		),
		12 => array (
			'id' => '12',
			'type' => 'text',
			'label' => 'Your Department / Unit',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Enter your department...',
		),
		13 => array (
			'id' => '13',
			'type' => 'phone',
			'label' => 'Your Office Telephone Number',
			'format' => 'us',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Enter your office telelphone number...',
		),
		14 => array (
			'id' => '14',
			'type' => 'email',
			'label' => 'Your Email',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Enter your office email...',
		),
		28 => array (
			'id' => '28',
			'type' => 'pagebreak',
			'title' => 'Reason for Nomination',
			'next' => 'Next: Reason for Nomination',
			'prev_toggle' => '1',
			'prev' => 'Previous: Nominee Information',
		),
		29 => array (
			'id' => '29',
			'type' => 'divider',
			'label' => 'Reason for Nomination',
			'label_disable' => '1',
		),
		30 => array (
			'id' => '30',
			'type' => 'html',
			'code' => '<p>The Dreamwork Award is given to a team of individuals for innovative problem solving and continuous improvement efforts that produce significant and quantifiable results in process improvement and problem solving.	Please describe how the team you are nominating significantly contributed to the success of the College by demonstrating one or more of the following:</p>
<p>1.Producing results by identifying, creating, and implementing innovative solutions to improve the way work is done, making it easier, more efficient and/or less costly.</p>
<p>2.Implementing a process improvement project that resulted in quantifiable benefit to the department and/or college.</p>
<p>3.Demonstrating leadership and collaboration by working across multiple departments to improve processes that resulted in quicker turnaround times, improved service levels, and/or improved efficiencies.</p>
<p>4.Exhibiting teamwork and coordination of efforts that resulted in service improvement.</p>
',
			'label_disable' => '1',
		),
		31 => array (
			'id' => '31',
			'type' => 'textarea',
			'label' => 'Reason for Nomination',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Please explain in detail and using the above criteria why you are making this nomination...',
		),
		17 => array (
			'id' => '17',
			'type' => 'pagebreak',
			'position' => 'bottom',
			'prev_toggle' => '1',
			'prev' => 'Previous: Your Information',
		),
	),
	'settings' => array (
		'form_title' => 'Dreamwork Award',
		'submit_text' => 'Submit',
		'submit_text_processing' => 'Sending...',
		'honeypot' => '1',
		'notification_enable' => '1',
		'notifications' => array (
			1 => array (
				'notification_name' => 'Default Notification',
				'email' => 'AwardsFaculty@germanna.edu, mhummel@germanna.edu',
				'subject' => 'New Entry: Classified Dreamwork Award',
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
		'template' => 'dreamwork_award',
	),
);
	}
}
new WPForms_Template_dreamwork_award;
endif; ?>
