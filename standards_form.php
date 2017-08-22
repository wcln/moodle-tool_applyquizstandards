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
 * Apply Quiz Standards form
 *
 * @package    tool_applyquizstandards
 * @copyright  2017 Colin Bernard {@link http://bclearningnetwork.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

require_once($CFG->libdir.'/formslib.php');
require_once(__DIR__.'/locallib.php');


/**
 * Definition of standards form.
 *
 * @copyright  
 * @license    
 */
class standards_form extends moodleform {

    /**
     * Define standards form.
     */
    protected function definition() {
        global $CFG;

        $mform = $this->_form;




        $mform->addElement('text', 'timeopen', 'timeopen');
        $mform->setType('timeopen', PARAM_RAW);
        $mform->setDefault('timeopen', 0);

        $mform->addElement('text', 'timeclose', 'timeclose');
        $mform->setType('timeclose', PARAM_RAW);
        $mform->setDefault('timeclose', 0);

        $mform->addElement('text', 'overduehandling', 'overduehandling');
        $mform->setType('overduehandling', PARAM_RAW);
        $mform->setDefault('overduehandling', "autosubmit");

        $mform->addElement('text', 'graceperiod', 'graceperiod');
        $mform->setType('graceperiod', PARAM_RAW);
        $mform->setDefault('graceperiod', 0);

        $mform->addElement('text', 'questionsperpage', 'questionsperpage');
        $mform->setType('questionsperpage', PARAM_RAW);
        $mform->setDefault('questionsperpage', 2);

        $mform->addElement('text', 'navmethod', 'navmethod');
        $mform->setType('navmethod', PARAM_RAW);
        $mform->setDefault('navmethod', "free");

        $mform->addElement('text', 'preferredbehaviour', 'preferredbehaviour');
        $mform->setType('preferredbehaviour', PARAM_RAW);
        $mform->setDefault('preferredbehaviour', "deferredfeedback");

        $mform->addElement('text', 'canredoquestions', 'canredoquestions');
        $mform->setType('canredoquestions', PARAM_RAW);
        $mform->setDefault('canredoquestions', 0);

        $mform->addElement('text', 'attemptonlast', 'attemptonlast');
        $mform->setType('attemptonlast', PARAM_RAW);
        $mform->setDefault('attemptonlast', 0);

        $mform->addElement('text', 'showuserpicture', 'showuserpicture');
        $mform->setType('showuserpicture', PARAM_RAW);
        $mform->setDefault('showuserpicture', 1);

        $mform->addElement('text', 'decimalpoints', 'decimalpoints');
        $mform->setType('decimalpoints', PARAM_RAW);
        $mform->setDefault('decimalpoints', 0);

        $mform->addElement('text', 'questiondecimalpoints', 'questiondecimalpoints');
        $mform->setType('questiondecimalpoints', PARAM_RAW);
        $mform->setDefault('questiondecimalpoints', -1);

        $mform->addElement('text', 'showblocks', 'showblocks');
        $mform->setType('showblocks', PARAM_RAW);
        $mform->setDefault('showblocks', 0);

        $mform->addElement('text', 'subnet', 'subnet');
        $mform->setType('subnet', PARAM_RAW);
        $mform->setDefault('subnet', "");

        $mform->addElement('text', 'delay1', 'delay1');
        $mform->setType('delay1', PARAM_RAW);
        $mform->setDefault('delay1', 0);

        $mform->addElement('text', 'delay2', 'delay2');
        $mform->setType('delay2', PARAM_RAW);
        $mform->setDefault('delay2', 0);

        $mform->addElement('text', 'browsersecurity', 'browsersecurity');
        $mform->setType('browsersecurity', PARAM_RAW);
        $mform->setDefault('browsersecurity', "-");

        $mform->addElement('text', 'completionpass', 'completionpass');
        $mform->setType('completionpass', PARAM_RAW);
        $mform->setDefault('completionpass', 0);

        $mform->addElement('text', 'completion', 'completion');
        $mform->setType('completion', PARAM_RAW);
        $mform->setDefault('completion', 2);

        $mform->addElement('text', 'completiongradeitemnumber', 'completiongradeitemnumber');
        $mform->setType('completiongradeitemnumber', PARAM_RAW);
        $mform->setDefault('completiongradeitemnumber', 0);

        $mform->addElement('text', 'completionview', 'completionview');
        $mform->setType('completionview', PARAM_RAW);
        $mform->setDefault('completionview', 0);

        $mform->addElement('text', 'completionexpected', 'completionexpected');
        $mform->setType('completionexpected', PARAM_RAW);
        $mform->setDefault('completionexpected', 0);

        $mform->addElement('text', 'timelimit', 'timelimit');
        $mform->setType('timelimit', PARAM_RAW);
        $mform->setDefault('timelimit', 7200);

        $this->add_action_buttons(false, get_string('submit', 'tool_applyquizstandards'));
    }

    /**
     * Custom form validation
     * @param array $data
     * @param array $files
     * @return array
     */
    public function validation($data, $files) {
        return array();
    }
}
