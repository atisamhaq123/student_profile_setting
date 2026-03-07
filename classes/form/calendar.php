<?php
namespace local_lat_studentsettings\form;

defined('MOODLE_INTERNAL') || die();
require_once($CFG->libdir . '/formslib.php');

use moodleform;

class calendar extends moodleform
{
    public function definition()
    {
        $mform = $this->_form;
        $mform->addElement('html', '<div class="form_section">');
        $mform->addElement('html', '<h3 class="heading mb-3">' . 'Goolge Calendar' . '</h3>');
        
        $mform->addElement('html', '<div class="d-flex align-items-center mb-3">');
        $mform->addElement('html', '<img src="./img/googleprime.svg" class="mt-n2">');
        $mform->addElement('html', '<div class="ml-3">');
        $mform->addElement('html', '<h3 class="prime_heading font-400 mb-2">' . 'Currently connected account' . '</h3>');
        $mform->addElement('html', '<h3 class="heading_tertiary">' . 'ArnoldAddyson77@gmail.com' . '</h3>');

        $mform->addElement('html', '</div>');
        $mform->addElement('html', '</div>');
        $mform->addElement('html', '<button class="mb-4 muted_box d-flex align-items-center small_heading justify-content-center w-100">Disconnect Google Calendar</button>');

        $mform->addElement('html', '<h3 class="heading_tertiary mb-2 font-500">' . 'Add lessons to calendar' . '</h3>');
        $mform->addElement('html', '<p class="prime_heading mb-3 font-400">' . 'Use this setting to automatically add Latingles lessons to your connected calendar.' . '</p>');

       $accounts = [
            // "ArnoldAddyson77@gmail.com" => "ArnoldAddyson77@gmail.com"
        ];

        $mform->addElement(
            'select',
            'accounts',
            '',
            ['ArnoldAddyson77@gmail.com' => 'ArnoldAddyson77@gmail.com'] + $accounts,
             ['class' => 'account_select']
        );
    
        $mform->addElement('html', '<h3 class="heading_tertiary mb-2 font-500">' . 'Check calendars for conflict' . '</h3>');
        $mform->addElement('html', '<p class="prime_heading mb-3 font-400">' . 'Choose calendars which you would like to check to schedule new lessons on Latingles' . '</p>');

        $mform->addElement('html', '<div class="checkboxes_section mb-4">');
        $mform->addElement('advcheckbox', 'language_1', 'ArnoldAddyson77');
        $mform->addElement('advcheckbox', 'language_2', 'Holidays in United States');
        $mform->addElement('advcheckbox', 'language_3', 'Birthdays');
        $mform->addElement('html', '</div">');

        $mform->addElement('html', '<h3 class="heading_tertiary mb-2 font-500">' . 'Remind me before a lesson' . '</h3>');
        $mform->addElement('html', '<p class="prime_heading mb-3 font-400">' . 'How far in advance you would like us to send you a reminder before your scheduled lesson' . '</p>');

        $mform->addElement('html', '<div class="auto_confirmation calendar mb-4">');
        // Add the first radio button
        $mform->addElement('radio', 'mychoice', '', 'No notification', 1);
        // Add the second radio button below
        $mform->addElement('radio', 'mychoice', '', '15 min before a lesson', 2);
        $mform->addElement('radio', 'mychoice', '', '60 min before a lesson', 3);
        $mform->addElement('radio', 'mychoice', '', '24 hours before a lesson', 4);
        
        $mform->addElement('html', '</div>');
        

        $this->add_action_buttons(false, 'Save Changes');
        $mform->addElement('html', '</div>');

    }
}