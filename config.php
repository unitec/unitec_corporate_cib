<?php

/**
 * Configuration for Moodle's Unitec Corporate Grey theme.
 *
 * @package   unitec
 * This theme MUST have unitec_corporate installed to work properly
 * @copyright 2012 Unitec New Zealand
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$THEME->name = 'unitec_corporate_cib';

$THEME->parents = array('unitec_corporate','base');

$THEME->sheets = array('core');

// Taken from parent theme
// $THEME->editor_sheets = array('editor');

// Dock enabled

$THEME->enable_dock = true;

// Renderer for custom menu items

$THEME->rendererfactory = 'theme_overridden_renderer_factory';

// Layouts
// Taken from parent theme
// $THEME->layouts = array();