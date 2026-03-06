<?php
namespace local_lat_studentsettings\form;

defined('MOODLE_INTERNAL') || die();
require_once($CFG->libdir . '/formslib.php');

use moodleform;

class paymenthistory extends moodleform
{
    public function definition()
    {
        global $OUTPUT, $CFG;
        $mform = $this->_form;       

        // SPECIAL Dropdowns
        $mform->addElement('html', $OUTPUT->render_from_template('local_lat_studentsettings/profile/pages/paymenthistory', []));



        // save
        // $this->add_action_buttons(false, get_string('save'));
    }
}







