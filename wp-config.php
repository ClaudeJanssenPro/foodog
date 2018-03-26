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
define('AUTH_KEY',         'i[FDcDo6#E S*JRBpt<W<y2k@8a9,m_a5c-odm8I>tmpP~%%d HkOT=m{2{^)oKG');
define('SECURE_AUTH_KEY',  '0)f>(E(R(7U1K}~mlEhQo{# @[i(Ugem#u|V9#/f:8Y#q32<N5Ick4R~S6#e*ti%');
define('LOGGED_IN_KEY',    '$wE&(m?v|q94dX/3f34?A+/gbOt%eyfp/[ZJd9UJCq/6]|O;Q[7,p<`yg4!r]X9<');
define('NONCE_KEY',        ' tN[M)@SB;c>L.(gz78j=,0q GPfy@4` hE(dyDY:dok<2be&Q3@x/7,H%O$Ow+,');
define('AUTH_SALT',        'i<L9`ca> ,5.Q+txp[y:[dIc@T,o:_#y t)Lyf[:Xtp=V9(I_0!NHmkG=|~_k~rw');
define('SECURE_AUTH_SALT', '3;rLk?+G!8}q-C=$hQSKOk#TRbH`3mu*[si=[@KR.r}hD(UeyTk5.Zf-7cV3uR5r');
define('LOGGED_IN_SALT',   '82v<A`DohDP{Gv_o7gVREE+2=b2y1,U?,,Ua+;1zbW8{daA<Qv7Uo7HCIfo+mDe|');
define('NONCE_SALT',       'rh1m0h}-(U=VPUZ<WMl<#wAh4suYp%k[vetM;cMS9iMcRL#g@;/.1-P|AKNRrmb<');

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
