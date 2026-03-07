<?php
namespace local_lat_studentsettings\form;

defined('MOODLE_INTERNAL') || die();
require_once($CFG->libdir . '/formslib.php');

use moodleform;

class deleteAccount extends moodleform
{
    public function definition()
    {
        $mform = $this->_form;
        $mform->addElement('html', '<div class="form_section">');
        $mform->addElement('html', '<h3 class="heading mb-4">' . 'Delete Account' . '</h3>');
        $mform->addElement('html', '<p class="prime_heading font-400">' . "Deleting your account is permanent and all your account information will be deleted along with it. If you're sure you want to proceed, enter your email address below." . '</p>');
        
         // Email.
        $mform->addElement('text', 'Email', 'Email', ['placeholder' => 'email', 'class'=>"mt-24"]);
        $mform->setType('Email', PARAM_TEXT);
        
        $mform->addElement('html', '<div class="mt-5 w-100 d-flex align-items-center justify-content-end">');
        $mform->addElement('html', '<button class="col-sm-5 mb-4 muted_box d-flex align-items-center small_heading justify-content-center">Delete account</button>');
        $mform->addElement('html', '</div>');
        
        $mform->addElement('html', '</div>');

    }
}