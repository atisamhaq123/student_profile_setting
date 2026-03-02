<?php
namespace local_lat_studentsettings\output;

use plugin_renderer_base;

defined('MOODLE_INTERNAL') || die();

class renderer extends plugin_renderer_base {

    /**
     * Render a moodleform instance.
     *
     * @param \moodleform $forminstance
     * @return string
     */
    public function render_form($forminstance) {
        // Capture the output of the form.
        ob_start();
        $forminstance->display();
        return ob_get_clean();
    }
}