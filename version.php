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
 * Version details
 *
 * @package    auth
 * @subpackage uniquelogin
 * @copyright  1999 onwards Martin Dougiamas (http://dougiamas.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$plugin->version   = 2022092900;        // The current plugin version (Date: YYYYMMDDXX)
$plugin->requires  = 2010120100;        // Requires this Moodle version
$plugin->component = 'auth_uniquelogin';         // Full name of the plugin (used for diagnostics)
$plugin->cron = 0; //time interval (in seconds) between calls to the plugin's 'cron' function; set to 0 to disable the cron function calls.
$plugin->maturity = MATURITY_STABLE; 
$plugin->release = '2.x (Build: 2011051000)'; 
//$plugin->dependencies = array ('mod_forum' => ANY_VERSION, 'mod_data' => 2010020300); 