<?php
namespace local_lat_studentsettings\form;

defined('MOODLE_INTERNAL') || die();
require_once($CFG->libdir . '/formslib.php');

use moodleform;

class about extends moodleform
{
    public function definition()
    {
        $mform = $this->_form;
        $mform->addElement('html', '<div class="form_section">');
        $mform->addElement('html', '<h3 class="heading mb-24">' . 'Group About' . '</h3>');
        $mform->addElement('html', '<h3 class="prime_heading font-400 mb-4 mt-0">' .'Start creating  public Group profile. Your progress will be
automatically saved as you complete each section. You can
return at any time to finish your registration.' . '</h3>');
        // First name.
        $mform->addElement('text', 'firstname', 'Group Name', ['placeholder' => '']);
        $mform->setType('firstname', PARAM_TEXT);
        $mform->addRule('firstname', null, 'required', null, 'client');

        // Last name.
        $mform->addElement('text', 'lastname', 'Group Short Name', ['placeholder' => '']);
        $mform->setType('lastname', PARAM_TEXT);
        $mform->addRule('lastname', null, 'required', null, 'client');

        // Country of birth (optional).
        $countries = get_string_manager()->get_list_of_countries();
        $mform->addElement('select', 'birthcountry', 'Group Country', $countries);
        $mform->setType('birthcountry', PARAM_ALPHANUMEXT);

        // Timezone (optional).
        $timezones = \core_date::get_list_of_timezones();
        $mform->addElement(
            'select',
            'timezone',
            'Timezones • Optional',
            ['' => ''] + $timezones
        );
        $mform->setType('timezone', PARAM_TIMEZONE);
        // Headings for columns
        $mform->addElement('html', '<div class="row mb-2 mx-n1">
            <h2 class="prime_heading font-400 mb-0 col-lg-6 px-1">Group Languages</h2>
            <h2 class="prime_heading font-400 mb-0 col-lg-6 px-1">Levels</h2>
        </div>');

        $levels = [
            'native' => 'Native',
            'c2' => 'C2 (Proficient)',
            'c1' => 'C1 (Advanced)',
            'b2' => 'B2 (Upper Intermediate)',
            'b1' => 'B1 (Intermediate)',
            'a2' => 'A2 (Elementary)',
            'a1' => 'A1 (Beginner)',
        ];

        // Loop to create two rows
        for ($i = 0; $i < 2; $i++) {

            // Language select (unique name)
            $language = $mform->createElement(
                'select',
                'language_' . $i, // unique name for each row
                '',                // Label empty because heading exists
                get_string_manager()->get_list_of_languages()
            );
            $language->updateAttributes([
                'class' => 'pr-1 pl-0 col-lg-6'
            ]);

            // Level select (unique name)
            $level = $mform->createElement(
                'select',
                'level_' . $i, // unique name
                '',             // Label empty
                $levels
            );
            $level->updateAttributes([
                'class' => 'pl-1 pr-0 col-lg-6'
            ]);

            // Add group
            $mform->addGroup(
                [$language, $level],
                'languagegroup_' . $i, // unique group name
                '',                     // No group label
                ' ',                    // Separator
                false
            );

            // Add row/flex to group
            $mform->getElement('languagegroup_' . $i)->updateAttributes([
                'class' => 'row mx-0 doublet mb-2' // add margin-bottom for spacing
            ]);
        }

         $mform->addElement('html', '<h2 class="mb-5 pointer prime_heading underline">Add another language</h2>');

        $this->add_action_buttons(false, get_string('save'));
        $mform->addElement('html', '</div>');

    }
}