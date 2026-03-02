<?php
namespace local_lat_studentsettings\form;

defined('MOODLE_INTERNAL') || die();
require_once($CFG->libdir.'/formslib.php');

use moodleform;

class badges extends moodleform {
    public function definition() {
        $mform = $this->_form;
        $mform->addElement('html', '<div class="form_section">');
        $mform->addElement('html', '<h3 class="heading mb-4">'.'Group Badges'.'</h3>');
        // 
        $mform->addElement('html', '<div class="checkboxes_section mb-5">');
        $mform->addElement('advcheckbox', 'language_1', 'Beginner');
        $mform->addElement('advcheckbox', 'language_1', 'English & Spanish');
        $mform->addElement('advcheckbox', 'language_1', 'Conversational (only)');
        $mform->addElement('advcheckbox', 'language_1', 'Intermediate');
        $mform->addElement('advcheckbox', 'language_1', 'Upper Intermediate');
        $mform->addElement('advcheckbox', 'language_1', 'Advanced');
        $mform->addElement('advcheckbox', 'language_1', 'Proficiency');
        $mform->addElement('advcheckbox', 'language_1', 'Not Specified');
        $mform->addElement('advcheckbox', 'language_1', 'Toddlers (1-3)');
        $mform->addElement('advcheckbox', 'language_1', 'Preschoolers (4-6)');
        $mform->addElement('advcheckbox', 'language_1', 'Secondary school (12-17)');
        $mform->addElement('advcheckbox', 'language_1', 'Students (17-22)');
        $mform->addElement('advcheckbox', 'language_1', 'Adults (23-40)');
        $mform->addElement('advcheckbox', 'language_1', 'Adults (40+)');
        $mform->addElement('html', '</div>');

        $this->add_action_buttons(false, get_string('save'));
        $mform->addElement('html', '</div>');


    }
}