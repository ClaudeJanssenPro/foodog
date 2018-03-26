FF<?php
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
 * @link https://codex.wordpress.org/Editing_wp-config.phpF
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
define('AUTH_KEY',         'hjuQX4:}u(JQV_~Kxu.PLFQ/4cRZ]o:-9|pRqFB8`~kGYx/@dJ?cYix<n9^,z.1e');
define('SECURE_AUTH_KEY',  '/Eeo>~q>;`+3)0hF>5;Fi#wNYve-b( t)k=I1?A$T*K6:^@AKf2JL **e-5}u{NW');
define('LOGGED_IN_KEY',    'aJKp!M#z}v=3Tho(=Z9}.:Vi>#.Q_M?_SuSBVnh7+_0%Q/K2:]vs{Qwti/jyB;u!');
define('NONCE_KEY',        'f!Qagu`, WZ*vkkOnWmoL>8*]c|*F1P@J(Md5:pT/bSj5eLKsIYAfj-ReUU!tXN=');
define('AUTH_SALT',        'L)FWN%#.-2jLPX>F,mihY-QSBO)xD_6t%ilzMsyK6w1aANQEADcv?ar9%`}()V78');
define('SECURE_AUTH_SALT', 'jPW9n,i*k-;,8AsVhwrr}hzS^d~/F8UB0 aL8=e]3Lb`-34G-)3+(A$}viCtI_}E');
define('LOGGED_IN_SALT',   '!*U `G`3Ym=II[FHY^#o)T}o_mY#lcdE FlB//:})Z+XZu1kYmpq*KCqf#IT0E/s');
define('NONCE_SALT',       'p>kbAM%-oNX,_8|1kY]QNI3 <r3[|30By/nU<|:v*-|+v$(wn0*xLjpRt^2:,0sR');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_foodog';

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
define( 'WP_DEBUG_LOG', true );
//define( 'WP_DEBUG_DISPLAY', false );


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/* Upgrade*/
define('FS_METHOD', 'direct');	
