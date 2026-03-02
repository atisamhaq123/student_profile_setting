<?php
namespace local_lat_studentsettings\form;

defined('MOODLE_INTERNAL') || die();
require_once($CFG->libdir.'/formslib.php');

use moodleform;

class pricing extends moodleform {
    public function definition() {
        $mform = $this->_form;
        $mform->addElement('html', '<div class="form_section">');
        $mform->addElement('html', '<h3 class="heading mb-24 mt-0">' . 'Price' . '</h3>');
        // First name.
        $mform->addElement('text', 'firstname', '', ['placeholder' => 'Monthly rates']);
        $mform->setType('firstname', PARAM_TEXT);
         $mform->addElement('html', '<p class="short_muted_text mt-n3 mb-4">' . 'Monthly rates' . '</p>');
          $mform->addElement('html', '</div>'); 
         // save
        $this->add_action_buttons(false, get_string('save'));
    }
}