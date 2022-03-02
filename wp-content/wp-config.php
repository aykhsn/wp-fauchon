<?php
/** 
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information by
 * visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'sddb0040034405');

/** MySQL database username */
define('DB_USER', 'sd_dba_NDYzNjQ5');

/** MySQL database password */
define('DB_PASSWORD', 'Kl$WlL1p');

/** MySQL hostname */
define('DB_HOST', 'sddb0040034405.cgidb');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'i/6Ka f&*e(5peEd[Djy+G)db~uOB9b0@MD^>cw`!^s%F9>Tu,gt{`P^IlR,#j04');
define('SECURE_AUTH_KEY', 'o~jjw7]anl0-x5u92_PQ<W~MAD`9-0bAR7y7c^S<wp*xoIVaqdVGgk!TLrJ^K[O^');
define('LOGGED_IN_KEY', 'z XTf_R5|b,@rjl9+C0Zkm!:dJ5.wg,a>Y3q=mNrs_/Kti,AQ&#PT:g48Bl k6Q|');
define('NONCE_KEY', 'J8={Ix-l:;qD){J%oDM6q{pPCl_G?1H,(x)3iQJ6Vs.@#)D;>uUyR?2%5;=X[[Gq');
define('AUTH_SALT', ':aK6sU?]7_snaYD=x*r./RK]3na,sD_}GnL=ZtIUwGu 1kvG FQ BAC*xP5M.m*A');
define('SECURE_AUTH_SALT', '#_rk--]?k0NH/-C7i[6c-ol7T|!0`z^|sFmk9|-@x>R|/a;[u!6(7H_uG_-NU4;x');
define('LOGGED_IN_SALT', '08[21KpU.H$sQz#ZP=03S+<AA4Yp@I;[:9e|*sw<i)dyCgdF,u8x%v-b}8}@u2Yf');
define('NONCE_SALT', 'dPLv}!DwUuv xDKy[t~TDuHdzr>F!Cp/x`9]$441{}tYPgiZp]1pMTB]Bii/T8Kf');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
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

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
