<?php
namespace local_lat_studentsettings\form;

defined('MOODLE_INTERNAL') || die();
require_once($CFG->libdir . '/formslib.php');

use moodleform;

class autoconfirmation extends moodleform
{
    public function definition()
    {
        global $OUTPUT, $CFG;
        $mform = $this->_form;       
    
        // SPECIAL Dropdowns
        $mform->addElement('html', $OUTPUT->render_from_template('local_lat_studentsettings/profile/pages/autoconfirmation', []));
        
        $mform->addElement('html', '<div class="auto_confirmation">');
        // Add the first radio button
        $mform->addElement('radio', 'mychoice', '', 'Only lessons scheduled by you or rescheduled by your tutor on your behalf', 1);
        // Add the second radio button below
        $mform->addElement('radio', 'mychoice', '', 'Autoconfirm all my lessons, including weekly lessons and lessons scheduled or rescheduled by my tutor.', 2);
        
        
        $mform->addElement('html', "<h3 class='prime_muted_text mt-4 mb-4 mb-3'>If you have any problems with your lessons, please let us know as soon as possible and we'll help you find a solution.</h3>");
        
         $this->add_action_buttons(false, 'Save Changes');
         
        $mform->addElement('html', '</div>');

        // save
        // $this->add_action_buttons(false, get_string('save'));
    }
}







