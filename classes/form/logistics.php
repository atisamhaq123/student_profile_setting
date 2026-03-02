<?php
namespace local_lat_studentsettings\form;

defined('MOODLE_INTERNAL') || die();
require_once($CFG->libdir . '/formslib.php');

use moodleform;

class logistics extends moodleform
{
    public function definition()
    {
        global $OUTPUT, $CFG;
        $mform = $this->_form;
        $mform->addElement('html', '<div class="form_section">');
        $mform->addElement('html', '<h3 class="heading mb-24 mt-0">' . 'Logistics' . '</h3>');
        // Headings for columns
        $mform->addElement('html', '<div class="row mb-2 mx-n2">
        <h2 class="small_heading font-400 mb-0 col-lg-6 px-2">Main Teacher</h2>
        <h2 class="small_heading font-400 mb-0 col-lg-6 px-2">Second Teacher</h2>
        </div>');

        // SPECIAL Dropdowns
        $mform->addElement('html', $OUTPUT->render_from_template('local_lat_studentsettings/profile/pages/logistics', []));

        $timeOptions = [
            '9:30 am' => '9:30 am',
            '10:30 am' => '10:30 am',
            '11:30 am' => '11:30 am',
            '12:30 pm' => '12:30 pm',
            '1:30 pm' => '1:30 pm',
            '2:30 pm' => '2:30 pm',
            '3:30 pm' => '3:30 pm',
        ];

        $mform->addElement('html', '<h3 class="heading_tertiary mb-2 mt-4 mt-0">' . 'Main class schedule ' . '</h3>');
        $mform->addElement('html', '<div class="main_class_div row mx-0">');
        $mform->addElement('html', '<div class="col-lg-4 px-2 d-flex align-items-center"></div>');
        $mform->addElement('html', '<div class="col-lg-4 px-2 d-flex align-items-center log_text">Start Time</div>');
        $mform->addElement('html', '<div class="col-lg-4 px-2 d-flex align-items-center log_text">End Time</div>');
        $mform->addElement('html', '</div>');

        $days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];

        foreach ($days as $day) {
            $dayLower = strtolower($day);

            // Start row
            $mform->addElement('html', '<div class="row mx-0 mt-1 bb close_gaps">');

            // Day switch
            $mform->addElement('html', '<div class="col-lg-4 px-0 d-flex align-items-center">
                <div class="d-flex align-items-center">
                    <div class="switch_btn">
                        <label class="switch">
                            <input type="checkbox" checked="">
                            <span class="slider"></span>
                        </label>
                    </div>
                    <p class="ml-3 mb-0 small_heading font-500">' . $day . '</p>
                </div>
            </div>');

            // Start time select
            $mform->addElement('html', '<div class="col-lg-4 px-2 d-flex align-items-center log_text">');
            $mform->addElement('select', "time_{$dayLower}_start", '', $timeOptions);
            $mform->setType("time_{$dayLower}_start", PARAM_ALPHANUMEXT);
            $mform->addElement('html', '</div>');

            // End time select
            $mform->addElement('html', '<div class="col-lg-4 px-2 d-flex align-items-center log_text">');
            $mform->addElement('select', "time_{$dayLower}_end", '', $timeOptions);
            $mform->setType("time_{$dayLower}_end", PARAM_ALPHANUMEXT);
            $mform->addElement('html', '</div>');

            // End row
            $mform->addElement('html', '</div>');
        }


        $mform->addElement('html', '<h3 class="heading_tertiary mb-2 mt-4 mt-0">' . 'Practical class schedule ' . '</h3>');
        $mform->addElement('html', '<div class="main_class_div row mx-0">');
        $mform->addElement('html', '<div class="col-lg-4 px-2 d-flex align-items-center"></div>');
        $mform->addElement('html', '<div class="col-lg-4 px-2 d-flex align-items-center log_text">Start Time</div>');
        $mform->addElement('html', '<div class="col-lg-4 px-2 d-flex align-items-center log_text">End Time</div>');
        $mform->addElement('html', '</div>');

        $days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];

        foreach ($days as $day) {
            $dayLower = strtolower($day);

            // Start row
            $mform->addElement('html', '<div class="row mx-0 mt-1 bb close_gaps">');

            // Day switch
            $mform->addElement('html', '<div class="col-lg-4 px-0 d-flex align-items-center">
                <div class="d-flex align-items-center">
                    <div class="switch_btn">
                        <label class="switch">
                            <input type="checkbox" checked="">
                            <span class="slider"></span>
                        </label>
                    </div>
                    <p class="ml-3 mb-0 small_heading font-500">' . $day . '</p>
                </div>
            </div>');

            // Start time select
            $mform->addElement('html', '<div class="col-lg-4 px-2 d-flex align-items-center log_text">');
            $mform->addElement('select', "time_{$dayLower}_start", '', $timeOptions);
            $mform->setType("time_{$dayLower}_start", PARAM_ALPHANUMEXT);
            $mform->addElement('html', '</div>');

            // End time select
            $mform->addElement('html', '<div class="col-lg-4 px-2 d-flex align-items-center log_text">');
            $mform->addElement('select', "time_{$dayLower}_end", '', $timeOptions);
            $mform->setType("time_{$dayLower}_end", PARAM_ALPHANUMEXT);
            $mform->addElement('html', '</div>');

            // End row
            $mform->addElement('html', '</div>');
        }

         $mform->addElement('html', '<div class="row mx-n3 mt-3 mb-5">');
         $mform->addElement('html', '<div class="col-lg-6 px-3">');
         $mform->addElement('html', '<label for="start_date" class="small_heading font-400 mb-1">Start Date</label>');
         $mform->addElement('html', '<input type="date" id="start_date" name="schedule_date" class="form-control shadow-none">');
         $mform->addElement('html', '</div>');

         $mform->addElement('html', '<div class="col-lg-6 px-3">');
         $mform->addElement('html', '<label for="end_date" class="small_heading font-400 mb-1">End Date</label>');
         $mform->addElement('html', '<input type="date" id="end_date" name="schedule_date" class="form-control shadow-none">');
         $mform->addElement('html', '</div>');

         $mform->addElement('html', '</div>');

        $mform->addElement('html', '</div>');

        // save
        $this->add_action_buttons(false, get_string('save'));
    }
}







