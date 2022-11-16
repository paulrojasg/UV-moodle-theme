<?php
// This file is part of Moodle - https://moodle.org/
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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Calculates the disk usage.
 *
 * @package     theme_mooveuv
 * @author      2022 Juan Felipe Orozco Escobar <juanfe.ores@gmail.com>
 * @copyright   2022 Área de Nuevas Tecnologías - DINTEV - Universidad del Valle <desarrollo.ant@correounivalle.edu.co>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace theme_mooveuv\task;

use cache;

/**
 * Task to calculate the moodledata directory disk usage.
 *
 * @package     theme_mooveuv
 * @author      2022 Juan Felipe Orozco Escobar <juanfe.ores@gmail.com>
 * @copyright   2022 Área de Nuevas Tecnologías - DINTEV - Universidad del Valle <desarrollo.ant@correounivalle.edu.co>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class moodledatadiskusage extends \core\task\scheduled_task {

    /**
     * Return the task's name.
     *
     * @return  string
     */
    public function get_name() {
        return get_string('task_calculate_moodledata_disk_usage', 'theme_mooveuv');
    }

    /**
     * Execute the task.
     */
    public function execute() {
        global $CFG;

        $cache = cache::make('theme_mooveuv', 'moodledatadiskusage');

        $moodledatasize = get_directory_size($CFG->dataroot);
        $moodledatasize = number_format(ceil($moodledatasize / 1048576));

        $cache->set('moodledatadiskusage', $moodledatasize);

        return true;
    }
}
