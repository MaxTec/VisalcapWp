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

define( 'WP_HOME', 'http://localhost/visalcap' );
define( 'WP_SITEURL', 'http://localhost/visalcap' );
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'visalcap_wp771');

/** MySQL database username */
define('DB_USER', 'visalcap_wp771');

/** MySQL database password */
define('DB_PASSWORD', '0FJ-!pS935');

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
define('AUTH_KEY',         'P9<Fj~ZuE8:V0o|iopNtG*_Z$Ul8iB5W7hU(fOg+x9)sq4Vx4U|yZd;v7Xim=*zV');
define('SECURE_AUTH_KEY',  '#WH.Qi#Rp.%=Nx2*,~sjR Zn)B?W]-u>fQYA|!n#!-7T)r0^EkWB%r.oE+0hLv+=');
define('LOGGED_IN_KEY',    'MY_-|}B@N=iKnCUUW(3zxx)+aJd>K3o{&uU|P^?ZKC#:U|6ZR_M%3#l|+]Z@Z:[o');
define('NONCE_KEY',        '%!yfQLZH|01Sf*e@Tc)tdgBVi_4b!LPUq+`<OncZ@7eRS`T{mIzzpWt9Oa4|mtSv');
define('AUTH_SALT',        'x_fn4DGp+,VpsPxFf=R/R^t}MXGSK94z5eH;{^+T9DcMA:|umK1$+TBN-&u{Kllw');
define('SECURE_AUTH_SALT', '}L*UK<Q749c!g{uVc<xf0ea@K*x,^RmxA_/EM*<[JvHqe;l!h50M/TxPswcjWDy|');
define('LOGGED_IN_SALT',   'wXHtFixnJ.D(G-I,#&-R/D`u=vGYI8?0|A~)C VbOUq/9%dxK6g-JA#8_}KC0_.Q');
define('NONCE_SALT',       '3+J-BOWnm77{O!BO1K7/P(WSuIkw,E?Ah84//cj(1PT.z0I+;]8V4Mt}1zCMald,');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wppe_';

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

