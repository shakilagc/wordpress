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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '0e3STcU8pF8@,j6^%M#Y<UMp,hSRRX) jz%Kl ]gb*DPJI<d~gJfa?di`R3[- e`');
define('SECURE_AUTH_KEY',  '{#??<ULU!KxKfU7:.>(oP~USW(Jm74)RN&[igyFGx9LM1(&tT7@$ g#XgG;(e8.[');
define('LOGGED_IN_KEY',    'nD4g<Im8) )&{(&9gc`pWmiQXn1ZGO+L0oe7<D`/VKMy4,D`V5t3%yW=24$ucBU&');
define('NONCE_KEY',        ' u</,)Y;%nvT-au$L(-d }T1/@=E7h}=gY;+N)*mHKNd)Dailyn.fT{+5wy @!0.');
define('AUTH_SALT',        '#ll16H.H=zyV5^V3|J*L)d^M=Qw4f{:Jtq7LJ}jp|b?p@[4W>h*gJ0S$({D|j1j$');
define('SECURE_AUTH_SALT', ']L5If!~?50.R=2Kt7eri:kBWm;LBOqJ^`UvWmzL$RMJ@W<%>(,8P,Z*L4Uf,jI~Z');
define('LOGGED_IN_SALT',   'ulz.*mM0rgp=^&nC]4+& RS#m .<1FBMB:8[J[j/khFRoUA_ OVjZO5,dR~@oEeP');
define('NONCE_SALT',       'O2$b+AvACd:M2xQRI%EI40K-t(I:e)ljvX/H6f(gnxe^&+S45hYSS&z=sl75SqBm');

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
