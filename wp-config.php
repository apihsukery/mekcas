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
define('DB_NAME', 'mekcas');

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
define('AUTH_KEY',         '9YNL5vAP7j9UZ(*2-[l?cRNSz!r9KVaq>4#p{O>O=&p_`%Ljcnu]UjoT_yg<j)v6');
define('SECURE_AUTH_KEY',  'x(ox5PMZb;L!SPa,7*Qh$A]Nlwq6~;KEs@:6a`8V;Ft8h%H078Kn:vU4v4?1K)RF');
define('LOGGED_IN_KEY',    '_CZ!U5kaa; O0cD7LUFhC`RJ|P[^VkYiAR0#iFg)l^9E/IlIwpK~W2+KFI4#@fU@');
define('NONCE_KEY',        'vsCtkdS8FH:9sTA`}+LfEx<,>^UM84?|KP77HCXRbsW<([^k/spH.Cl5h{sDk:45');
define('AUTH_SALT',        'GmdTI16qJmg[5.~O4RB(Q]V#+$iHn:KDF17)(3pUjcPW]EE)2k~nTyG3G}oT5:rr');
define('SECURE_AUTH_SALT', '8kk+?|$}D|?!4l?&dGfd>io;$1H[jTNx~Ef)=q_AAbq7{yogQ>qtO*feHPval?B6');
define('LOGGED_IN_SALT',   '7^vSi-cRp/9R ~Mk-3QKDY0 _ >N?WA1/pLKHkljyC:}&P2:Jq.(6m3 {%sxkHjB');
define('NONCE_SALT',       '6AOo35>h&V0DS=1a1BR_7<c:=<Aoy{-7GN*B4]-@?kaK$5VGEQRex5%46`B]Zpp<');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';
$_GET['classic-editor'] = true;

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
