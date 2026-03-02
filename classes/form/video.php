<?php
namespace local_lat_studentsettings\form;

defined('MOODLE_INTERNAL') || die();
require_once($CFG->libdir.'/formslib.php');

use moodleform;

class video extends moodleform {
    public function definition() {
        $mform = $this->_form;
        $mform->addElement('html', '<h3 class="heading mb-3">'.'Video Introduction'.'</h3>');
        $mform->addElement('html', '<h3 class="heading_tertiary font-500 mb-3">'.'Add a horizontal video of up to 2 minutes'.'</h3>');
        $mform->addElement('html', '<h3 class="prime_heading font-400 mb-3 mt-0">'.'Introduce yourself to students in the same language as your written description. If you teach a different language, include a short sample. '.'</h3>');
        
        // Video preview container.
        $embedurl = 'https://www.youtube.com/embed/hydk9hHO1Ko';

        $mform->addElement('html', '<div class="lat-video-preview lat-mt-6" id="video-preview">');
        if ($embedurl) {
            $mform->addElement('html', '<iframe src="' . $embedurl .
                '" frameborder="0" allowfullscreen class="lat-video-iframe"></iframe>');
        } else {
            $mform->addElement('html', '<div class="lat-video-placeholder">' .
                '<svg width="48" height="48" viewBox="0 0 24 24" fill="none">
                    <circle cx="12" cy="12" r="10" stroke="#d1d5db" stroke-width="1.5"/>
                    <path d="M10 8l6 4-6 4V8z" fill="#d1d5db"/>
                </svg>
                <p>' . get_string('video_no_preview', 'local_lat_tutorpro') . '</p>
            </div>');
        }
        $mform->addElement('html', '</div>');

        // record btn
        $mform->addElement('html', '<button class="tab_btn_outline col-md-6 mt-3 mb-3">
             <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M20.1681 3.83398V10.834H13.1681V8.83398H17.0561C16.4298 7.85289 15.5317 7.07516 14.4711 6.59555C13.4106 6.11593 12.2334 5.95515 11.0831 6.13279C9.93275 6.31043 8.85893 6.81883 7.99247 7.59602C7.126 8.37322 6.5043 9.38567 6.20312 10.51L4.27012 9.98998C4.65035 8.5712 5.41384 7.28449 6.47691 6.27088C7.53998 5.25728 8.86159 4.55592 10.2969 4.24368C11.7321 3.93145 13.2257 4.02039 14.6138 4.50076C16.0018 4.98113 17.2309 5.83438 18.1661 6.96698V3.83398H20.1661H20.1681ZM3.82812 20.29V13.29H10.8281V15.29H6.94112C7.56736 16.2711 8.46544 17.0489 9.52592 17.5285C10.5864 18.0082 11.7635 18.1691 12.9138 17.9916C14.0641 17.814 15.138 17.3057 16.0045 16.5287C16.871 15.7516 17.4928 14.7392 17.7941 13.615L19.7261 14.132C19.346 15.5508 18.5826 16.8377 17.5196 17.8514C16.4566 18.8651 15.135 19.5666 13.6997 19.8789C12.2644 20.1913 10.7708 20.1024 9.3827 19.6221C7.99456 19.1418 6.76546 18.2886 5.83012 17.156V20.29H3.83013H3.82812Z" fill="#121117"/>
            </svg><span class="ml-2">'.'Re-record'.'</span>
        </button><br>');

        $mform->addElement('html', '<h3 class="prime_heading font-400 mt-0 mb-0">'.'Have a pre-recorded video on Youtube or Vimeo?'.'</h3>');
        $mform->addElement('html', '<span class="prime_heading pointer font-700 underline mt-0">'.'Insert link'.'</span>');
        
        $mform->addElement('html', '<h3 class="heading_medium font-500 mt-5 mb-4">'.'Add a thumbnail (optional)'.'</h3>');
        $mform->addElement('html', '<p class="prime_heading font-400 mb-3">'.'Don’t worry if you don’t have a thumbnail ready, we’ll use the preview above. '.'</p>');
        $mform->addElement('html', '<h3 class="small_heading font-600 mt-0 mb-1">'.'Current thumbnail'.'</h3>');
        $mform->addElement('html', '<img class="video_thumbnail_img mb-4" src="https://img.freepik.com/free-vector/online-english-lessons-youtube-thumbnail_23-2149291956.jpg" alt="Current Picture" class="img-fluid" />');
            
          // Info callout.
        $mform->addElement('html', '<div class="lat-callout">');
        $mform->addElement('html', '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 19C11.0807 19 10.1705 18.8189 9.32122 18.4672C8.47194 18.1154 7.70026 17.5998 7.05025 16.9497C6.40024 16.2997 5.88463 15.5281 5.53284 14.6788C5.18106 13.8295 5 12.9193 5 12C5 11.0807 5.18106 10.1705 5.53284 9.32122C5.88463 8.47194 6.40024 7.70026 7.05025 7.05025C7.70026 6.40024 8.47194 5.88463 9.32122 5.53284C10.1705 5.18106 11.0807 5 12 5C13.8565 5 15.637 5.7375 16.9497 7.05025C18.2625 8.36301 19 10.1435 19 12C19 13.8565 18.2625 15.637 16.9497 16.9497C15.637 18.2625 13.8565 19 12 19ZM3 12C3 10.8181 3.23279 9.64778 3.68508 8.55585C4.13738 7.46392 4.80031 6.47177 5.63604 5.63604C6.47177 4.80031 7.46392 4.13738 8.55585 3.68508C9.64778 3.23279 10.8181 3 12 3C13.1819 3 14.3522 3.23279 15.4442 3.68508C16.5361 4.13738 17.5282 4.80031 18.364 5.63604C19.1997 6.47177 19.8626 7.46392 20.3149 8.55585C20.7672 9.64778 21 10.8181 21 12C21 14.3869 20.0518 16.6761 18.364 18.364C16.6761 20.0518 14.3869 21 12 21C9.61305 21 7.32387 20.0518 5.63604 18.364C3.94821 16.6761 3 14.3869 3 12ZM11.062 10V16H12.934V10H11.062ZM11.254 8.92C11.47 9.128 11.718 9.232 11.998 9.232C12.286 9.232 12.534 9.128 12.742 8.92C12.95 8.704 13.054 8.456 13.054 8.176C13.0565 8.03712 13.0301 7.89924 12.9764 7.77114C12.9226 7.64304 12.8428 7.52754 12.742 7.432C12.6457 7.33214 12.5301 7.25296 12.4022 7.19932C12.2742 7.14567 12.1367 7.11868 11.998 7.12C11.718 7.12 11.47 7.224 11.254 7.432C11.1532 7.52754 11.0734 7.64304 11.0196 7.77114C10.9659 7.89924 10.9395 8.03712 10.942 8.176C10.942 8.456 11.046 8.704 11.254 8.92Z" fill="#121117"/>
        </svg>
        ');
        $mform->addElement('html', '<span class="lat-callout-text">' .'Do not include your surname, contact info,
        pricing or discounts, and irrelevant pictures in
        your thumbnail.' . '</span>');
        $mform->addElement('html', '</div>');

        // add thumbnail btn
        $mform->addElement('html', '<div class="d-flex align-items-center mb-4">');
        $mform->addElement('html', '<button class="tab_btn_outline mt-4 mb-4 col-md-7 font-14">'.'Add another thumbnail'.'</button>');
        $mform->addElement('html', '<div class="ml-3">
        <h3 class="short_muted_text mt-0 mb-0">'.'JPEG or PNG formats only, size of 20Mb max'.'</h3>');
        $mform->addElement('html', '</div>');
        $mform->addElement('html', '</div>');
        // save
        $this->add_action_buttons(false, get_string('save'));
        
    }
}
