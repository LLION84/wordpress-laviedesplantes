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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'BZ=SS{1|0e94u+_g?~kYvNB^YB$}%[1Bi=~M$?#gzJ4}x.on!58i0dS^?_&z2p0h' );
define( 'SECURE_AUTH_KEY',   'd{1L6I}T&~ /o}XZY.si2s2D{|<vsw$^49U#7v;iU9)J<-2A/!jSqUo=Klzb<jf>' );
define( 'LOGGED_IN_KEY',     '8o&!9l&,N2jF{#S%krWs(itN5q~Ued$]_#{p!:;;CcP.X-Z9W !jkhQOay;#biBR' );
define( 'NONCE_KEY',         'd3KH6Gv#xDK==y,3IhPh6`DtM,D1VPh|kWNRMH@QQUwY|%|7WM$$6GEGAg:Ht`w@' );
define( 'AUTH_SALT',         ':&&r8f1Wf?VhX?xb8:7S_v45sd>/<GXQM#jTupH#kvB:s~XEV*>LDqcE+g>mK:i5' );
define( 'SECURE_AUTH_SALT',  'lf>VE|{!T-;3 ?qC8D +073TYHcz)!+9:Ag~hM.}4/z/&xC!t}?LKl/`IP9Z3{@2' );
define( 'LOGGED_IN_SALT',    'D7Ds~snayA=N4j8D)E|Cpccg42(J_yui$_/#`Ki]+w/Ky7]o!4g.,pPT~ j ,-;0' );
define( 'NONCE_SALT',        'N-Gz.=O:C-]W5*==tct)ewi3Q@NfW3 b$CoZW;7w^JGpxQoXqz_`;6~xGwdA:h*-' );
define( 'WP_CACHE_KEY_SALT', 'n$9DjO.ndEgN^u4R+z$2`iq%$dTg9k+iISUEcV#0N<.Nf(|<`{J6e%vOJ8trZ|}3' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
