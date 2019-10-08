<?php if ( class_exists( 'WPForms_Template' ) ) :
/**
 * Classified Exceptional Support Award
 * Template for WPForms.
 */
class WPForms_Template_classified_exceptional_support_award extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		// Template name
		$this->name = 'Classified Exceptional Support Award';

		// Template slug
		$this->slug = 'classified_exceptional_support_award';

		// Template description
		$this->description = '';

		// Template field and settings
		$this->data = array (
	'field_id' => 24,
	'fields' => array (
		16 => array (
			'id' => '16',
			'type' => 'pagebreak',
			'position' => 'top',
			'indicator' => 'circles',
			'indicator_color' => '#a30936',
			'title' => 'Nominee Information',
			'nav_align' => 'left',
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
			'label' => 'Nominees Name',
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
			'label' => 'Department',
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
		15 => array (
			'id' => '15',
			'type' => 'pagebreak',
			'title' => 'Your Information',
			'next' => 'Next: Your Information',
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
		21 => array (
			'id' => '21',
			'type' => 'pagebreak',
			'title' => 'Reason for Nomination',
			'next' => 'Next: Reason for Nomination',
			'prev_toggle' => '1',
			'prev' => 'Previous: Nominee Information',
		),
		20 => array (
			'id' => '20',
			'type' => 'divider',
			'label' => 'Reason for Nomination',
			'label_disable' => '1',
		),
		22 => array (
			'id' => '22',
			'type' => 'html',
			'code' => '<p>Exceptional Support Award are given to employees who provide exceptional support that contributes to the success of students, their unit/department, and/or the College. Please describe specifically how has your nominee demonstrated/achieved one or more of the following:</p>
<p>1. Providing support to ensure that the functions and operations of the nominee’s department run smoothly, the result of which is a quantifiable improvement in one of the following:</p>
<ol>
<li>Improved quality and/or reduced errors.
<li>Improved efficiency.
<li>A better student and/or customer experience.
</ol>
<p>2.Contributing to the success of colleagues by sharing applicable knowledge and expertise that improves either service, quality, or efficiency of operations.</p>
<p>3.Getting results by identifying, creating, and implementing innovative solutions to improve the way work is done, making it easier and more efficient and/or less costly.</p>
<p>4.Going above and beyond to meet deadlines, fill in for co-workers to ensure continuity of operation, and assist other departments and students in a way that avoids deterioration in service that would have otherwise occurred without their personal commitment and involvement. </p>

',
			'label_disable' => '1',
		),
		23 => array (
			'id' => '23',
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
		'form_title' => 'Classified Exceptional Support Award',
		'submit_text' => 'Submit',
		'submit_text_processing' => 'Sending...',
		'honeypot' => '1',
		'notification_enable' => '1',
		'notifications' => array (
			1 => array (
				'notification_name' => 'Default Notification',
				'email' => 'AwardsFaculty@germanna.edu, mhummel@germanna.edu',
				'subject' => 'New Entry: Classified Exceptional Support Award',
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
		'template' => 'classified_exceptional_support_award',
	),
);
	}
}
new WPForms_Template_classified_exceptional_support_award;
endif; ?>
