<?php if ( class_exists( 'WPForms_Template' ) ) :
/**
 * Classified Quality Customer Service Award
 * Template for WPForms.
 */
class WPForms_Template_classified_quality_customer_service_award extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		// Template name
		$this->name = 'Classified Quality Customer Service Award';

		// Template slug
		$this->slug = 'classified_quality_customer_service_award';

		// Template description
		$this->description = '';

		// Template field and settings
		$this->data = array (
	'field_id' => 25,
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
			'code' => '<p>The Quality Customer Service Award is given to employees who provide exceptional service to internal and/or external customers.	Please describe specifically how your nominee has contributed to the success of students, their unit/department, and/or the College by demonstrating/achieving one or more of the following:</p>
<p>1.Providing extraordinary customer service to internal and/or external customers with timely and appropriate responsiveness that promotes a positive image for the College and the department by providing a better student and/or customer experience.</p>
<p>2.Showing exceptional initiative in “going the extra mile” to provide service to internal and/or external customers with timely and appropriate follow-up that results in a positive experience that would have been a negative experience without their personal involvement.</p>
<p>3.Responding to the needs of students or customers to enhance the department and/or furthers the mission of the College.</p>
<p>4.Demonstrating creative approaches to solving customer problems that exhibits “out-of-the box” thinking.</p>
',
			'label_disable' => '1',
		),
		24 => array (
			'id' => '24',
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
		'form_title' => 'Classified Quality Customer Service Award',
		'submit_text' => 'Submit',
		'submit_text_processing' => 'Sending...',
		'honeypot' => '1',
		'notification_enable' => '1',
		'notifications' => array (
			1 => array (
				'notification_name' => 'Default Notification',
				'email' => 'AwardsFaculty@germanna.edu, mhummel@germanna.edu',
				'subject' => 'New Entry: Classified Quality Customer Service Award',
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
		'template' => 'classified_quality_customer_service_award',
	),
);
	}
}
new WPForms_Template_classified_quality_customer_service_award;
endif; ?>
