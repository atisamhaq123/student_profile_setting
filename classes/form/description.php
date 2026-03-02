<?php
namespace local_lat_studentsettings\form;

defined('MOODLE_INTERNAL') || die();
require_once($CFG->libdir.'/formslib.php');

use moodleform;

class description extends moodleform {
    public function definition() {
        $mform = $this->_form;
        $mform->addElement('html', '<div class="form_section">');
        $mform->addElement('html', '<h3 class="heading mb-1">'.'Group Description'.'</h3>');
        $mform->addElement('html', '<h3 class="prime_heading font-400 mb-3 mt-0">'.'This Group description that will go on your public profile. '.'</h3>');
        // 
        $mform->addElement('textarea', 'experience', '', [
            'rows' => 5,
            'class' => 'lat-textarea',
            'placeholder' => '',
        ]);

        $mform->addElement('html', '<h3 class="heading_secondary mb-3 mt-0">'.'Specialities'.'</h3>');
        $mform->addElement('html', '<div class="checkboxes_section">');
        $mform->addElement('advcheckbox', 'language_1', 'Conversational English');
        $mform->addElement('advcheckbox', 'language_1', 'Business English');
        $mform->addElement('advcheckbox', 'language_1', 'English for beginners');
        $mform->addElement('html', '</div">');
        $mform->addElement('html', '</div">');


    }
}