<?php
/*
Plugin Name: Effective Shortcode
Plugin URI:
Description: For visual effect of in tinyMCE editor
Version: 0.1
Author: Me
Author URI: https://automattic.com/wordpress-plugins/
License: GPLv2 or later
Text Domain: akismet
*/
/**
 * @package Effective Shortcode
 */

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

Copyright 2005-2015 Automattic, Inc.
*/

// Make sure we don't expose any info if called directly
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


define( 'EFTEXT_VERSION', '0.1' );
define( 'EFTEXT_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'EFTEXT_PREFIX', 'eftext_');

register_activation_hook( __FILE__, array( 'EFText', 'plugin_activation' ) );
register_deactivation_hook( __FILE__, array( 'EFText', 'plugin_deactivation' ) );
if( ! class_exists( 'EFText' ) ) {

    class EFText
    {
        private static $instance;
        public static function instance() {

            if( !self::$instance ) {
                self::$instance = new EFText();
                self::$instance->includes();
            }

            return self::$instance;
        }

        private function includes()
        {
            require_once EFTEXT_PLUGIN_DIR . 'shortcode.php';


        }

        function plugin_activation()
        {

        }

        function plugin_deactivation()
        {

        }




    }
}
function texteffect_load() {
    return EFText::instance();
}
add_action( 'plugins_loaded', 'texteffect_load' );