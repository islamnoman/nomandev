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
define( 'DB_NAME', 'nomandev_db' );

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
define( 'AUTH_KEY',         'eY*{9dq/PQsWaQ1Vi9CSlC{.#;/jO149o6mn,s15li4m`e(: &Iw%dHk/4:7`o7P' );
define( 'SECURE_AUTH_KEY',  'L$m%B;Q25OI%DN:<4+#mGu4G;EZzip*Q:}>v7ZO/~@ISf.1r Z0Yy6MlRao86~fv' );
define( 'LOGGED_IN_KEY',    '[Cpc]7UN1):m3d7+!wUDxyCb`d .lPZm#ILW|.CtL$aq-&VH<gCwJ,Th,Qatk%a=' );
define( 'NONCE_KEY',        '&:o^ylvc>k!{5>m?s^./Me?; (xza~lmyMX~u:HYV2{-h08$T_;f.Sh$Hf3z3>A!' );
define( 'AUTH_SALT',        'G1jo([7e[VpIHk,wUlgYoj##Mqtn5fHRi3_eS3>u1O+hLps~5j^ND5_B%!b8!Cho' );
define( 'SECURE_AUTH_SALT', 'M`<$`]VLC[]X<lyhaSM>%i1VFwsoNp.!*~hy9hK!A8:|l?`YVb|U`8o8Hb@7#9d;' );
define( 'LOGGED_IN_SALT',   'EL<N9SnT~;~+i,DK+J9[@cq14,.5M$Q<gB?wyv~IVcXI@eNa@!&Fztdi#KGjgV= ' );
define( 'NONCE_SALT',       '4g4>IB}91x_v[^3Fl4O>{w2%6h^G:j`k[x jN2}Kbb&vJA<g!no#r51#w0h$gO^N' );

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
// require_once ABSPATH . 'vendor/autoload.php';
require_once ABSPATH . 'wp-settings.php';
