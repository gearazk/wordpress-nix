<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp_database');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123456');

/** MySQL hostname */
define('DB_HOST', '172.17.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

ini_set('log_errors', 'On');
ini_set('error_log', '/home/stupid/Desktop/nginx/wp_data/errors.log');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'A+nD)(h_K`x>7C2|EN]v96%4zDiRO{YG<YpDl[p)#+Auk&b}U|ac1eOO0Lcx!kPu');
define('SECURE_AUTH_KEY',  'eGznA|hMS-_C8>&H6;o};`;,$Kp`|nrOx5+_}|9Oy>MQc!O?.Q!rmc9hsb5e9X@0');
define('LOGGED_IN_KEY',    '1p-)<_EYI{H)^Yvnnos.)y-8WPHT/SHW] >n]0_~!DxCHU_F%a|Ag_OA5^*Ih9{:');
define('NONCE_KEY',        '1M11BW^96b^!(DS+U;&:PaX8)/^vT1)}={ehdm87~jzs|*+,m(9;>@OK2vp O|IB');
define('AUTH_SALT',        'i[_=T(#*xH1|Ph89RF8#H>jT#f|_629X`GNXP%Ni#s7 58pm|8X-QCW)$AE1FWwd');
define('SECURE_AUTH_SALT', '*$#-J0h4yU<&OLp!i|`[$&nsD3V5=+0rL[C8~UfneCfY*3>~%;cz}I<|FW1Y*zw,');
define('LOGGED_IN_SALT',   'm5%VEZt?&^~O|_oW.RH|^=+nk;R+jZa0;0fdt]I]0J22_}1|o08a-7n{`(f(Io>P');
define('NONCE_SALT',       'M=m5ry.;TKyM_I[|88J0-;XG+MS8-ulvIm|*esFuf=,LZBEG]iY `.W:_PHZoo/h');
define('JWT_AUTH_SECRET_KEY', 'D6o4-d;CN*h5#wwLdfOA[M9Of=f[6SCdiM^xe)m[hqzd;~RV}hcGF$Wa.eM45Z<G');
define('JWT_AUTH_CORS_ENABLE', true);

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
//define('WP_DEBUG', true);
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
