<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '.cT#Vthr|VTg?g5EkV`@.5}pTO;s`otEA4]vXf.C;1^9ID:0=LW=i*W^j0/HzU_7' );
define( 'SECURE_AUTH_KEY',  '<zYJTOP!X4{hZH^r7_kssV74i3`~ R9RMtk@JQ_P0OB<@A=N*_~WC{=b#:xGLDr{' );
define( 'LOGGED_IN_KEY',    '&NdX-EAMt1R{.*L;FNBBeaO!Uf~t8Uw2&dS.-;L$+1kQ1coebAbZ:<Pv]-XD0L+k' );
define( 'NONCE_KEY',        'fmak*Yu~kkIvzXTL5o^4Lm)>&`^B|(]A/%Sgr5WEf/?)mMko_tpD ?]Sg+=VzL$U' );
define( 'AUTH_SALT',        'jKiALDnTj7I)zXCaj*,U.v}/I-A8YP8WcVZQR)DkGp-tXdn*;M,*)Q=P+qxFEitz' );
define( 'SECURE_AUTH_SALT', 'g$i%-5|sNO.&.`A>[aJv2g{uaq^sio{`BA|KAEb~<-d6cP$/Gu!f)30%yO]w%<.O' );
define( 'LOGGED_IN_SALT',   'm`zbrlTEaq,^t{sSya4DoZ27G/..PD/[</D8nCY=$}c`4?pS#c+p^%zI6dHljE7X' );
define( 'NONCE_SALT',       'yP>>+#]E>fWxG9 kg~dQF#U6U}TF7.__YfL3&9t8kPjLX;0/[<07U/#Rc]2NPi`V' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
