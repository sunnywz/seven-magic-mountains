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
define('DB_NAME', 'db198155_7mm');

/** MySQL database username */
define('DB_USER', 'db198155');

/** MySQL database password */
define('DB_PASSWORD', 'Bra1ntrust!');

/** MySQL hostname */
define('DB_HOST', $_ENV['DATABASE_SERVER'] );

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'e1.$jl~xf,w${2?%IIq(w(h-7R/Gx3=Ap5*s0-5vO-aZlI?bT}6B,QpBu#orGFka');
define('SECURE_AUTH_KEY',  'xc%o!0u0nOuUa7yQeM+N6GmzjAMH}Au&lkN}j7i?!,xMx}g97v3-+W/!xNtlq:<&');
define('LOGGED_IN_KEY',    ';A(A.; h=>ZeXN^[60y|G-&JA}X|5yk=.hH+G2lK_iUs*|M.o{K:[=}]%E/fr-PZ');
define('NONCE_KEY',        '65r+/1}3}]>QnuXS_<4+|:Gx)}.Ty-$nihWsq[3KMItQtbazX3e97Pku-u3Qoa?L');
define('AUTH_SALT',        'B_z76]^a:X[^!g>C/Ec2/^$,9:tO;50| #O AKFedeZ)>$#G@W( `PZc,hmv~Hjp');
define('SECURE_AUTH_SALT', 'RjQK{iC3*;Pd^)3d-N==As+cRXy)I]4x`?HW_G]TQVR(/$gc;zsdZnVc4bD<gP38');
define('LOGGED_IN_SALT',   'LjKwV&pK<+vzr^-z[w80$ ~,{^r|q!Ija!Yr%.tigQDnK_H<0+qZ~3T+fm d;OjH');
define('NONCE_SALT',       'oSXU7Qw9ZE}+p-?pTuA}0?i^7W^D&bA){=DlBS~`(|tr9I+}-(jxaaGYuw~?a*.o');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mm_';

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
