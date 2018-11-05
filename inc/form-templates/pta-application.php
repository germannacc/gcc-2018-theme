<?php if ( class_exists( 'WPForms_Template' ) ) :
/**
 * PTA Application
 * Template for WPForms.
 */
class WPForms_Template_pta_application extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		// Template name
		$this->name = 'PTA Application';

		// Template slug
		$this->slug = 'pta_application';

		// Template description
		$this->description = '';

		// Template field and settings
		$this->data = array (
	'field_id' => 44,
	'fields' => array (
		1 => array (
			'id' => '1',
			'type' => 'text',
			'label' => 'Your Name',
			'required' => '1',
			'size' => 'large',
			'css' => 'wpforms-one-half wpforms-first',
		),
		2 => array (
			'id' => '2',
			'type' => 'text',
			'label' => 'Address',
			'required' => '1',
			'size' => 'large',
			'css' => 'wpforms-one-half',
		),
		3 => array (
			'id' => '3',
			'type' => 'text',
			'label' => 'City',
			'required' => '1',
			'size' => 'large',
			'css' => 'wpforms-one-third wpforms-first',
		),
		4 => array (
			'id' => '4',
			'type' => 'select',
			'label' => 'State',
			'choices' => array (
				0 => array (
					'label' => 'Alabama',
				),
				1 => array (
					'label' => 'Alaska',
				),
				2 => array (
					'label' => 'Arizona',
				),
				3 => array (
					'label' => 'Arkansas',
				),
				4 => array (
					'label' => 'California',
				),
				5 => array (
					'label' => 'Colorado',
				),
				6 => array (
					'label' => 'Connecticut',
				),
				7 => array (
					'label' => 'Delaware',
				),
				8 => array (
					'label' => 'Florida',
				),
				9 => array (
					'label' => 'Georgia',
				),
				10 => array (
					'label' => 'Hawaii',
				),
				11 => array (
					'label' => 'Idaho',
				),
				12 => array (
					'label' => 'Illinois',
				),
				13 => array (
					'label' => 'Indiana',
				),
				14 => array (
					'label' => 'Iowa',
				),
				15 => array (
					'label' => 'Kansas',
				),
				16 => array (
					'label' => 'Kentucky',
				),
				17 => array (
					'label' => 'Louisiana',
				),
				18 => array (
					'label' => 'Maine',
				),
				19 => array (
					'label' => 'Maryland',
				),
				20 => array (
					'label' => 'Massachusetts',
				),
				21 => array (
					'label' => 'Michigan',
				),
				22 => array (
					'label' => 'Minnesota',
				),
				23 => array (
					'label' => 'Mississippi',
				),
				24 => array (
					'label' => 'Missouri',
				),
				25 => array (
					'label' => 'Montana',
				),
				26 => array (
					'label' => 'Nebraska',
				),
				27 => array (
					'label' => 'Nevada',
				),
				28 => array (
					'label' => 'New Hampshire',
				),
				29 => array (
					'label' => 'New Jersey',
				),
				30 => array (
					'label' => 'New Mexico',
				),
				31 => array (
					'label' => 'New York',
				),
				32 => array (
					'label' => 'North Carolina',
				),
				33 => array (
					'label' => 'North Dakota',
				),
				34 => array (
					'label' => 'Ohio',
				),
				35 => array (
					'label' => 'Oklahoma',
				),
				36 => array (
					'label' => 'Oregon',
				),
				37 => array (
					'label' => 'Pennsylvania',
				),
				38 => array (
					'label' => 'Rhode Island',
				),
				39 => array (
					'label' => 'South Carolina',
				),
				40 => array (
					'label' => 'South Dakota',
				),
				41 => array (
					'label' => 'Tennessee',
				),
				42 => array (
					'label' => 'Texas',
				),
				43 => array (
					'label' => 'Utah',
				),
				44 => array (
					'label' => 'Vermont',
				),
				45 => array (
					'label' => 'Virginia',
				),
				46 => array (
					'label' => 'Washington',
				),
				47 => array (
					'label' => 'West Virginia',
				),
				48 => array (
					'label' => 'Wisconsin',
				),
				49 => array (
					'label' => 'Wyoming',
				),
			),
			'required' => '1',
			'size' => 'large',
			'placeholder' => '---',
			'css' => 'wpforms-one-third',
		),
		5 => array (
			'id' => '5',
			'type' => 'text',
			'label' => 'ZipCode',
			'required' => '1',
			'size' => 'large',
			'css' => 'wpforms-one-third',
		),
		6 => array (
			'id' => '6',
			'type' => 'phone',
			'label' => 'Phone',
			'format' => 'us',
			'required' => '1',
			'size' => 'large',
			'css' => 'wpforms-one-half wpforms-first',
		),
		7 => array (
			'id' => '7',
			'type' => 'email',
			'label' => 'VCCS Email',
			'required' => '1',
			'size' => 'large',
			'placeholder' => '@email.vccs.edu',
			'css' => 'wpforms-one-half wpf-vccs-email wpf-vccs-alert',
			'conditional_logic' => '1',
			'conditional_type' => 'show',
			'conditionals' => array (
				0 => array (
					0 => array (
						'operator' => '==',
					),
				),
			),
		),
		37 => array (
			'id' => '37',
			'type' => 'html',
			'code' => '<span id="result"></span>
',
			'label_disable' => '1',
		),
		43 => array (
			'id' => '43',
			'type' => 'html',
			'code' => '<hr/>
<h2>Information Session</h2>

',
			'label_disable' => '1',
		),
		32 => array (
			'id' => '32',
			'type' => 'html',
			'code' => '<p>I attended a PTA Information Session</p>',
			'label_disable' => '1',
			'css' => 'wpforms-two-thirds wpforms-first',
		),
		8 => array (
			'id' => '8',
			'type' => 'select',
			'label' => 'Attended Session',
			'choices' => array (
				0 => array (
					'label' => 'yes',
				),
				1 => array (
					'label' => 'no',
				),
			),
			'required' => '1',
			'size' => 'large',
			'placeholder' => '---',
			'css' => 'wpforms-one-third',
		),
		34 => array (
			'id' => '34',
			'type' => 'html',
			'code' => '<p>If you attended...please provide the month and year of attendance:</p>',
			'label_disable' => '1',
			'css' => 'wpforms-two-fourths wpforms-first',
		),
		9 => array (
			'id' => '9',
			'type' => 'select',
			'label' => 'Month Attended',
			'choices' => array (
				0 => array (
					'label' => 'January',
				),
				1 => array (
					'label' => 'February',
				),
				2 => array (
					'label' => 'March',
				),
				3 => array (
					'label' => 'April',
				),
				4 => array (
					'label' => 'May',
				),
				5 => array (
					'label' => 'June',
				),
				6 => array (
					'label' => 'July',
				),
				7 => array (
					'label' => 'August',
				),
				8 => array (
					'label' => 'September',
				),
				9 => array (
					'label' => 'October',
				),
				10 => array (
					'label' => 'November',
				),
				11 => array (
					'label' => 'December',
				),
			),
			'size' => 'large',
			'placeholder' => '---',
			'css' => 'wpforms-one-fourth',
		),
		10 => array (
			'id' => '10',
			'type' => 'select',
			'label' => 'Year Attended',
			'choices' => array (
				4 => array (
					'label' => '2018',
				),
				0 => array (
					'label' => '2017',
				),
				1 => array (
					'label' => '2016',
				),
				2 => array (
					'label' => '2015',
				),
				3 => array (
					'label' => '2014',
				),
			),
			'size' => 'large',
			'placeholder' => '---',
			'css' => 'wpforms-one-fourth',
		),
		38 => array (
			'id' => '38',
			'type' => 'html',
			'code' => '<hr/>
<h2>Background Check</h2>',
			'label_disable' => '1',
		),
		33 => array (
			'id' => '33',
			'type' => 'html',
			'code' => '<p>*Background check completed through Castle Branch:</p>',
			'label_disable' => '1',
			'css' => 'wpforms-two-thirds wpforms-first',
		),
		11 => array (
			'id' => '11',
			'type' => 'select',
			'label' => 'Yes/No',
			'choices' => array (
				0 => array (
					'label' => 'yes',
				),
				1 => array (
					'label' => 'no',
				),
			),
			'required' => '1',
			'size' => 'large',
			'placeholder' => '---',
			'css' => 'wpforms-one-third',
		),
		31 => array (
			'id' => '31',
			'type' => 'html',
			'code' => '<hr/>
<h2>Drug Screening</h2>',
			'label_disable' => '1',
		),
		39 => array (
			'id' => '39',
			'type' => 'html',
			'code' => '<p>*Drug screen completed through Castle Branch:</p>',
			'label_disable' => '1',
			'css' => 'wpforms-two-thirds wpforms-first',
		),
		12 => array (
			'id' => '12',
			'type' => 'select',
			'label' => 'Drug Screening',
			'choices' => array (
				0 => array (
					'label' => 'yes',
				),
				1 => array (
					'label' => 'no',
				),
			),
			'required' => '1',
			'size' => 'large',
			'placeholder' => '---',
			'css' => 'wpforms-one-third',
		),
		30 => array (
			'id' => '30',
			'type' => 'html',
			'code' => '<hr/>
<h2>Volunteer or Observation Hours</h2>
',
			'label_disable' => '1',
		),
		26 => array (
			'id' => '26',
			'type' => 'html',
			'code' => '<p>*Provide the name of the facilities at which you did volunteer hours along with the number of hours:</p>
',
			'label_disable' => '1',
		),
		13 => array (
			'id' => '13',
			'type' => 'text',
			'label' => 'Inpatient Location',
			'size' => 'large',
			'css' => 'wpforms-one-fourth wpforms-first',
		),
		14 => array (
			'id' => '14',
			'type' => 'text',
			'label' => 'Inpatient Hours',
			'size' => 'large',
			'placeholder' => 'Number of Hours',
			'css' => 'wpforms-one-fourth',
		),
		15 => array (
			'id' => '15',
			'type' => 'text',
			'label' => 'Outpatient Location',
			'size' => 'large',
			'css' => 'wpforms-one-fourth',
		),
		16 => array (
			'id' => '16',
			'type' => 'text',
			'label' => 'Outpatient Hours',
			'size' => 'large',
			'placeholder' => 'Number of Hours',
			'css' => 'wpforms-one-fourth',
		),
		29 => array (
			'id' => '29',
			'type' => 'html',
			'code' => '<hr/>
<h2>Essential Functions</h2>

',
			'label_disable' => '1',
		),
		40 => array (
			'id' => '40',
			'type' => 'html',
			'code' => '<p>*I have read and understand the Essential Functions for the PTA student. (Check "I can comply" if you are able to meet all these expectations. Check "I will need to consult with disability services" if you feel you need accommodations for any of the expectations.)</p>

<p><a href="https://www.germanna.edu/pathways/health-science/physical-therapist-assistant/">View Essential Functions</a></p>',
			'label_disable' => '1',
		),
		17 => array (
			'id' => '17',
			'type' => 'checkbox',
			'label' => 'Essential Functions',
			'choices' => array (
				0 => array (
					'label' => 'I can comply',
				),
				1 => array (
					'label' => 'I will need to consult with disability services',
				),
			),
			'required' => '1',
			'choices_images_style' => 'modern',
			'input_columns' => '2',
		),
		35 => array (
			'id' => '35',
			'type' => 'html',
			'code' => '<hr/>
<h2>Personal Statement Essay</h2>

<p>*Copy and paste your Personal Statement essay here (600 words max)</p>',
			'label_disable' => '1',
		),
		18 => array (
			'id' => '18',
			'type' => 'textarea',
			'label' => 'Personal Statement',
			'required' => '1',
			'size' => 'medium',
			'placeholder' => 'Paste your 600 word essay here.',
			'css' => 'wpf-char-limit-pta',
		),
		42 => array (
			'id' => '42',
			'type' => 'html',
			'code' => '<hr/>
<h2>Signature</h2>
',
			'label_disable' => '1',
		),
		41 => array (
			'id' => '41',
			'type' => 'html',
			'code' => '<p>*I certify that I am the author of this essay.
</p>',
			'label_disable' => '1',
		),
		19 => array (
			'id' => '19',
			'type' => 'text',
			'label' => 'Signature',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Enter your name used for your signature.',
		),
	),
	'settings' => array (
		'form_title' => 'PTA Application',
		'submit_text' => 'Submit Application',
		'submit_text_processing' => 'Sending Application',
		'honeypot' => '1',
		'recaptcha' => '1',
		'notification_enable' => '1',
		'notifications' => array (
			3 => array (
				'notification_name' => 'Student Email Notification',
				'email' => '{field_id="7"}',
				'carboncopy' => 'kwhitacre@germanna.edu',
				'subject' => 'PTA Application Submission Confirmation',
				'sender_name' => 'Germanna PTA Program Admissions',
				'sender_address' => 'ptassistant@germanna.edu',
				'replyto' => 'ptassistant@germanna.edu',
				'message' => 'Thank you for your application to the PTA program at Germanna Community College. Notification of application standing in Phase I and invitation to interview is expected to go out no later than June 11, 2018. Please check your student email regularly during this time, in the event we need clarification on any portion of your application. Interviews are scheduled for June 20 and 21, and you should plan to be available for one hour.

All applicants are invited to a PTA Program Interview Preparation Workshop on Monday, May 21, 5:00 p.m. - 6:30 p.m., in room 206 of the Locust Grove campus. Please RSVP to <a href="mailto:mhawley@germanna.edu">mhawley@germanna.edu</a> with the subject line PTA Interview Workshop. Attendance at the workshop is optional.

--
This e-mail was sent from the Physical Therapist Assistant Application on the Germanna Community College website. (https://www.germanna.edu)',
			),
			1 => array (
				'notification_name' => 'PTA App Results for Laurie',
				'email' => 'kwhitacre@germanna.edu',
				'carboncopy' => 'ptassistant@germanna.edu, ldaigle@germanna.edu',
				'subject' => 'PTA Application Submission',
				'sender_name' => 'Germanna PTA Program Application ',
				'sender_address' => 'No_Reply_Germanna@germanna.edu',
				'replyto' => 'ptassistant@germanna.edu',
				'message' => '<h2>Applicant Information</h2>

<h2>{field_id="1"}</h2>

<p>{field_id="2"}</p>
<p>{field_id="3"}</p>
<p>{field_id="4"}</p>
<p>{field_id="5"}</p>
<p>{field_id="6"}</p>
<p>{field_id="7"}</p>

<h2>Information Session</h2>

<p>{field_id="8"}</p>

<p><strong>Month:</strong>{field_id="9"} </p>
<p><strong>Year:{field_id="10"}</p>

<h2>Background Check</h2>

<p>{field_id="11"}</p>

<h2>Drug Check</h2>

<p>{field_id="12"}</p>

<h2>Volunteer Hours</h2>
<p><strong>Inpatient Location</strong> {field_id="13"}</p>
<p><strong>Inpatient</strong> {field_id="14"}</p>
<p><strong>Outpatient Location</strong> {field_id="15"}</p>
<p<strong>Outpatient</strong> {field_id="16"}</p>

<h2>Essential Functions</h2>

<p>{field_id="17"}</p>

<h2>Personal Essay</h2>

{field_id="18"}

<h3>Signature</h3>
{field_id="19"}


--
This e-mail was sent from the physical therapist assistant application on Germanna Community College (https://www.germanna.edu)',
			),
		),
		'confirmation_type' => 'redirect',
		'confirmation_message' => 'Thank you for your application to the PTA program at Germanna Community College. Notification of application standing in Phase I and invitation to interview is expected to go out no later than June 11, 2018. Please check your student email regularly during this time, in the event we need clarification on any portion of your application. Interviews are scheduled for June 20 and 21, and you should plan to be available for one hour.

All applicants are invited to a PTA Program Interview Preparation Workshop on Monday, May 21, 5:00-6:30 p.m., in room 206 of the Locust Grove campus. Please RSVP to <a href="mailto:mhawley@germanna.edu">mhawley@germanna.edu</a> with the subject line PTA Interview Workshop. Attendance at the workshop is optional.

This e-mail was sent from the Physical Therapist Assistant application on the Germanna Community College website.',
		'confirmation_message_scroll' => '1',
		'confirmation_page' => '25',
		'confirmation_redirect' => 'https://www.germanna.edu/physical-therapist-assistant/application-confirmation/',
	),
	'meta' => array (
		'template' => 'pta_application',
	),
);
	}
}
new WPForms_Template_pta_application;
endif; ?>
