<?php
namespace local_lat_studentsettings\form;

defined('MOODLE_INTERNAL') || die();
require_once($CFG->libdir . '/formslib.php');

use moodleform;

class photo extends moodleform
{
    public function definition()
    {
        global $OUTPUT;
        $mform = $this->_form;
        // Example variables to pass to Mustache template
        $templatecontext = [
            'photo_url' => 'https://example.com/pictures/user123.jpg',
            'display_name' => 'John Doe',
            'teaches_text' => 'Math, Physics',
            'languages_summary' => 'English, Spanish',
        ];

        // Render main photo template with variables
        $mform->addElement('html', $OUTPUT->render_from_template(
            'local_lat_studentsettings/profile/pages/photo',
            $templatecontext
        ));
    }
}