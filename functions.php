<?php
/**
 * Theme Name: WP Bootstrap Rounded
 * Author: hwk
 * Author URI: https://hwk.fr
 */
 
/** 
 * Constants
 */
define('MPT_THEME_PATH',  get_template_directory());
define('MPT_THEME_URL',   get_template_directory_uri());

/**
 * Core
 */
require_once(MPT_THEME_PATH . '/includes/core/enqueue.php');
require_once(MPT_THEME_PATH . '/includes/core/helpers.php');
require_once(MPT_THEME_PATH . '/includes/core/menu.php');
require_once(MPT_THEME_PATH . '/includes/core/setup.php');
require_once(MPT_THEME_PATH . '/includes/core/thumbnail.php');