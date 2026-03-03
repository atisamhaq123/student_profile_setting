<?php
require_once(__DIR__ . '/../../config.php');

require_login();
$context = context_system::instance();
$PAGE->set_context($context);

$tab = required_param('tab', PARAM_ALPHANUMEXT);

// Build the form file path safely for Windows
$formfile = __DIR__ . DIRECTORY_SEPARATOR . 'classes' . DIRECTORY_SEPARATOR . 'form' . DIRECTORY_SEPARATOR . $tab . '.php';

// Debug: make sure PHP sees the file
if (!file_exists($formfile)) {
    http_response_code(404);
    echo "Form not found at: $formfile";
    exit;
}

require_once($formfile);

// Dummy data (no studentid)
$studentdata = [];

// Instantiate the class dynamically
$formclass = "\\local_lat_studentsettings\\form\\$tab";
$forminstance = new $formclass($studentdata);

// Render via Moodle renderer (or fallback)
if ($PAGE->get_renderer('local_lat_studentsettings')) {
    $renderer = $PAGE->get_renderer('local_lat_studentsettings');
    echo $renderer->render_form($forminstance, $tab);
} else {
    // Minimal fallback: just display HTML for testing
    echo "<div id='student-profile-form-container'>";
    echo "<p>Loaded form: $tab</p>";
    echo "</div>";
}