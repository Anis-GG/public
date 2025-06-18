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
define( 'AUTH_KEY',          '|7aQ8z)=GYu.=hXkTjlW#z1]@E)P0-Ls{:N!1>@9CHa1xR^L!uDQ_gZ8;,4zHtyj' );
define( 'SECURE_AUTH_KEY',   'CWndb5?Gy *(qGKjm/&9l L!q #d8!@!rSJew^+(mJf(a{N-E9yj}^ Hq,(?-W7z' );
define( 'LOGGED_IN_KEY',     'gn!UKhB5w,92 3W$v2~>9#>O`;CBR&VJFbc,0RI#ykBeRXme/X&lqdm~,uK OAZ[' );
define( 'NONCE_KEY',         '4u.=U@-~-G$~ie5xMhvr.]PdJ9ZE[26q@d,D]{).:S6H~z5S@PrGCBa$&3UixaNI' );
define( 'AUTH_SALT',         'IZj@[qV*uJJ|i{k4&]P/krK>OLfOD~!U8_g,XG~kfX@tV`WcU]7/vuN*dp,a:e(;' );
define( 'SECURE_AUTH_SALT',  '$@-aGc.oyp4CLX+?o(2*i!W`W8ga|DSC$VX*=Rgh0^CTg@;nZ^?:hLIJtwmAeO&1' );
define( 'LOGGED_IN_SALT',    '5Or6kj0-mQ*u>E955=!k4c#+gKQko~3Vg7A)NYrr[:~P^hi(|JmSDLI5r UbUn29' );
define( 'NONCE_SALT',        'rLLOY@eNe0;3B#uqg+vo8=W%|rx+td: ,R$)sNv#qO.XKf`1zkb7y$_ifAmSLwV0' );
define( 'WP_CACHE_KEY_SALT', '%3I[_Tu38PI,L}|3W$Q-#R@(l^-f:o+3TjHxa@a#8RyoIlz/0&>@1[ TUqd<nl3I' );


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
