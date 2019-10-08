<?php if ( class_exists( 'WPForms_Template' ) ) :
/**
 * Teaching and Faculty Multicultural Enrichment Award
 * Template for WPForms.
 */
class WPForms_Template_teaching_and_faculty_multicultural_enrichment_award_ extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		// Template name
		$this->name = 'Teaching and Faculty Multicultural Enrichment Award';

		// Template slug
		$this->slug = 'teaching_and_faculty_multicultural_enrichment_award_';

		// Template description
		$this->description = '';

		// Template field and settings
		$this->data = array (
	'field_id' => 32,
	'fields' => array (
		27 => array (
			'id' => '27',
			'type' => 'pagebreak',
			'position' => 'top',
			'indicator' => 'circles',
			'indicator_color' => '#a30936',
			'title' => 'Nominee Information',
		),
		14 => array (
			'id' => '14',
			'type' => 'divider',
			'label' => 'Nominee Information',
			'label_disable' => '1',
		),
		30 => array (
			'id' => '30',
			'type' => 'checkbox',
			'label' => 'Teaching Status',
			'choices' => array (
				1 => array (
					'label' => 'Full-time',
				),
				2 => array (
					'label' => 'Part-time / Adjunct',
				),
			),
			'required' => '1',
			'choices_images_style' => 'modern',
			'input_columns' => 'inline',
		),
		13 => array (
			'id' => '13',
			'type' => 'name',
			'label' => 'Nominees Name',
			'format' => 'first-last',
			'required' => '1',
			'size' => 'large',
			'first_placeholder' => 'Enter nominees first name...',
			'last_placeholder' => 'Enter nominees last name...',
		),
		15 => array (
			'id' => '15',
			'type' => 'text',
			'label' => 'Teaching Discipline / Academic School',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Enter nominees teaching discipline or academic school...',
		),
		17 => array (
			'id' => '17',
			'type' => 'phone',
			'label' => 'Nominees Office Telephone #',
			'format' => 'us',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Enter nominees office telephone number...',
		),
		18 => array (
			'id' => '18',
			'type' => 'email',
			'label' => 'Nominees Email',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Enter nominees Germanna email...',
		),
		26 => array (
			'id' => '26',
			'type' => 'pagebreak',
			'title' => 'Your Information',
			'next' => 'Next: Your Information',
		),
		19 => array (
			'id' => '19',
			'type' => 'divider',
			'label' => 'Nomination Submitted By',
			'label_disable' => '1',
		),
		31 => array (
			'id' => '31',
			'type' => 'checkbox',
			'label' => 'Relationship to Nominee',
			'choices' => array (
				1 => array (
					'label' => 'Faculty Colleague',
				),
				2 => array (
					'label' => 'Dean/Supervisor',
				),
				3 => array (
					'label' => 'Other',
				),
			),
			'required' => '1',
			'choices_images_style' => 'modern',
			'input_columns' => 'inline',
		),
		20 => array (
			'id' => '20',
			'type' => 'name',
			'label' => 'Your Name',
			'format' => 'first-last',
			'required' => '1',
			'size' => 'large',
			'first_placeholder' => 'Enter your first name...',
			'last_placeholder' => 'Enter you last name...',
		),
		21 => array (
			'id' => '21',
			'type' => 'text',
			'label' => 'Title',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Enter your title...',
		),
		22 => array (
			'id' => '22',
			'type' => 'text',
			'label' => 'School / Department',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Enter your school or department...',
		),
		23 => array (
			'id' => '23',
			'type' => 'phone',
			'label' => 'Your Office Telephone #',
			'format' => 'us',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Enter your office telephone number...',
		),
		24 => array (
			'id' => '24',
			'type' => 'email',
			'label' => 'Your Email',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Enter your Germanna email...',
		),
		29 => array (
			'id' => '29',
			'type' => 'pagebreak',
			'title' => 'Reason for Nomination',
			'next' => 'Next: Reason for Nomination',
			'prev_toggle' => '1',
			'prev' => 'Previous: Nominee Information',
		),
		25 => array (
			'id' => '25',
			'type' => 'divider',
			'label' => 'Reason for Nomination',
			'label_disable' => '1',
		),
		8 => array (
			'id' => '8',
			'type' => 'textarea',
			'label' => 'Question 1',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'In the space provided below, please provide a brief summary of the candidate\'s accomplishments, contributions, or activities that merit this award. Please identify which area(s) from among the following are most closely associated with the accomplishments, contributions, or activities.',
		),
		7 => array (
			'id' => '7',
			'type' => 'checkbox',
			'label' => 'Identify Areas',
			'choices' => array (
				0 => array (
					'label' => 'Displaying an enthusiasm for the different cultures represented throughout our college campuses',
				),
				1 => array (
					'label' => 'Striving to create enthusiasm and a positive attitude in others towards celebrating differences in culture',
				),
				2 => array (
					'label' => 'Conducting activities or events that are designed to enrich multiculturalism and diversity at our college',
				),
			),
			'required' => '1',
			'choices_images_style' => 'modern',
		),
		9 => array (
			'id' => '9',
			'type' => 'textarea',
			'label' => 'Question 2',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'In the space provided below, please describe how the candidate\'s accomplishments, contributions, or activities supporting this award are innovative, distinctive, or impactful.',
		),
		10 => array (
			'id' => '10',
			'type' => 'textarea',
			'label' => 'Question 3',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'In the space provided below, please describe how the candidate\'s accomplishments, contributions, or activities associated with this award were supportive of student learning outcomes and the college mission.',
		),
		11 => array (
			'id' => '11',
			'type' => 'textarea',
			'label' => 'Question 4',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'In the space provided below, please describe how the candidate\'s accomplishments, contributions, or activities associated with this award were supportive of the strategic goals of the college and/or the Virginia Community College System.',
		),
		12 => array (
			'id' => '12',
			'type' => 'textarea',
			'label' => 'Question 5',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'In the space provided below, please describe how the candidate\'s accomplishments, contributions, or activities associated with this award substantially exceeded performance expectations.',
		),
		28 => array (
			'id' => '28',
			'type' => 'pagebreak',
			'position' => 'bottom',
			'prev_toggle' => '1',
			'prev' => 'Previous: Your Information',
		),
	),
	'settings' => array (
		'form_title' => 'Teaching and Faculty Multicultural Enrichment Award ',
		'submit_text' => 'Submit',
		'submit_text_processing' => 'Sending',
		'honeypot' => '1',
		'notification_enable' => '1',
		'notifications' => array (
			1 => array (
				'notification_name' => 'Notification 1',
				'email' => 'AwardsFaculty@germanna.edu, marketing@germanna.edu',
				'subject' => 'New Entry: Multicultural Enrichment Award ',
				'sender_name' => 'Germanna Community College',
				'sender_address' => 'No_Reply_Germanna@germanna.edu',
				'message' => '{all_fields} ',
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
		'template' => 'teaching_and_faculty_multicultural_enrichment_award_',
	),
);
	}
}
new WPForms_Template_teaching_and_faculty_multicultural_enrichment_award_;
endif; ?>
