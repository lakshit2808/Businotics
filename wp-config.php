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
define('DB_NAME', 'businotics_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Mq_ZeUsD;8l~/q-j;u9U(58`5N1CSc?&9qU:oiDiU{!N)7 I3pz>0+1;r}V%tiV/');
define('SECURE_AUTH_KEY',  '_ow[>ae8.P7p!!:XPO}@,C-Xi2_F>KMR2{n~)}ekqS}I-gwq.yIlcS8tS|wo9S*a');
define('LOGGED_IN_KEY',    'MoSIH/`7[ha@-:o0jv@zA.A.2fT6>$jI/:w}OHrMAzJlbCLGXwq*SSrD+I50x0X7');
define('NONCE_KEY',        '9~[%.zq!x:~n` $#S |qTz939dRsZsXuV@ZQ3=p(e#k{%(#{# O%cOm8_{|P>]yL');
define('AUTH_SALT',        '{5y5akGd;ffPBwa0mhvLmfDR)h/0[lkFD>(gg>- eB.8,#iIHbNE]k[hCS&{8</e');
define('SECURE_AUTH_SALT', '4Z_niXVS,=R^mDbBsUVNXS`my-OR01Qv[;IEIb#bJ`TZoU:)T3IU@G8=ZNJne+H(');
define('LOGGED_IN_SALT',   'qUTUA?SoH_IIWZo:!f93ii>Q{gM_-tFQTAG!srro-,t/32?Dn^bW#DY*4)>E]H]P');
define('NONCE_SALT',       '( 12^I7<=Ycsja!)STxqFnb.JKYy6ndlntwahs3~M8:MtQ*YMLWzmoXySr%Bh6_5');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
