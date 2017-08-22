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
 * Apply Quiz Standards
 *
 * @package    tool_applyquizstandards
 * @copyright  2017 Colin Bernard {@link http://bclearningnetwork.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

require_once(__DIR__ . '/../../../config.php');
require_once($CFG->libdir.'/adminlib.php');


/**
 * Applies quiz standards to DB
 * @param $course
 * @param $password
 * @return void
 */
function tool_applyquizstandards_set_quiz_standards($params) {
    global $DB;

    $timelimit = array();
    array_push($timelimit, array_pop($params));

    $sql1 = 'UPDATE mdl_quiz, mdl_course_modules 
             SET timeopen=?, 
                 timeclose=?, 
                 overduehandling=?, 
                 graceperiod=?, 
                 questionsperpage=?, 
                 navmethod=?, 
                 preferredbehaviour=?, 
                 canredoquestions=?, 
                 attemptonlast=?, 
                 showuserpicture=?, 
                 decimalpoints=?, 
                 questiondecimalpoints=?, 
                 showblocks=?, 
                 subnet=?, 
                 delay1=?, 
                 delay2=?, 
                 browsersecurity=?,
                 completionpass=?,
                 completion=?,
                 completiongradeitemnumber=?,
                 completionview=?,
                 completionexpected=?
             WHERE mdl_course_modules.instance=mdl_quiz.id
             AND mdl_quiz.course=mdl_course_modules.course';

    $sql2 = 'UPDATE mdl_quiz SET timelimit=? WHERE timelimit=0';

    $DB->execute($sql1, $params);
    $DB->execute($sql2, $timelimit);
}

/**
 * Convert from form object to params array
 * @param $fromform
 * @return array
 */
function tool_applyquizstandards_fromfrom_to_params($fromform) {
    $params = array();


}
