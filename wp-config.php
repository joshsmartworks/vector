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
define('DB_NAME', 'vector_111');

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
define('AUTH_KEY',         '>7G(OtUX sj62QO|/M(#| VltCM!Cmcd_c5&k/L},MMk-j7:!AP2,G*dM!2U+(Cv');
define('SECURE_AUTH_KEY',  '|g H]StF5>O$51&O6k773nCUL>WzDd8Q{L2PMHB[I8C%b%Dcz_jGUWcCsm[uCJ;1');
define('LOGGED_IN_KEY',    '&462%M#+~YP8hPi.;Y))iM==xFm%W0g EMgX;=*|SlxW?w2a}E6RII{cb8[z)jCF');
define('NONCE_KEY',        'vs-y67_8A#se:EQ-o52Qyf`_RSzap]S:#SEq0uXx)ehuc(jV/6 81n`kPCQWP#|?');
define('AUTH_SALT',        'H,f}7Jp#D>XF[!w~89QZHh>M{g<2L__);P|Wmy9E(DZ[pn:UFIRY6|?ocqv~I}g-');
define('SECURE_AUTH_SALT', '.9my$M[R<30qn::+5gHudsdwQZOOnp$$,mJl@bA~%rT,fAH1.^]yNid-NyRpi 1Z');
define('LOGGED_IN_SALT',   '`XX1O)jz;LfiaIolU[T2&OTrO?l@Li ;]Yw6gM>,=!(1LWUMyer#61;*EN8Hgkws');
define('NONCE_SALT',       'kA[U Rtd(`@LqI6Ub&+|<`B)yzyEm)I)V$x{UY-G /q36]Tm@K3s(Q{{l[38CFn:');

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
