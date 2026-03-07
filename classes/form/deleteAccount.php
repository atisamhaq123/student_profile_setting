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

        $this->add_action_buttons(false, 'Save Changes');
        $mform->addElement('html', '</div>');

    }
}