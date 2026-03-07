<?php
namespace local_lat_studentsettings\form;

defined('MOODLE_INTERNAL') || die();
require_once($CFG->libdir . '/formslib.php');

use moodleform;

class notifications extends moodleform
{
    public function definition()
    {
        $mform = $this->_form;
        $mform->addElement('html', '<div class="form_section">');
        $mform->addElement('html', '<h3 class="heading mb-3">' . 'Notification Setting' . '</h3>');
        $mform->addElement('html', '<h3 class="heading_tertiary font-500 mb-3">' . 'Email notifications' . '</h3>');
        
        
        $mform->addElement('html', '<div class="checkboxes_section bold mb-4">');
        $mform->addElement('advcheckbox', 'language_1', 'Lessons and learning');
        $mform->addElement('html', '<p class="ml-28 prime_muted_text mt-n3">' . 'Get updates about your lessons, messages, and learning journey.' . '</p>');
        
        $mform->addElement('html', '<div class="mt-24">');
        $mform->addElement('advcheckbox', 'language_1', 'Tips and discounts');
        $mform->addElement('html', '<p class="ml-28 prime_muted_text mt-n3">' . 'Discover tips for learning on Latingles and receive special promtions.' . '</p>');
        $mform->addElement('html', '</div>');
       

        $mform->addElement('html', '</div>');

         $mform->addElement('html', '<h3 class="heading_tertiary font-500 mb-3">' . 'Latingles Insights' . '</h3>');
        
        
        $mform->addElement('html', '<div class="checkboxes_section bold mb-4">');
        $mform->addElement('advcheckbox', 'language_1', 'Surveys and interviews');
        $mform->addElement('html', '<p class="ml-28 prime_muted_text mt-n3">' . 'Earn rewards by offering feedback on your learning experience.' . '</p>');       

        $mform->addElement('html', '</div>');
        

        $this->add_action_buttons(false, 'Save Changes');
        $mform->addElement('html', '</div>');

    }
}