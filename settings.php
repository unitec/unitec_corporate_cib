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
 * This is built using the Clean template to allow for new theme's using
 * Moodle's new Bootstrap theme engine
 *
 *
 * @package   theme_essential
 * @copyright 2013 Julian Ridden
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$settings = null;

defined('MOODLE_INTERNAL') || die;


	$ADMIN->add('themes', new admin_category('theme_unitec_corporate_cib', 'Unitec Corporate CIB'));

	// "geneicsettings" settingpage
	$temp = new admin_settingpage('theme_unitec_corporate_cib_generic',  get_string('geneicsettings', 'theme_unitec_corporate_cib'));
	
	// Default Site icon setting.
    // $name = 'theme_unitec_corporate_cib/siteicon';
    // $title = get_string('siteicon', 'theme_unitec_corporate_cib');
    // $description = get_string('siteicondesc', 'theme_unitec_corporate_cib');
    // $default = 'laptop';
    // $setting = new admin_setting_configtext($name, $title, $description, $default);
    // $temp->add($setting);
    
    // Include Awesome Font from Bootstrapcdn
    $name = 'theme_unitec_corporate_cib/bootstrapcdn';
    $title = get_string('bootstrapcdn', 'theme_unitec_corporate_cib');
    $description = get_string('bootstrapcdndesc', 'theme_unitec_corporate_cib');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 0);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
    // Logo file setting.
    // $name = 'theme_unitec_corporate_cib/logo';
    // $title = get_string('logo', 'theme_unitec_corporate_cib');
    // $description = get_string('logodesc', 'theme_unitec_corporate_cib');
    // $setting = new admin_setting_configstoredfile($name, $title, $description, 'logo');
    // $setting->set_updatedcallback('theme_reset_all_caches');
    // $temp->add($setting);
    
    // Font Selector.
    $name = 'theme_unitec_corporate_cib/fontselect';
    $title = get_string('fontselect' , 'theme_unitec_corporate_cib');
    $description = get_string('fontselectdesc', 'theme_unitec_corporate_cib');
    $default = '1';
    $choices = array(
    	'1'=>'Oswald & PT Sans', 
    	'2'=>'Lobster & Cabin', 
    	'3'=>'Raleway & Goudy', 
    	'4'=>'Allerta & Crimson Text', 
    	'5'=>'Arvo & PT Sans',
    	'6'=>'Dancing Script & Josefin Sans',
    	'7'=>'Allan & Cardo',
    	'8'=>'Molengo & Lekton',
    	'9'=>'Droid Serif & Droid Sans',
    	'10'=>'Corbin & Nobile',
    	'11'=>'Ubuntu & Vollkorn',
    	'12'=>'Bree Serif & Open Sans', 
    	'13'=>'Bevan & Pontano Sans', 
    	'14'=>'Abril Fatface & Average', 
    	'15'=>'Playfair Display and Muli', 
    	'16'=>'Sansita One & Kameron',
    	'17'=>'Istok Web & Lora',
    	'18'=>'Pacifico & Arimo',
    	'19'=>'Nixie One & Ledger',
    	'20'=>'Cantata One & Imprima',
    	'21'=>'Rancho & Gudea',
    	'22'=>'DISABLE Google Fonts');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // User picture in header setting.
    $name = 'theme_unitec_corporate_cib/headerprofilepic';
    $title = get_string('headerprofilepic', 'theme_unitec_corporate_cib');
    $description = get_string('headerprofilepicdesc', 'theme_unitec_corporate_cib');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Custom or standard layout.
    $name = 'theme_unitec_corporate_cib/layout';
    $title = get_string('layout', 'theme_unitec_corporate_cib');
    $description = get_string('layoutdesc', 'theme_unitec_corporate_cib');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    //Include the Editicons css rules
    $name = 'theme_unitec_corporate_cib/editicons';
    $title = get_string('editicons', 'theme_unitec_corporate_cib');
    $description = get_string('editiconsdesc', 'theme_unitec_corporate_cib');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 0);
    $temp->add($setting);
    
    //Include the Autohide css rules
    $name = 'theme_unitec_corporate_cib/autohide';
    $visiblename = get_string('autohide', 'theme_unitec_corporate_cib');
    $title = get_string('autohide', 'theme_unitec_corporate_cib');
    $description = get_string('autohidedesc', 'theme_unitec_corporate_cib');
    $setting = new admin_setting_configcheckbox($name, $visiblename, $description, 0);
    $temp->add($setting);
    
    // Performance Information Display.
    $name = 'theme_unitec_corporate_cib/perfinfo';
    $title = get_string('perfinfo' , 'theme_unitec_corporate_cib');
    $description = get_string('perfinfodesc', 'theme_unitec_corporate_cib');
    $perf_max = get_string('perf_max', 'theme_unitec_corporate_cib');
    $perf_min = get_string('perf_min', 'theme_unitec_corporate_cib');
    $default = 'min';
    $choices = array('min'=>$perf_min, 'max'=>$perf_max);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Navbar Seperator.
    $name = 'theme_unitec_corporate_cib/navbarsep';
    $title = get_string('navbarsep' , 'theme_unitec_corporate_cib');
    $description = get_string('navbarsepdesc', 'theme_unitec_corporate_cib');
    $nav_thinbracket = get_string('nav_thinbracket', 'theme_unitec_corporate_cib');
    $nav_doublebracket = get_string('nav_doublebracket', 'theme_unitec_corporate_cib');
    $nav_thickbracket = get_string('nav_thickbracket', 'theme_unitec_corporate_cib');
    $nav_slash = get_string('nav_slash', 'theme_unitec_corporate_cib');
    $nav_pipe = get_string('nav_pipe', 'theme_unitec_corporate_cib');
    $dontdisplay = get_string('dontdisplay', 'theme_unitec_corporate_cib');
    $default = '/';
    $choices = array('/'=>$nav_slash, '\f105'=>$nav_thinbracket, '\f101'=>$nav_doublebracket, '\f054'=>$nav_thickbracket, '|'=>$nav_pipe);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Copyright setting.
    $name = 'theme_unitec_corporate_cib/copyright';
    $title = get_string('copyright', 'theme_unitec_corporate_cib');
    $description = get_string('copyrightdesc', 'theme_unitec_corporate_cib');
    $default = 'Unitec Institute of Technology';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);
    
    // Footnote setting.
    $name = 'theme_unitec_corporate_cib/footnote';
    $title = get_string('footnote', 'theme_unitec_corporate_cib');
    $description = get_string('footnotedesc', 'theme_unitec_corporate_cib');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Custom CSS file.
    $name = 'theme_unitec_corporate_cib/customcss';
    $title = get_string('customcss', 'theme_unitec_corporate_cib');
    $description = get_string('customcssdesc', 'theme_unitec_corporate_cib');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $ADMIN->add('theme_unitec_corporate_cib', $temp);
    
    /* Custom Menu Settings */
    $temp = new admin_settingpage('theme_unitec_corporate_cib_custommenu', get_string('custommenuheading', 'theme_unitec_corporate_cib'));
	            
    //This is the descriptor for the following Moodle color settings
    $name = 'theme_unitec_corporate_cib/mydashboardinfo';
    $heading = get_string('mydashboardinfo', 'theme_unitec_corporate_cib');
    $information = get_string('mydashboardinfodesc', 'theme_unitec_corporate_cib');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
    // Toggle dashboard display in custommenu.
    $name = 'theme_unitec_corporate_cib/displaymydashboard';
    $title = get_string('displaymydashboard', 'theme_unitec_corporate_cib');
    $description = get_string('displaymydashboarddesc', 'theme_unitec_corporate_cib');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    //This is the descriptor for the following Moodle color settings
    $name = 'theme_unitec_corporate_cib/mycoursesinfo';
    $heading = get_string('mycoursesinfo', 'theme_unitec_corporate_cib');
    $information = get_string('mycoursesinfodesc', 'theme_unitec_corporate_cib');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
    // Toggle courses display in custommenu.
    $name = 'theme_unitec_corporate_cib/displaymycourses';
    $title = get_string('displaymycourses', 'theme_unitec_corporate_cib');
    $description = get_string('displaymycoursesdesc', 'theme_unitec_corporate_cib');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Set terminology for dropdown course list
	$name = 'theme_unitec_corporate_cib/mycoursetitle';
	$title = get_string('mycoursetitle','theme_unitec_corporate_cib');
	$description = get_string('mycoursetitledesc', 'theme_unitec_corporate_cib');
	$default = 'course';
	$choices = array(
		'course' => get_string('mycourses', 'theme_unitec_corporate_cib'),
		'unit' => get_string('myunits', 'theme_unitec_corporate_cib'),
		'class' => get_string('myclasses', 'theme_unitec_corporate_cib'),
		'module' => get_string('mymodules', 'theme_unitec_corporate_cib')
	);
	$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);
    
    $ADMIN->add('theme_unitec_corporate_cib', $temp);
    
	/* Color Settings */
    $temp = new admin_settingpage('theme_unitec_corporate_cib_color', get_string('colorheading', 'theme_unitec_corporate_cib'));
    $temp->add(new admin_setting_heading('theme_unitec_corporate_cib_color', get_string('colorheadingsub', 'theme_unitec_corporate_cib'),
            format_text(get_string('colordesc' , 'theme_unitec_corporate_cib'), FORMAT_MARKDOWN)));

    // Background Image.
    $name = 'theme_unitec_corporate_cib/pagebackground';
    $title = get_string('pagebackground', 'theme_unitec_corporate_cib');
    $description = get_string('pagebackgrounddesc', 'theme_unitec_corporate_cib');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'pagebackground');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Main theme colour setting.
    $name = 'theme_unitec_corporate_cib/themecolor';
    $title = get_string('themecolor', 'theme_unitec_corporate_cib');
    $description = get_string('themecolordesc', 'theme_unitec_corporate_cib');
    $default = '#30add1';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Main theme Hover colour setting.
    $name = 'theme_unitec_corporate_cib/themehovercolor';
    $title = get_string('themehovercolor', 'theme_unitec_corporate_cib');
    $description = get_string('themehovercolordesc', 'theme_unitec_corporate_cib');
    $default = '#29a1c4';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Footer background colour setting.
    $name = 'theme_unitec_corporate_cib/footercolor';
    $title = get_string('footercolor', 'theme_unitec_corporate_cib');
    $description = get_string('footercolordesc', 'theme_unitec_corporate_cib');
    $default = '#000000';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Footer text colour setting.
    $name = 'theme_unitec_corporate_cib/footertextcolor';
    $title = get_string('footertextcolor', 'theme_unitec_corporate_cib');
    $description = get_string('footertextcolordesc', 'theme_unitec_corporate_cib');
    $default = '#DDDDDD';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Footer Block Heading colour setting.
    $name = 'theme_unitec_corporate_cib/footerheadingcolor';
    $title = get_string('footerheadingcolor', 'theme_unitec_corporate_cib');
    $description = get_string('footerheadingcolordesc', 'theme_unitec_corporate_cib');
    $default = '#CCCCCC';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Footer Seperator colour setting.
    $name = 'theme_unitec_corporate_cib/footersepcolor';
    $title = get_string('footersepcolor', 'theme_unitec_corporate_cib');
    $description = get_string('footersepcolordesc', 'theme_unitec_corporate_cib');
    $default = '#313131';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Footer URL colour setting.
    $name = 'theme_unitec_corporate_cib/footerurlcolor';
    $title = get_string('footerurlcolor', 'theme_unitec_corporate_cib');
    $description = get_string('footerurlcolordesc', 'theme_unitec_corporate_cib');
    $default = '#BBBBBB';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Footer URL hover colour setting.
    $name = 'theme_unitec_corporate_cib/footerhovercolor';
    $title = get_string('footerhovercolor', 'theme_unitec_corporate_cib');
    $description = get_string('footerhovercolordesc', 'theme_unitec_corporate_cib');
    $default = '#FFFFFF';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);



 	$ADMIN->add('theme_unitec_corporate_cib', $temp);
 
 
    /* Slideshow Widget Settings */
    $temp = new admin_settingpage('theme_unitec_corporate_cib_slideshow', get_string('slideshowheading', 'theme_unitec_corporate_cib'));
    $temp->add(new admin_setting_heading('theme_unitec_corporate_cib_slideshow', get_string('slideshowheadingsub', 'theme_unitec_corporate_cib'),
            format_text(get_string('slideshowdesc' , 'theme_unitec_corporate_cib'), FORMAT_MARKDOWN)));
    
    // Toggle Slideshow.
    $name = 'theme_unitec_corporate_cib/toggleslideshow';
    $title = get_string('toggleslideshow' , 'theme_unitec_corporate_cib');
    $description = get_string('toggleslideshowdesc', 'theme_unitec_corporate_cib');
    $alwaysdisplay = get_string('alwaysdisplay', 'theme_unitec_corporate_cib');
    $displaybeforelogin = get_string('displaybeforelogin', 'theme_unitec_corporate_cib');
    $displayafterlogin = get_string('displayafterlogin', 'theme_unitec_corporate_cib');
    $dontdisplay = get_string('dontdisplay', 'theme_unitec_corporate_cib');
    $default = 'alwaysdisplay';
    $choices = array('1'=>$alwaysdisplay, '2'=>$displaybeforelogin, '3'=>$displayafterlogin, '0'=>$dontdisplay);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Hide slideshow on phones.
    $name = 'theme_unitec_corporate_cib/hideonphone';
    $title = get_string('hideonphone' , 'theme_unitec_corporate_cib');
    $description = get_string('hideonphonedesc', 'theme_unitec_corporate_cib');
    $display = get_string('alwaysdisplay', 'theme_unitec_corporate_cib');
    $dontdisplay = get_string('dontdisplay', 'theme_unitec_corporate_cib');
    $default = 'display';
    $choices = array(''=>$display, 'hidden-phone'=>$dontdisplay);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    /*
     * Slide 1
     */
     
    //This is the descriptor for Slide One
    $name = 'theme_unitec_corporate_cib/slide1info';
    $heading = get_string('slide1', 'theme_unitec_corporate_cib');
    $information = get_string('slideinfodesc', 'theme_unitec_corporate_cib');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    // Title.
    $name = 'theme_unitec_corporate_cib/slide1';
    $title = get_string('slidetitle', 'theme_unitec_corporate_cib');
    $description = get_string('slidetitledesc', 'theme_unitec_corporate_cib');
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $default = '';
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Image.
    $name = 'theme_unitec_corporate_cib/slide1image';
    $title = get_string('slideimage', 'theme_unitec_corporate_cib');
    $description = get_string('slideimagedesc', 'theme_unitec_corporate_cib');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'slide1image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Caption.
    $name = 'theme_unitec_corporate_cib/slide1caption';
    $title = get_string('slidecaption', 'theme_unitec_corporate_cib');
    $description = get_string('slidecaptiondesc', 'theme_unitec_corporate_cib');
    $setting = new admin_setting_configtextarea($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // URL.
    $name = 'theme_unitec_corporate_cib/slide1url';
    $title = get_string('slideurl', 'theme_unitec_corporate_cib');
    $description = get_string('slideurldesc', 'theme_unitec_corporate_cib');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    /*
     * Slide 2
     */
     
    //This is the descriptor for Slide Two
    $name = 'theme_unitec_corporate_cib/slide2info';
    $heading = get_string('slide2', 'theme_unitec_corporate_cib');
    $information = get_string('slideinfodesc', 'theme_unitec_corporate_cib');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    // Title.
    $name = 'theme_unitec_corporate_cib/slide2';
    $title = get_string('slidetitle', 'theme_unitec_corporate_cib');
    $description = get_string('slidetitledesc', 'theme_unitec_corporate_cib');
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $default = '';
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Image.
    $name = 'theme_unitec_corporate_cib/slide2image';
    $title = get_string('slideimage', 'theme_unitec_corporate_cib');
    $description = get_string('slideimagedesc', 'theme_unitec_corporate_cib');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'slide2image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Caption.
    $name = 'theme_unitec_corporate_cib/slide2caption';
    $title = get_string('slidecaption', 'theme_unitec_corporate_cib');
    $description = get_string('slidecaptiondesc', 'theme_unitec_corporate_cib');
    $setting = new admin_setting_configtextarea($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // URL.
    $name = 'theme_unitec_corporate_cib/slide2url';
    $title = get_string('slideurl', 'theme_unitec_corporate_cib');
    $description = get_string('slideurldesc', 'theme_unitec_corporate_cib');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    /*
     * Slide 3
     */

    //This is the descriptor for Slide Three
    $name = 'theme_unitec_corporate_cib/slide3info';
    $heading = get_string('slide3', 'theme_unitec_corporate_cib');
    $information = get_string('slideinfodesc', 'theme_unitec_corporate_cib');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
    // Title.
    $name = 'theme_unitec_corporate_cib/slide3';
    $title = get_string('slidetitle', 'theme_unitec_corporate_cib');
    $description = get_string('slidetitledesc', 'theme_unitec_corporate_cib');
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $default = '';
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Image.
    $name = 'theme_unitec_corporate_cib/slide3image';
    $title = get_string('slideimage', 'theme_unitec_corporate_cib');
    $description = get_string('slideimagedesc', 'theme_unitec_corporate_cib');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'slide3image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Caption.
    $name = 'theme_unitec_corporate_cib/slide3caption';
    $title = get_string('slidecaption', 'theme_unitec_corporate_cib');
    $description = get_string('slidecaptiondesc', 'theme_unitec_corporate_cib');
    $setting = new admin_setting_configtextarea($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // URL.
    $name = 'theme_unitec_corporate_cib/slide3url';
    $title = get_string('slideurl', 'theme_unitec_corporate_cib');
    $description = get_string('slideurldesc', 'theme_unitec_corporate_cib');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    /*
     * Slide 4
     */
     
    //This is the descriptor for Slide Four
    $name = 'theme_unitec_corporate_cib/slide4info';
    $heading = get_string('slide4', 'theme_unitec_corporate_cib');
    $information = get_string('slideinfodesc', 'theme_unitec_corporate_cib');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    // Title.
    $name = 'theme_unitec_corporate_cib/slide4';
    $title = get_string('slidetitle', 'theme_unitec_corporate_cib');
    $description = get_string('slidetitledesc', 'theme_unitec_corporate_cib');
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $default = '';
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Image.
    $name = 'theme_unitec_corporate_cib/slide4image';
    $title = get_string('slideimage', 'theme_unitec_corporate_cib');
    $description = get_string('slideimagedesc', 'theme_unitec_corporate_cib');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'slide4image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Caption.
    $name = 'theme_unitec_corporate_cib/slide4caption';
    $title = get_string('slidecaption', 'theme_unitec_corporate_cib');
    $description = get_string('slidecaptiondesc', 'theme_unitec_corporate_cib');
    $setting = new admin_setting_configtextarea($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // URL.
    $name = 'theme_unitec_corporate_cib/slide4url';
    $title = get_string('slideurl', 'theme_unitec_corporate_cib');
    $description = get_string('slideurldesc', 'theme_unitec_corporate_cib');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    
    $ADMIN->add('theme_unitec_corporate_cib', $temp);
    
    $temp = new admin_settingpage('theme_unitec_corporate_cib_frontcontent', get_string('frontcontentheading', 'theme_unitec_corporate_cib'));
	$temp->add(new admin_setting_heading('theme_unitec_corporate_cib_frontcontent', get_string('frontcontentheadingsub', 'theme_unitec_corporate_cib'),
            format_text(get_string('frontcontentdesc' , 'theme_unitec_corporate_cib'), FORMAT_MARKDOWN)));
    
    // Enable Frontpage Content
    $name = 'theme_unitec_corporate_cib/usefrontcontent';
    $title = get_string('usefrontcontent', 'theme_unitec_corporate_cib');
    $description = get_string('usefrontcontentdesc', 'theme_unitec_corporate_cib');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Frontpage Content
    $name = 'theme_unitec_corporate_cib/frontcontentarea';
    $title = get_string('frontcontentarea', 'theme_unitec_corporate_cib');
    $description = get_string('frontcontentareadesc', 'theme_unitec_corporate_cib');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
        
    $ADMIN->add('theme_unitec_corporate_cib', $temp);
    

	/* Marketing Spot Settings */
	$temp = new admin_settingpage('theme_unitec_corporate_cib_marketing', get_string('marketingheading', 'theme_unitec_corporate_cib'));
	$temp->add(new admin_setting_heading('theme_unitec_corporate_cib_marketing', get_string('marketingheadingsub', 'theme_unitec_corporate_cib'),
            format_text(get_string('marketingdesc' , 'theme_unitec_corporate_cib'), FORMAT_MARKDOWN)));
	
	// Toggle Marketing Spots.
    $name = 'theme_unitec_corporate_cib/togglemarketing';
    $title = get_string('togglemarketing' , 'theme_unitec_corporate_cib');
    $description = get_string('togglemarketingdesc', 'theme_unitec_corporate_cib');
    $alwaysdisplay = get_string('alwaysdisplay', 'theme_unitec_corporate_cib');
    $displaybeforelogin = get_string('displaybeforelogin', 'theme_unitec_corporate_cib');
    $displayafterlogin = get_string('displayafterlogin', 'theme_unitec_corporate_cib');
    $dontdisplay = get_string('dontdisplay', 'theme_unitec_corporate_cib');
    $default = 'display';
    $choices = array('1'=>$alwaysdisplay, '2'=>$displaybeforelogin, '3'=>$displayafterlogin, '0'=>$dontdisplay);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Marketing Spot Image Height
	$name = 'theme_unitec_corporate_cib/marketingheight';
	$title = get_string('marketingheight','theme_unitec_corporate_cib');
	$description = get_string('marketingheightdesc', 'theme_unitec_corporate_cib');
	$default = 100;
	$choices = array(50, 100, 150, 200, 250, 300);
	$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
	$temp->add($setting);
	
	//This is the descriptor for Marketing Spot One
    $name = 'theme_unitec_corporate_cib/marketing1info';
    $heading = get_string('marketing1', 'theme_unitec_corporate_cib');
    $information = get_string('marketinginfodesc', 'theme_unitec_corporate_cib');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
	
	//Marketing Spot One.
	$name = 'theme_unitec_corporate_cib/marketing1';
    $title = get_string('marketingtitle', 'theme_unitec_corporate_cib');
    $description = get_string('marketingtitledesc', 'theme_unitec_corporate_cib');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_unitec_corporate_cib/marketing1icon';
    $title = get_string('marketingicon', 'theme_unitec_corporate_cib');
    $description = get_string('marketingicondesc', 'theme_unitec_corporate_cib');
    $default = 'star';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_unitec_corporate_cib/marketing1image';
    $title = get_string('marketingimage', 'theme_unitec_corporate_cib');
    $description = get_string('marketingimagedesc', 'theme_unitec_corporate_cib');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'marketing1image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_unitec_corporate_cib/marketing1content';
    $title = get_string('marketingcontent', 'theme_unitec_corporate_cib');
    $description = get_string('marketingcontentdesc', 'theme_unitec_corporate_cib');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_unitec_corporate_cib/marketing1buttontext';
    $title = get_string('marketingbuttontext', 'theme_unitec_corporate_cib');
    $description = get_string('marketingbuttontextdesc', 'theme_unitec_corporate_cib');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_unitec_corporate_cib/marketing1buttonurl';
    $title = get_string('marketingbuttonurl', 'theme_unitec_corporate_cib');
    $description = get_string('marketingbuttonurldesc', 'theme_unitec_corporate_cib');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    //This is the descriptor for Marketing Spot Two
    $name = 'theme_unitec_corporate_cib/marketing2info';
    $heading = get_string('marketing2', 'theme_unitec_corporate_cib');
    $information = get_string('marketinginfodesc', 'theme_unitec_corporate_cib');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
    //Marketing Spot Two.
	$name = 'theme_unitec_corporate_cib/marketing2';
    $title = get_string('marketingtitle', 'theme_unitec_corporate_cib');
    $description = get_string('marketingtitledesc', 'theme_unitec_corporate_cib');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_unitec_corporate_cib/marketing2icon';
    $title = get_string('marketingicon', 'theme_unitec_corporate_cib');
    $description = get_string('marketingicondesc', 'theme_unitec_corporate_cib');
    $default = 'star';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_unitec_corporate_cib/marketing2image';
    $title = get_string('marketingimage', 'theme_unitec_corporate_cib');
    $description = get_string('marketingimagedesc', 'theme_unitec_corporate_cib');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'marketing2image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_unitec_corporate_cib/marketing2content';
    $title = get_string('marketingcontent', 'theme_unitec_corporate_cib');
    $description = get_string('marketingcontentdesc', 'theme_unitec_corporate_cib');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_unitec_corporate_cib/marketing2buttontext';
    $title = get_string('marketingbuttontext', 'theme_unitec_corporate_cib');
    $description = get_string('marketingbuttontextdesc', 'theme_unitec_corporate_cib');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_unitec_corporate_cib/marketing2buttonurl';
    $title = get_string('marketingbuttonurl', 'theme_unitec_corporate_cib');
    $description = get_string('marketingbuttonurldesc', 'theme_unitec_corporate_cib');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    //This is the descriptor for Marketing Spot Three
    $name = 'theme_unitec_corporate_cib/marketing3info';
    $heading = get_string('marketing3', 'theme_unitec_corporate_cib');
    $information = get_string('marketinginfodesc', 'theme_unitec_corporate_cib');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
    //Marketing Spot Three.
	$name = 'theme_unitec_corporate_cib/marketing3';
    $title = get_string('marketingtitle', 'theme_unitec_corporate_cib');
    $description = get_string('marketingtitledesc', 'theme_unitec_corporate_cib');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_unitec_corporate_cib/marketing3icon';
    $title = get_string('marketingicon', 'theme_unitec_corporate_cib');
    $description = get_string('marketingicondesc', 'theme_unitec_corporate_cib');
    $default = 'star';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_unitec_corporate_cib/marketing3image';
    $title = get_string('marketingimage', 'theme_unitec_corporate_cib');
    $description = get_string('marketingimagedesc', 'theme_unitec_corporate_cib');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'marketing3image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_unitec_corporate_cib/marketing3content';
    $title = get_string('marketingcontent', 'theme_unitec_corporate_cib');
    $description = get_string('marketingcontentdesc', 'theme_unitec_corporate_cib');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_unitec_corporate_cib/marketing3buttontext';
    $title = get_string('marketingbuttontext', 'theme_unitec_corporate_cib');
    $description = get_string('marketingbuttontextdesc', 'theme_unitec_corporate_cib');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_unitec_corporate_cib/marketing3buttonurl';
    $title = get_string('marketingbuttonurl', 'theme_unitec_corporate_cib');
    $description = get_string('marketingbuttonurldesc', 'theme_unitec_corporate_cib');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    
    $ADMIN->add('theme_unitec_corporate_cib', $temp);

	
	/* Social Network Settings */
	$temp = new admin_settingpage('theme_unitec_corporate_cib_social', get_string('socialheading', 'theme_unitec_corporate_cib'));
	$temp->add(new admin_setting_heading('theme_unitec_corporate_cib_social', get_string('socialheadingsub', 'theme_unitec_corporate_cib'),
            format_text(get_string('socialdesc' , 'theme_unitec_corporate_cib'), FORMAT_MARKDOWN)));
	
    // Website url setting.
    $name = 'theme_unitec_corporate_cib/website';
    $title = get_string('website', 'theme_unitec_corporate_cib');
    $description = get_string('websitedesc', 'theme_unitec_corporate_cib');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Facebook url setting.
    $name = 'theme_unitec_corporate_cib/facebook';
    $title = get_string('facebook', 'theme_unitec_corporate_cib');
    $description = get_string('facebookdesc', 'theme_unitec_corporate_cib');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Flickr url setting.
    $name = 'theme_unitec_corporate_cib/flickr';
    $title = get_string('flickr', 'theme_unitec_corporate_cib');
    $description = get_string('flickrdesc', 'theme_unitec_corporate_cib');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Twitter url setting.
    $name = 'theme_unitec_corporate_cib/twitter';
    $title = get_string('twitter', 'theme_unitec_corporate_cib');
    $description = get_string('twitterdesc', 'theme_unitec_corporate_cib');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Google+ url setting.
    $name = 'theme_unitec_corporate_cib/googleplus';
    $title = get_string('googleplus', 'theme_unitec_corporate_cib');
    $description = get_string('googleplusdesc', 'theme_unitec_corporate_cib');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // LinkedIn url setting.
    $name = 'theme_unitec_corporate_cib/linkedin';
    $title = get_string('linkedin', 'theme_unitec_corporate_cib');
    $description = get_string('linkedindesc', 'theme_unitec_corporate_cib');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Pinterest url setting.
    $name = 'theme_unitec_corporate_cib/pinterest';
    $title = get_string('pinterest', 'theme_unitec_corporate_cib');
    $description = get_string('pinterestdesc', 'theme_unitec_corporate_cib');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Instagram url setting.
    $name = 'theme_unitec_corporate_cib/instagram';
    $title = get_string('instagram', 'theme_unitec_corporate_cib');
    $description = get_string('instagramdesc', 'theme_unitec_corporate_cib');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // YouTube url setting.
    $name = 'theme_unitec_corporate_cib/youtube';
    $title = get_string('youtube', 'theme_unitec_corporate_cib');
    $description = get_string('youtubedesc', 'theme_unitec_corporate_cib');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Skype url setting.
    $name = 'theme_unitec_corporate_cib/skype';
    $title = get_string('skype', 'theme_unitec_corporate_cib');
    $description = get_string('skypedesc', 'theme_unitec_corporate_cib');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
 
    // VKontakte url setting.
    $name = 'theme_unitec_corporate_cib/vk';
    $title = get_string('vk', 'theme_unitec_corporate_cib');
    $description = get_string('vkdesc', 'theme_unitec_corporate_cib');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting); 
    
    $ADMIN->add('theme_unitec_corporate_cib', $temp);
    
    $temp = new admin_settingpage('theme_unitec_corporate_cib_mobileapps', get_string('mobileappsheading', 'theme_unitec_corporate_cib'));
	$temp->add(new admin_setting_heading('theme_unitec_corporate_cib_mobileapps', get_string('mobileappsheadingsub', 'theme_unitec_corporate_cib'),
            format_text(get_string('mobileappsdesc' , 'theme_unitec_corporate_cib'), FORMAT_MARKDOWN)));
    // Android App url setting.
    $name = 'theme_unitec_corporate_cib/android';
    $title = get_string('android', 'theme_unitec_corporate_cib');
    $description = get_string('androiddesc', 'theme_unitec_corporate_cib');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // iOS App url setting.
    $name = 'theme_unitec_corporate_cib/ios';
    $title = get_string('ios', 'theme_unitec_corporate_cib');
    $description = get_string('iosdesc', 'theme_unitec_corporate_cib');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    //This is the descriptor for iOS Icons
    $name = 'theme_unitec_corporate_cib/iosiconinfo';
    $heading = get_string('iosicon', 'theme_unitec_corporate_cib');
    $information = get_string('iosicondesc', 'theme_unitec_corporate_cib');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
    // iPhone Icon.
    $name = 'theme_unitec_corporate_cib/iphoneicon';
    $title = get_string('iphoneicon', 'theme_unitec_corporate_cib');
    $description = get_string('iphoneicondesc', 'theme_unitec_corporate_cib');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'iphoneicon');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // iPhone Retina Icon.
    $name = 'theme_unitec_corporate_cib/iphoneretinaicon';
    $title = get_string('iphoneretinaicon', 'theme_unitec_corporate_cib');
    $description = get_string('iphoneretinaicondesc', 'theme_unitec_corporate_cib');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'iphoneretinaicon');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // iPad Icon.
    $name = 'theme_unitec_corporate_cib/ipadicon';
    $title = get_string('ipadicon', 'theme_unitec_corporate_cib');
    $description = get_string('ipadicondesc', 'theme_unitec_corporate_cib');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'ipadicon');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // iPad Retina Icon.
    $name = 'theme_unitec_corporate_cib/ipadretinaicon';
    $title = get_string('ipadretinaicon', 'theme_unitec_corporate_cib');
    $description = get_string('ipadretinaicondesc', 'theme_unitec_corporate_cib');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'ipadretinaicon');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $ADMIN->add('theme_unitec_corporate_cib', $temp);
    
    /* User Alerts */
    $temp = new admin_settingpage('theme_unitec_corporate_cib_alerts', get_string('alertsheading', 'theme_unitec_corporate_cib'));
	$temp->add(new admin_setting_heading('theme_unitec_corporate_cib_alerts', get_string('alertsheadingsub', 'theme_unitec_corporate_cib'),
            format_text(get_string('alertsdesc' , 'theme_unitec_corporate_cib'), FORMAT_MARKDOWN)));
    
    //This is the descriptor for Alert One
    $name = 'theme_unitec_corporate_cib/alert1info';
    $heading = get_string('alert1', 'theme_unitec_corporate_cib');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
    // Enable Alert
    $name = 'theme_unitec_corporate_cib/enable1alert';
    $title = get_string('enablealert', 'theme_unitec_corporate_cib');
    $description = get_string('enablealertdesc', 'theme_unitec_corporate_cib');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Alert Type.
    $name = 'theme_unitec_corporate_cib/alert1type';
    $title = get_string('alerttype' , 'theme_unitec_corporate_cib');
    $description = get_string('alerttypedesc', 'theme_unitec_corporate_cib');
    $alert_info = get_string('alert_info', 'theme_unitec_corporate_cib');
    $alert_warning = get_string('alert_warning', 'theme_unitec_corporate_cib');
    $alert_general = get_string('alert_general', 'theme_unitec_corporate_cib');
    $default = 'info';
    $choices = array('info'=>$alert_info, 'error'=>$alert_warning, 'success'=>$alert_general);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Alert Title.
    $name = 'theme_unitec_corporate_cib/alert1title';
    $title = get_string('alerttitle', 'theme_unitec_corporate_cib');
    $description = get_string('alerttitledesc', 'theme_unitec_corporate_cib');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Alert Text.
    $name = 'theme_unitec_corporate_cib/alert1text';
    $title = get_string('alerttext', 'theme_unitec_corporate_cib');
    $description = get_string('alerttextdesc', 'theme_unitec_corporate_cib');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    //This is the descriptor for Alert Two
    $name = 'theme_unitec_corporate_cib/alert2info';
    $heading = get_string('alert2', 'theme_unitec_corporate_cib');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
    // Enable Alert
    $name = 'theme_unitec_corporate_cib/enable2alert';
    $title = get_string('enablealert', 'theme_unitec_corporate_cib');
    $description = get_string('enablealertdesc', 'theme_unitec_corporate_cib');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Alert Type.
    $name = 'theme_unitec_corporate_cib/alert2type';
    $title = get_string('alerttype' , 'theme_unitec_corporate_cib');
    $description = get_string('alerttypedesc', 'theme_unitec_corporate_cib');
    $alert_info = get_string('alert_info', 'theme_unitec_corporate_cib');
    $alert_warning = get_string('alert_warning', 'theme_unitec_corporate_cib');
    $alert_general = get_string('alert_general', 'theme_unitec_corporate_cib');
    $default = 'info';
    $choices = array('info'=>$alert_info, 'error'=>$alert_warning, 'success'=>$alert_general);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Alert Title.
    $name = 'theme_unitec_corporate_cib/alert2title';
    $title = get_string('alerttitle', 'theme_unitec_corporate_cib');
    $description = get_string('alerttitledesc', 'theme_unitec_corporate_cib');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Alert Text.
    $name = 'theme_unitec_corporate_cib/alert2text';
    $title = get_string('alerttext', 'theme_unitec_corporate_cib');
    $description = get_string('alerttextdesc', 'theme_unitec_corporate_cib');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    //This is the descriptor for Alert Three
    $name = 'theme_unitec_corporate_cib/alert3info';
    $heading = get_string('alert3', 'theme_unitec_corporate_cib');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
    // Enable Alert
    $name = 'theme_unitec_corporate_cib/enable3alert';
    $title = get_string('enablealert', 'theme_unitec_corporate_cib');
    $description = get_string('enablealertdesc', 'theme_unitec_corporate_cib');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Alert Type.
    $name = 'theme_unitec_corporate_cib/alert3type';
    $title = get_string('alerttype' , 'theme_unitec_corporate_cib');
    $description = get_string('alerttypedesc', 'theme_unitec_corporate_cib');
    $alert_info = get_string('alert_info', 'theme_unitec_corporate_cib');
    $alert_warning = get_string('alert_warning', 'theme_unitec_corporate_cib');
    $alert_general = get_string('alert_general', 'theme_unitec_corporate_cib');
    $default = 'info';
    $choices = array('info'=>$alert_info, 'error'=>$alert_warning, 'success'=>$alert_general);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Alert Title.
    $name = 'theme_unitec_corporate_cib/alert3title';
    $title = get_string('alerttitle', 'theme_unitec_corporate_cib');
    $description = get_string('alerttitledesc', 'theme_unitec_corporate_cib');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Alert Text.
    $name = 'theme_unitec_corporate_cib/alert3text';
    $title = get_string('alerttext', 'theme_unitec_corporate_cib');
    $description = get_string('alerttextdesc', 'theme_unitec_corporate_cib');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
            
    
    $ADMIN->add('theme_unitec_corporate_cib', $temp);
    
    /* Analytics Settings */
    $temp = new admin_settingpage('theme_unitec_corporate_cib_analytics', get_string('analyticsheading', 'theme_unitec_corporate_cib'));
	$temp->add(new admin_setting_heading('theme_unitec_corporate_cib_analytics', get_string('analyticsheadingsub', 'theme_unitec_corporate_cib'),
            format_text(get_string('analyticsdesc' , 'theme_unitec_corporate_cib'), FORMAT_MARKDOWN)));
    
    // Enable Analytics
    $name = 'theme_unitec_corporate_cib/useanalytics';
    $title = get_string('useanalytics', 'theme_unitec_corporate_cib');
    $description = get_string('useanalyticsdesc', 'theme_unitec_corporate_cib');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Google Analytics ID
    $name = 'theme_unitec_corporate_cib/analyticsid';
    $title = get_string('analyticsid', 'theme_unitec_corporate_cib');
    $description = get_string('analyticsiddesc', 'theme_unitec_corporate_cib');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Clean Analytics URL
    $name = 'theme_unitec_corporate_cib/analyticsclean';
    $title = get_string('analyticsclean', 'theme_unitec_corporate_cib');
    $description = get_string('analyticscleandesc', 'theme_unitec_corporate_cib');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
        
    $ADMIN->add('theme_unitec_corporate_cib', $temp);

