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
 * Unitec Corporate theme
 *
 * @package   theme_unitec_corporate_cib
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {

    // Invert Navbar to dark background.
    $name = 'theme_unitec_corporate_cib/invert';
    $title = get_string('invert', 'theme_unitec_corporate_cib');
    $description = get_string('invertdesc', 'theme_unitec_corporate_cib');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 0);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Logo file setting.
    $name = 'theme_unitec_corporate_cib/logo';
    $title = get_string('logo','theme_unitec_corporate_cib');
    $description = get_string('logodesc', 'theme_unitec_corporate_cib');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'logo');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Custom CSS file.
    $name = 'theme_unitec_corporate_cib/customcss';
    $title = get_string('customcss', 'theme_unitec_corporate_cib');
    $description = get_string('customcssdesc', 'theme_unitec_corporate_cib');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Footnote setting.
    $name = 'theme_unitec_corporate_cib/footnote';
    $title = get_string('footnote', 'theme_unitec_corporate_cib');
    $description = get_string('footnotedesc', 'theme_unitec_corporate_cib');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);
}
