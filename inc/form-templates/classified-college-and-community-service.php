<?php if ( class_exists( 'WPForms_Template' ) ) :
/**
 * Classified College and Community Service Award
 * Template for WPForms.
 */
class WPForms_Template_classified_college_and_community_service_award extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		// Template name
		$this->name = 'Classified College and Community Service Award';

		// Template slug
		$this->slug = 'classified_college_and_community_service_award';

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
		20 => array (
			'id' => '20',
			'type' => 'pagebreak',
			'title' => 'Reason for Nomination',
			'next' => 'Next: Reason for Nomination',
			'prev_toggle' => '1',
			'prev' => 'Previous: Your Information',
		),
		21 => array (
			'id' => '21',
			'type' => 'divider',
			'label' => 'Reason for Nomination',
			'label_disable' => '1',
		),
		22 => array (
			'id' => '22',
			'type' => 'html',
			'code' => '<p>The College and Community Service Award is given to employees who have significantly impacted the College and/or the community.	Please specifically describe how your nominee has demonstrated/achieved one or more of the following:</p>
<p>1.Significant involvement in community and /or college events to include but not limited to charity fundraisers, events to foster college awareness and/or other events designed to benefit the local community and college.</p>
<p>2.Providing noteworthy leadership for a major college or community initiative.</p>
<p>3.Singly or jointly achieving a major college or community accomplishment that supports the college mission, programs, or VCCS goals.</p>
<p>4.Chairing a committee or task force that leads to a significant improvement or strategic partnership between the college and community affiliates.</p>
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
		'form_title' => 'Classified College and Community Service Award',
		'submit_text' => 'Submit',
		'submit_text_processing' => 'Sending...',
		'honeypot' => '1',
		'notification_enable' => '1',
		'notifications' => array (
			1 => array (
				'notification_name' => 'Default Notification',
				'email' => 'AwardsFaculty@germanna.edu, mhummel@germanna.edu',
				'subject' => 'New Entry: Classified College and Community Service Award',
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
		'template' => 'classified_college_and_community_service_award',
	),
);
	}
}
new WPForms_Template_classified_college_and_community_service_award;
endif; ?>
