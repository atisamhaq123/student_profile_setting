<?php
namespace local_lat_studentsettings\form;

defined('MOODLE_INTERNAL') || die();
require_once($CFG->libdir . '/formslib.php');

use moodleform;

class password extends moodleform
{
    public function definition()
    {
        $mform = $this->_form;
        $mform->addElement('html', '<div class="form_section">');
        $mform->addElement('html', '<h3 class="heading mb-3">' . 'Change Password' . '</h3>');
        
        // Current Password.
        $mform->addElement('password', 'currentPassword', 'Current Password', ['placeholder' => '']);
        $mform->setType('currentPassword', PARAM_TEXT);
        $mform->addElement('html', '<h3 class="heading_tertiary mt-n3 mb-3 underline pointer">' . 'Forgot your password?' . '</h3>');

        // New Password.
        $mform->addElement('password', 'NewPassword', 'New Password', ['placeholder' => '']);
        $mform->setType('currentPassword', PARAM_TEXT);

         // Verify Password.
        $mform->addElement('password', 'verifyPassword', 'Verify Password', ['placeholder' => '']);
        $mform->setType('currentPassword', PARAM_TEXT);

        $this->add_action_buttons(false, 'Save Changes');
        $mform->addElement('html', '</div>');

    }
}