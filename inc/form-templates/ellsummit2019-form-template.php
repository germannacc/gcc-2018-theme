<?php 
if ( class_exists( 'WPForms_Template', false ) ) :
/**
 * English Language Learner Summit
 * Template for WPForms.
 */
class WPForms_Template_english_language_learner_summit extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		// Template name
		$this->name = 'English Language Learner Summit';

		// Template slug
		$this->slug = 'english_language_learner_summit';

		// Template description
		$this->description = '';

		// Template field and settings
		$this->data = array (
	'field_id' => 10,
	'fields' => array (
		8 => array (
			'id' => '8',
			'type' => 'text',
			'label' => 'First Name:',
			'required' => '1',
			'size' => 'medium',
		),
		7 => array (
			'id' => '7',
			'type' => 'text',
			'label' => 'Last Name:',
			'required' => '1',
			'size' => 'medium',
		),
		2 => array (
			'id' => '2',
			'type' => 'text',
			'label' => 'Organization:',
			'required' => '1',
			'size' => 'medium',
		),
		9 => array (
			'id' => '9',
			'type' => 'text',
			'label' => 'Title:',
			'required' => '1',
			'size' => 'medium',
		),
		4 => array (
			'id' => '4',
			'type' => 'email',
			'label' => 'Email address:',
			'required' => '1',
			'size' => 'medium',
		),
	),
	'settings' => array (
		'form_title' => 'English Language Learner Summit',
		'submit_text' => 'Submit',
		'submit_text_processing' => 'Sending...',
		'honeypot' => '1',
		'ajax_submit' => '1',
		'notification_enable' => '1',
		'notifications' => array (
			2 => array (
				'notification_name' => 'Registrant Confirmation',
				'email' => '{field_id="4"}',
				'subject' => 'GermannaCC English Language Learner Summit 2019',
				'sender_name' => 'Germanna Community College Educational Foundation',
				'sender_address' => 'No_Reply_Germanna@germanna.edu',
				'message' => '<h1>English Language Learner Summit</h1>
<h2>Date</h2>
Thursday, October 24, 2019

<h2>Time</h2>
9 a.m. - Noon

<h2>Location</h2>
10000 Germanna Point Drive <br/> Fredericksburg, VA <br/>Workforce Building<br/>Room 105

<a href="https://www.google.com/maps/place/Germanna+Community+College+-+Fredericksburg+Campus/@38.2321781,-77.4957946,17z/data=!3m1!4b1!4m5!3m4!1s0x89b6c6b57cba8c3f:0x95d8103f24c11e35!8m2!3d38.2321781!4d-77.4936059?hl=en">Get Directions</a>

<a href="https://www.google.com/calendar/render?action=TEMPLATE&text=English+Language+Learner+Summit+2019&details=Professor%2C+Leadership+Studies%2C+University+of+Richmond+Director%2C+Scholars+Latino+Initiative+%E2%80%93+Virginia%0A%0AJoin+us+for+a+morning+of+dialogue+and+networking+at+the+2nd+Annual+English+Language+Learner+Summit%2C+a+community+convening+for+interested+individuals%2C+educational+institutions%2C+and+community+organizations+working+to+serve+English+language+learners+in+the+region.&location=Fredericksburg+Area+Campus%0ARoom+105&dates=20191024T130000Z%2F20191024T160000Z">Add to Google Calendar</a>

<a href="https://www.germanna.edu/wp-content/uploads/english-language-learners-summit.ics">Add to Outlook</a>

Join us for a morning of dialogue and networking at the 2nd Annual English Language Learner Summit, a community convening for interested individuals, educational institutions, and community organizations working to serve English language learners in the region.

Keynote Speaker: Dr. Peter Kaufman, Professor, University of Richmond/Director, Scholars Latino Initiative - Virginia

{all_fields}',
			),
			1 => array (
				'notification_name' => 'Default Notification',
				'email' => 'marketing@germanna.edu, foundation@germanna.edu',
				'subject' => 'New Entry: English Language Learner Summit',
				'sender_name' => 'Germanna Community College',
				'sender_address' => 'No_Reply_Germanna@germanna.edu',
				'message' => '{all_fields}',
			),
		),
		'confirmations' => array (
			1 => array (
				'name' => 'Default Confirmation',
				'type' => 'message',
				'message' => '<p>Thank you for registering for the English Language Learner Summit. You will receive an e-mail confirmation of your registration shortly.</p>',
				'message_scroll' => '1',
				'page' => '25',
			),
		),
	),
	'meta' => array (
		'template' => 'english_language_learner_summit',
	),
);
	}
}
new WPForms_Template_english_language_learner_summit;
endif;