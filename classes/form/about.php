<?php
namespace local_lat_studentsettings\form;

defined('MOODLE_INTERNAL') || die();
require_once($CFG->libdir . '/formslib.php');

use moodleform;

class about extends moodleform
{
    public function definition()
    {
        $mform = $this->_form;
        $mform->addElement('html', '<div class="form_section">');
        $mform->addElement('html', '<h3 class="heading mb-3">' . 'Account Settings' . '</h3>');
        $mform->addElement('html', '<p class="prime_heading font-400">' . 'Profile Image' . '</p>');
        $mform->addElement('html', '<div class="d-flex justify-content-between">');
        $mform->addElement('html', '<img src="./img/profile.svg" alt="Adriana Adriana" class="profile_avatar">');
        $mform->addElement('html', '<div>');
        $mform->addElement('html', '<button class="mb-2 d-flex justify-content-between outline_btn font-14 font-600"><svg class="mr-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M15 3H7V6H2V17H12V14.874C11.1923 15.0825 10.3396 15.0334 9.56129 14.7333C8.78294 14.4333 8.11787 13.8974 7.65914 13.2007C7.20041 12.504 6.97097 11.6813 7.00294 10.8477C7.0349 10.0142 7.32667 9.21147 7.83741 8.55193C8.34815 7.89239 9.05231 7.40903 9.85135 7.16949C10.6504 6.92995 11.5043 6.9462 12.2937 7.21599C13.083 7.48578 13.7683 7.99559 14.2535 8.67409C14.7388 9.35259 14.9998 10.1658 15 11H20V6H15V3ZM18 12.586L18.707 13.293L22.207 16.793L20.793 18.207L19 16.414V21H17V16.414L15.207 18.207L13.793 16.793L17.293 13.293L18 12.586Z" fill="#121117"/>
        </svg>Upload photo</button>');
        $mform->addElement('html', '<p class="ml-2 short_muted_text">Maximum size – 2MB <br>JPG or PNG format</p>');
        $mform->addElement('html', '</div>');
        $mform->addElement('html', '</div>');

        // First name.
        $mform->addElement('text', 'firstname', 'First Name', ['placeholder' => '', 'class'=>"mt-70"]);
        $mform->setType('firstname', PARAM_TEXT);
        $mform->addRule('firstname', null, 'required', null, 'client');

        // Last name.
        $mform->addElement('text', 'lastname', 'Last Name', ['placeholder' => '']);
        $mform->setType('lastname', PARAM_TEXT);

        // Phone Number.
        $mform->addElement('text', 'phone', 'Phone number', ['placeholder' => '']);
        $mform->setType('lastname', PARAM_TEXT);
        $mform->addRule('lastname', null, 'required', null, 'client');


        // Timezone (optional).
        $timezones = \core_date::get_list_of_timezones();
        $mform->addElement(
            'select',
            'timezone',
            'Timezones',
            ['' => ''] + $timezones
        );
        $mform->setType('timezone', PARAM_TIMEZONE);
        
        $mform->addElement('html', '<p class="prime_heading font-400 mt-3 mb-3">' . 'Social networks' . '</p>');
        
        $mform->addElement('html', '<div class="d-flex align-items-start">');
        $mform->addElement('html', '<img src="./img/facebook.svg" class="mr-2">');
        
        $mform->addElement('html', '<div class="w-100">');
        $mform->addElement('html', '<p class="mb-1 prime_heading font-400">' . 'Not connected to Facebook account' . '</p>');
        $mform->addElement('html', '<button class="col-sm-5 mb-2 d-flex justify-content-center outline_btn font-14 font-600">Connect</button>');
        $mform->addElement('html', '</div>');

        $mform->addElement('html', '</div>');

        $mform->addElement('html', '<div class="d-flex align-items-start mt-24">');
        $mform->addElement('html', '<img src="./img/google.svg" class="mr-2">');
        
        $mform->addElement('html', '<div class="w-100">');
        $mform->addElement('html', '<p class="mb-1 prime_heading font-400">' . 'Connected as Latingles' . '</p>');
        $mform->addElement('html', '<button class="col-sm-5 mb-2 d-flex justify-content-center outline_btn font-14 font-600">Disconnect</button>');
        $mform->addElement('html', '</div>');

        $mform->addElement('html', '</div>');
        $this->add_action_buttons(false, 'Save Changes');
        $mform->addElement('html', '</div>');

    }
}