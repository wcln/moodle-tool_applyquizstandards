<?php
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
 * Apply Quiz Standards Admin Tool
 *
 * @package    tool_applyquizstandards
 * @copyright  2017 Colin Bernard {@link http://bclearningnetwork.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */


// Standard GPL and phpdocs
require_once(__DIR__ . '/../../../config.php');
require_once($CFG->libdir.'/adminlib.php');
require_once('standards_form.php');
require_once(__DIR__.'/locallib.php');

// Calls require_login and performs permission checks for admin pages
admin_externalpage_setup('applyquizstandards'); 

// Set up the page.
$title = get_string('pluginname', 'tool_applyquizstandards');
$pagetitle = $title;
$url = new moodle_url("/admin/tool/applyquizstandards/index.php");
$PAGE->set_url($url);
$PAGE->set_title($title);
$PAGE->set_heading($title);

$PAGE->requires->js( new moodle_url($CFG->wwwroot . '/admin/tool/applyquizstandards/ajax/onselect.js'));
 
 
echo $OUTPUT->header();
echo $OUTPUT->heading(get_string('heading', 'tool_applyquizstandards'));

$info = format_text(get_string('applyquizstandardsintro', 'tool_applyquizstandards'), FORMAT_MARKDOWN);
echo $OUTPUT->box($info);



$mform = new standards_form();

if ($fromform = $mform->get_data()) {
	// process validated data
	// $mform->get_data() returns data posted in form

	$params = (array)$fromform;
	array_pop($params);

	tool_applyquizstandards_set_quiz_standards($params);

	echo "<p><img src=\"images/checkmark.png\">Quiz standards successfully applied to all quizzes!</p>";
	$mform->display();

} else {
	// this branch is executed if the form is submitted but the data doesn't validate and the form should be redisplayed
	// or on the first display of the form

	// display the form
	$mform->display();
}

 
echo $OUTPUT->footer();

?>