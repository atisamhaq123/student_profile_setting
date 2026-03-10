// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Admin tutor selector functionality for lat_tutorpro.
 *
 * @package    local_lat_tutorpro
 * @copyright  2026 Zunyr Haiyydr
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

(function () {
    'use strict';

    document.addEventListener('DOMContentLoaded', function () {
        const selector = document.getElementById('student-selector');
        const trigger = document.getElementById('student-selector-trigger');
        const panel = document.getElementById('student-selector-panel');
        const searchInput = document.getElementById('student-selector-search');

        if (!selector || !trigger || !panel) {
            return;
        }

        // Toggle dropdown.
        trigger.addEventListener('click', function (e) {
            e.stopPropagation();
            const isOpen = selector.getAttribute('data-open') === 'true';
            toggleDropdown(!isOpen);
            trigger.classList.toggle("open")
        });

        // Close on outside click.
        document.addEventListener('click', function (e) {
            if (!selector.contains(e.target)) {
                toggleDropdown(false);
            }
        });

        // Close on escape.
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape') {
                toggleDropdown(false);
            }
        });


        /**
         * Toggle the dropdown panel.
         *
         * @param {boolean} open Whether to open the dropdown.
         */
        function toggleDropdown(open) {
            selector.setAttribute('data-open', open ? 'true' : 'false');
            trigger.setAttribute('aria-expanded', open ? 'true' : 'false');

            if (open) {
                panel.classList.remove('hidden');
                if (searchInput) {
                    searchInput.focus();
                    searchInput.value = '';
                    // Reset search filter.
                    const items = tutorList.querySelectorAll('.lat-admin-tutor-item');
                    items.forEach(function (item) {
                        item.style.display = '';
                    });
                }
            } else {
                panel.classList.add('hidden');
            }
        }
    });
    document.addEventListener("click", function (e) {
        // Find closest tutor selector trigger clicked
        const trigger = e.target.closest(".lat-student-selector-trigger");
        if (trigger) {
            const selector = trigger.closest(".lat-student-tutor-selector");
            const panel = selector.querySelector(".lat-student-selector-panel");

            const isOpen = selector.getAttribute("data-open") === "true";
            selector.setAttribute("data-open", !isOpen);
            panel.classList.toggle("hidden", isOpen);
            trigger.setAttribute("aria-expanded", !isOpen);

            e.stopPropagation(); // Prevent document click from closing immediately
            return;
        }

        // Click outside any selector → close all
        document.querySelectorAll(".lat-student-tutor-selector").forEach(selector => {
            selector.setAttribute("data-open", "false");
            const panel = selector.querySelector(".lat-student-selector-panel");
            const trigger = selector.querySelector(".lat-student-selector-trigger");
            panel.classList.add("hidden");
            trigger.setAttribute("aria-expanded", "false");
        });
    });

    // Close on Escape key
    document.addEventListener("keydown", function (e) {
        if (e.key === "Escape") {
            document.querySelectorAll(".lat-student-tutor-selector").forEach(selector => {
                selector.setAttribute("data-open", "false");
                const panel = selector.querySelector(".lat-student-selector-panel");
                const trigger = selector.querySelector(".lat-student-selector-trigger");
                panel.classList.add("hidden");
                trigger.setAttribute("aria-expanded", "false");
            });
        }
    });


    function placeCaretAtEnd(el) {
        el.focus();
        if (typeof window.getSelection != "undefined"
            && typeof document.createRange != "undefined") {
            let range = document.createRange();
            range.selectNodeContents(el);
            range.collapse(false); // move caret to end
            let sel = window.getSelection();
            sel.removeAllRanges();
            sel.addRange(range);
        }
    }
    $('.student-edit-btn').click(function () {

        let row = $(this).closest('.student-info-row');
        let text = row.find('.short_muted_text');

        let editIcon = $(this).find('.edit-icon');
        let saveIcon = $(this).find('.save-icon');

        if (!text.attr('contenteditable')) {

            // Enable editing
            text.attr('contenteditable', 'true');
            placeCaretAtEnd(text[0]);

            // Change button background
            text.css('color', '#121117');
            $(this).css('background-color', 'red');

            editIcon.addClass('d-none');
            saveIcon.removeClass('d-none');

        } else {

            // Save mode
            text.removeAttr('contenteditable');

            // Reset button background
            $(this).css('background-color', 'white');
            text.css('color', '#A8A8B6');

            editIcon.removeClass('d-none');
            saveIcon.addClass('d-none');

            let updatedValue = text.text();

        }

    });

})();
