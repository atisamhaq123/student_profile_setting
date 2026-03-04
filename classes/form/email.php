<?php
namespace local_lat_studentsettings\form;

defined('MOODLE_INTERNAL') || die();
require_once($CFG->libdir . '/formslib.php');

use moodleform;

class email extends moodleform
{
    public function definition()
    {
        $mform = $this->_form;
        $mform->addElement('html', '<div class="form_section">');
        $mform->addElement('html', '<h3 class="heading mb-3">' . 'Email' . '</h3>');
        
         // Email.
        $mform->addElement('text', 'Email', 'Email Name', ['placeholder' => 'email']);
        $mform->setType('Email', PARAM_TEXT);

        $this->add_action_buttons(false, 'Save Changes');
        $mform->addElement('html', '</div>');

    }
}