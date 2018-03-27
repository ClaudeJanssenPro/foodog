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
define('DB_NAME', 'claude');

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
define('AUTH_KEY',         '9)m#rU@c!rfMT9A#}kXiBoj#WhJ(OPQ[!qV/eBVz>Q>~NXN,eMs|cI%}dt+?)mBV');
define('SECURE_AUTH_KEY',  '[a,G}=bC!+aZURh&#[%Au5t,%_*}z1[ dhGWGeru|WW^q`(&3X>9^n?` y~6P:SD');
define('LOGGED_IN_KEY',    'G!fy f8_.~,qre.ZL>nRI2R^Kz,K1wx8@$)~ZWLlVj.9jU%;7ZxJ##bRoT48 l7@');
define('NONCE_KEY',        'm?R[n.tNAy%/(+n%4/jsGeog*Y(&GhiP]YmuJ2tI9g&1+$lfj:w~jSj;.;ZCQuvT');
define('AUTH_SALT',        'bY,M$2^w|tDh?r:oz4P.3{(+q(v8&$*~>B jHNb*w&-eS]W2|A )ga<z3T$_7;(a');
define('SECURE_AUTH_SALT', '|=5wGdo.)g %{ziYNuuJg[M}Rw23u><Qe9m~TL+7OnbBI1O{?k1ZAW>,bUo]I_qx');
define('LOGGED_IN_SALT',   'x`=bpDNAJd@<.nW>93Y5HhMFl(LL<BDrj><)8FaCmbN{$FPo3~fgcfjl+BVHb~[8');
define('NONCE_SALT',       '%!1XP4-9[E++vXNhZc)*n`clVlg_,p6$nB36L}@I^|Lo*:blZ!6q7/D}jL8.L>vh');

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
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
/** Plugins **/
define('FS_METHOD', 'direct');
