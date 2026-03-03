<?php
require('../../config.php');

require_login();

$context = context_system::instance();

$PAGE->set_url('/local/lat_studentsettings/index.php');
$PAGE->set_context($context);
$PAGE->set_pagelayout('standard');
$PAGE->set_title('My Project');
$PAGE->set_heading('My Project');


// Load CSS properly
$PAGE->requires->css('/local/lat_studentsettings/css/main.css');

// Load JS properly (simple way)
$PAGE->requires->jquery(); // This ensures jQuery is loaded
$PAGE->requires->js('/local/lat_studentsettings/js/script.js');
$PAGE->requires->js(new moodle_url('/local/lat_studentsettings/js/student_profile_tabs.js'));

echo $OUTPUT->header();

$data = [
    'title' => 'My Project'
];

echo $OUTPUT->render_from_template('local_lat_studentsettings/main', $data);

echo $OUTPUT->footer();