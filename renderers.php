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
 * Unitec CIB Theme
 *
 * @package   theme_unitec_corporate_cib
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

class theme_unitec_corporate_cib_core_renderer extends theme_bootstrapbase_core_renderer {
 
    protected function render_custom_menu(custom_menu $menu) {
    	/*
    	* Adds the "My Courses" drop down menu.
    	*/
    
    	$mycourses = $this->page->navigation->get('mycourses');
        if (isloggedin() ) {
            $branchlabel = get_string('mycourses', 'theme_unitec_corporate_cib');
            $branchtitle = get_string('mycourses', 'theme_unitec_corporate_cib');
            $branchurl   = new moodle_url('/my/index.php');
            $branchsort  = 10000;
 
            $branch = $menu->add($branchlabel, $branchurl, $branchtitle, $branchsort);
 			if ($courses = enrol_get_my_courses(NULL, 'fullname ASC')) {
 				foreach ($courses as $course) {
 					if ($course->visible){
 						$branch->add(format_string($course->fullname), new moodle_url('/course/view.php?id='.$course->id), format_string($course->shortname));
 					}
 				}
 			} else {
 				$branch->add('<em>'.get_string('noenrolments', 'theme_unitec_corporate_cib').'</em>',new moodle_url('/'),get_string('noenrolments', 'theme_unitec_corporate_cib'));
 			}
        }
        
        /*
    	* Adds the "My Dashboard" drop down menu.
    	*/
        if (isloggedin() ) {
            $branchlabel = get_string('mydashboard', 'theme_unitec_corporate_cib');
            $branchurl   = new moodle_url('/my/index.php');
            $branchtitle = get_string('mydashboard', 'theme_unitec_corporate_cib');
            $branchsort  = 10000;
 
            $branch = $menu->add($branchlabel, $branchurl, $branchtitle, $branchsort);
 			$branch->add(get_string('profile'), new moodle_url('/user/profile.php'),get_string('profile'));
 			$branch->add(get_string('pluginname', 'block_calendar_month'), new moodle_url('/calendar/view.php'),get_string('pluginname', 'block_calendar_month'));
 			$branch->add(get_string('pluginname', 'block_messages'), new moodle_url('/message/index.php'),get_string('pluginname', 'block_messages'));
 			$branch->add(get_string('privatefiles', 'block_private_files'), new moodle_url('/user/files.php'),get_string('privatefiles', 'block_private_files'));
 			$branch->add(get_string('logout'), new moodle_url('/login/logout.php'),get_string('logout'));    
        }
        
        return parent::render_custom_menu($menu);
    }
}