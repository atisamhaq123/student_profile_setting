<?php
namespace local_lat_studentsettings\form;

defined('MOODLE_INTERNAL') || die();
require_once($CFG->libdir.'/formslib.php');

use moodleform;

class subject extends moodleform {
    public function definition() {
        $mform = $this->_form;
        $mform->addElement('html', '<p>This is the subject form</p>');
    }
}