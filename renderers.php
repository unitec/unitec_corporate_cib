<?php
 
class theme_unitec_corporate_cib_core_renderer extends core_renderer {

// --- Start of custom menu modifications --- //
 
    protected function render_custom_menu(custom_menu $menu) {

// Adds the "My Courses" drop down to the custom menu if user is
// logged in AND enrolled in some courses.

        $mycourses = $this->page->navigation->get('mycourses');
        if (isloggedin() && $mycourses && $mycourses->has_children()) {
            $branchlabel = get_string('mycourses');
            $branchurl   = new moodle_url('/my');
            $branchtitle = $branchlabel;
            $branchsort  = -9999;
            $branch = $menu->add($branchlabel, $branchurl, $branchtitle, $branchsort);
            foreach ($mycourses->children as $coursenode) {
                $branch->add($coursenode->get_content(), $coursenode->action, $coursenode->get_title());
            }
        }
        
// Adds a login or logout button to the end of the custom menu.

        if (isloggedin()) {
            $branchlabel = get_string('logout');
            $branchurl   = new moodle_url('/login/logout.php');
            $branchtitle = $branchlabel;
            $branchsort = 10000;
            $branch = $menu->add($branchlabel, $branchurl, $branchtitle, $branchsort);
        } else {
            $branchlabel = get_string('login');
            $branchurl   = new moodle_url('/login/index.php');
            $branchtitle = $branchlabel;
            $branchsort = 10000;
            $branch = $menu->add($branchlabel, $branchurl, $branchtitle, $branchsort);
        }
        
// Adds the home button to the start of the custom menu.

        if (isloggedin()) {
            $branchlabel = get_string('home');
            $branchurl = new moodle_url('/index.php');
            $branchtitle = $branchlabel;
            $branchsort = -10000;
            $branch = $menu->add($branchlabel, $branchurl, $branchtitle, $branchsort);
        } else {
            $branchlabel = get_string('home');
            $branchurl = new moodle_url('/index.php');
            $branchtitle = $branchlabel;
            $branchsort = -10000;
            $branch = $menu->add($branchlabel, $branchurl, $branchtitle, $branchsort);
        }
        
// Finishes the custom menu.

        return parent::render_custom_menu($menu);
    }

// --- End of custom menu modifications --- //


}