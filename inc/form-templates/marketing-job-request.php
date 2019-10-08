<?php if ( class_exists( 'WPForms_Template' ) ) :
/**
 * Marketing Job Request
 * Template for WPForms.
 */
class WPForms_Template_marketing_job_request extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		// Template name
		$this->name = 'Marketing Job Request';

		// Template slug
		$this->slug = 'marketing_job_request';

		// Template description
		$this->description = '';

		// Template field and settings
		$this->data = array (
	'field_id' => 32,
	'fields' => array (
		24 => array (
			'id' => '24',
			'type' => 'divider',
			'label' => 'Request Details',
			'label_disable' => '1',
		),
		3 => array (
			'id' => '3',
			'type' => 'select',
			'label' => 'Request Type',
			'choices' => array (
				1 => array (
					'label' => 'Axis TV Slide',
				),
				2 => array (
					'label' => 'Brochure',
				),
				3 => array (
					'label' => 'Flyer',
				),
				11 => array (
					'label' => 'Invitation',
				),
				10 => array (
					'label' => 'Photography/Media Request',
				),
				9 => array (
					'label' => 'Poster',
				),
				8 => array (
					'label' => 'Program',
				),
				7 => array (
					'label' => 'Social Media Submission',
				),
				13 => array (
					'label' => 'Website Content Update',
				),
				12 => array (
					'label' => 'Page Alert Announcement',
				),
			),
			'description' => 'Please select a task you need help with.',
			'size' => 'large',
			'css' => 'wpforms-two-fourths wpforms-first',
		),
		5 => array (
			'id' => '5',
			'type' => 'date-time',
			'label' => 'Today\'s Date',
			'format' => 'date',
			'required' => '1',
			'size' => 'large',
			'date_format' => 'F j, Y',
			'date_type' => 'datepicker',
			'time_format' => 'g:i A',
			'time_interval' => '30',
			'css' => 'wpforms-one-fourth',
		),
		6 => array (
			'id' => '6',
			'type' => 'date-time',
			'label' => 'Requested Due Date',
			'format' => 'date',
			'description' => '*Please allow up to 3 days for project completion.',
			'required' => '1',
			'size' => 'large',
			'date_format' => 'F j, Y',
			'date_type' => 'datepicker',
			'time_format' => 'g:i A',
			'time_interval' => '30',
			'css' => 'wpforms-one-fourth',
		),
		28 => array (
			'id' => '28',
			'type' => 'html',
			'code' => '<hr/>',
			'label_disable' => '1',
		),
		25 => array (
			'id' => '25',
			'type' => 'divider',
			'label' => 'Requestor Information',
			'label_disable' => '1',
		),
		9 => array (
			'id' => '9',
			'type' => 'text',
			'label' => 'Requestor',
			'description' => 'Enter your name.',
			'required' => '1',
			'size' => 'large',
			'css' => 'wpforms-one-third wpforms-first',
		),
		7 => array (
			'id' => '7',
			'type' => 'text',
			'label' => 'Department',
			'required' => '1',
			'size' => 'large',
			'css' => 'wpforms-one-third',
		),
		8 => array (
			'id' => '8',
			'type' => 'text',
			'label' => 'Telephone Number',
			'required' => '1',
			'size' => 'large',
			'css' => 'wpforms-one-third',
		),
		10 => array (
			'id' => '10',
			'type' => 'text',
			'label' => 'Final Review',
			'description' => 'Enter the name of the individual who will proof for the group and who will sign off on the project at it\'s completion.',
			'required' => '1',
			'size' => 'large',
		),
		29 => array (
			'id' => '29',
			'type' => 'html',
			'code' => '<hr/>',
			'label_disable' => '1',
		),
		26 => array (
			'id' => '26',
			'type' => 'divider',
			'label' => 'Project Details',
			'label_disable' => '1',
		),
		11 => array (
			'id' => '11',
			'type' => 'checkbox',
			'label' => 'Audience',
			'choices' => array (
				1 => array (
					'label' => 'Public',
				),
				2 => array (
					'label' => 'Internal GCC',
				),
				3 => array (
					'label' => 'Students Only',
				),
			),
			'description' => 'Please check all intended audience that apply.',
			'required' => '1',
			'choices_images_style' => 'modern',
			'input_columns' => '3',
		),
		13 => array (
			'id' => '13',
			'type' => 'checkbox',
			'label' => 'Printing Type',
			'choices' => array (
				1 => array (
					'label' => 'Black and White',
				),
				2 => array (
					'label' => 'Color',
				),
				3 => array (
					'label' => 'Printing In House',
				),
				4 => array (
					'label' => 'Outside Printer',
				),
			),
			'choices_images_style' => 'modern',
			'css' => 'wpforms-one-half wpforms-first',
			'conditional_logic' => '1',
			'conditional_type' => 'show',
			'conditionals' => array (
				0 => array (
					0 => array (
						'field' => '3',
						'operator' => '==',
						'value' => '2',
					),
				),
				1 => array (
					0 => array (
						'field' => '3',
						'operator' => '==',
						'value' => '3',
					),
				),
				2 => array (
					0 => array (
						'field' => '3',
						'operator' => '==',
						'value' => '11',
					),
				),
				3 => array (
					0 => array (
						'field' => '3',
						'operator' => '==',
						'value' => '9',
					),
				),
				4 => array (
					0 => array (
						'field' => '3',
						'operator' => '==',
						'value' => '8',
					),
				),
			),
		),
		14 => array (
			'id' => '14',
			'type' => 'checkbox',
			'label' => 'Size of Print',
			'choices' => array (
				1 => array (
					'label' => '8.5 X 11',
				),
				2 => array (
					'label' => '11 X 17',
				),
				3 => array (
					'label' => '8.5 X 14',
				),
				4 => array (
					'label' => '22 X 28',
				),
			),
			'choices_images_style' => 'modern',
			'css' => 'wpforms-one-half',
			'conditional_logic' => '1',
			'conditional_type' => 'show',
			'conditionals' => array (
				0 => array (
					0 => array (
						'field' => '3',
						'operator' => '==',
						'value' => '2',
					),
				),
				1 => array (
					0 => array (
						'field' => '3',
						'operator' => '==',
						'value' => '3',
					),
				),
				2 => array (
					0 => array (
						'field' => '3',
						'operator' => '==',
						'value' => '11',
					),
				),
				3 => array (
					0 => array (
						'field' => '3',
						'operator' => '==',
						'value' => '9',
					),
				),
				4 => array (
					0 => array (
						'field' => '3',
						'operator' => '==',
						'value' => '8',
					),
				),
			),
		),
		21 => array (
			'id' => '21',
			'type' => 'text',
			'label' => 'Quantity',
			'size' => 'large',
			'conditional_logic' => '1',
			'conditional_type' => 'show',
			'conditionals' => array (
				0 => array (
					0 => array (
						'field' => '3',
						'operator' => '==',
						'value' => '2',
					),
				),
				1 => array (
					0 => array (
						'field' => '3',
						'operator' => '==',
						'value' => '3',
					),
				),
				2 => array (
					0 => array (
						'field' => '3',
						'operator' => '==',
						'value' => '9',
					),
				),
				3 => array (
					0 => array (
						'field' => '3',
						'operator' => '==',
						'value' => '11',
					),
				),
				4 => array (
					0 => array (
						'field' => '3',
						'operator' => '==',
						'value' => '8',
					),
				),
			),
		),
		15 => array (
			'id' => '15',
			'type' => 'radio',
			'label' => 'Processing',
			'choices' => array (
				1 => array (
					'label' => 'Yes',
				),
				2 => array (
					'label' => 'No',
				),
			),
			'description' => 'Will the final document need to be forwarded for further processing through uyour eVA pro, or the business office',
			'required' => '1',
			'choices_images_style' => 'modern',
			'input_columns' => '2',
			'css' => 'wpforms-one-half wpforms-firstwpforms-one-third wpforms-first',
			'conditional_logic' => '1',
			'conditional_type' => 'show',
			'conditionals' => array (
				0 => array (
					0 => array (
						'field' => '3',
						'operator' => '==',
						'value' => '2',
					),
					1 => array (
						'field' => '3',
						'operator' => '==',
						'value' => '3',
					),
					2 => array (
						'field' => '3',
						'operator' => '==',
						'value' => '11',
					),
					3 => array (
						'field' => '3',
						'operator' => '==',
						'value' => '9',
					),
					4 => array (
						'field' => '3',
						'operator' => '==',
						'value' => '8',
					),
					5 => array (
						'field' => '3',
						'operator' => '==',
					),
				),
			),
		),
		16 => array (
			'id' => '16',
			'type' => 'radio',
			'label' => 'Budget',
			'choices' => array (
				1 => array (
					'label' => 'Yes',
				),
				2 => array (
					'label' => 'No',
				),
			),
			'description' => 'Is there a budget available to pay for this project?',
			'required' => '1',
			'choices_images_style' => 'modern',
			'input_columns' => '2',
			'css' => 'wpforms-one-half',
			'conditional_logic' => '1',
			'conditional_type' => 'show',
			'conditionals' => array (
				0 => array (
					0 => array (
						'field' => '3',
						'operator' => '==',
						'value' => '2',
					),
					1 => array (
						'field' => '3',
						'operator' => '==',
						'value' => '3',
					),
					2 => array (
						'field' => '3',
						'operator' => '==',
						'value' => '11',
					),
					3 => array (
						'field' => '3',
						'operator' => '==',
						'value' => '9',
					),
					4 => array (
						'field' => '3',
						'operator' => '==',
						'value' => '8',
					),
					5 => array (
						'field' => '3',
						'operator' => '==',
					),
				),
			),
		),
		17 => array (
			'id' => '17',
			'type' => 'text',
			'label' => 'Budget Code',
			'required' => '1',
			'size' => 'large',
			'css' => 'wpforms-one-third',
			'conditional_logic' => '1',
			'conditional_type' => 'show',
			'conditionals' => array (
				0 => array (
					0 => array (
						'field' => '3',
						'operator' => '==',
						'value' => '2',
					),
					1 => array (
						'field' => '3',
						'operator' => '==',
						'value' => '3',
					),
					2 => array (
						'field' => '3',
						'operator' => '==',
						'value' => '11',
					),
					3 => array (
						'field' => '3',
						'operator' => '==',
						'value' => '9',
					),
					4 => array (
						'field' => '3',
						'operator' => '==',
						'value' => '8',
					),
					5 => array (
						'field' => '3',
						'operator' => '==',
					),
				),
			),
		),
		18 => array (
			'id' => '18',
			'type' => 'file-upload',
			'label' => 'Attach a File',
			'extensions' => '.doc, .docx, .pdf, .jpg, .gif, .png, .xlsx, .xls',
			'max_size' => '10',
			'css' => 'wpforms-one-third',
		),
		20 => array (
			'id' => '20',
			'type' => 'text',
			'label' => 'Page URL',
			'description' => 'Enter the web page url that the content needs to be added to.',
			'required' => '1',
			'size' => 'large',
			'conditional_logic' => '1',
			'conditional_type' => 'show',
			'conditionals' => array (
				0 => array (
					0 => array (
						'field' => '3',
						'operator' => '==',
						'value' => '13',
					),
				),
				1 => array (
					0 => array (
						'field' => '3',
						'operator' => '==',
						'value' => '12',
					),
				),
			),
		),
		19 => array (
			'id' => '19',
			'type' => 'textarea',
			'label' => 'Job Request Details',
			'description' => 'Please enter detailed information of the project you are requesting.',
			'required' => '1',
			'size' => 'medium',
		),
		31 => array (
			'id' => '31',
			'type' => 'hidden',
			'label' => 'Progress',
			'label_disable' => '1',
		),
	),
	'settings' => array (
		'form_title' => 'Marketing Job Request',
		'submit_text' => 'Submit',
		'submit_text_processing' => 'Sending...',
		'honeypot' => '1',
		'notification_enable' => '1',
		'notifications' => array (
			1 => array (
				'notification_name' => 'Default Notification',
				'email' => 'mhummel@germanna.edu',
				'carboncopy' => 'MZBeckham@germanna.edu',
				'subject' => 'New Marketing Job Request Entry',
				'sender_name' => 'Germanna Community College',
				'sender_address' => '{admin_email}',
				'message' => '{all_fields}',
			),
		),
		'confirmation_type' => 'message',
		'confirmation_message' => 'Thanks for contacting us! We will be in touch with you shortly.',
		'confirmation_message_scroll' => '1',
		'confirmation_page' => '25',
	),
	'meta' => array (
		'template' => 'marketing_job_request',
		'entry_columns' => array (
			0 => 9,
			1 => 6,
			2 => 3,
			3 => 17,
			4 => 31,
		),
	),
);
	}
}
new WPForms_Template_marketing_job_request;
endif; ?>
