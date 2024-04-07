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
define( 'AUTH_KEY',          '!E8hw_M#?V0PPOlTh$hcBy`W{_:rc:D8Y4THrCYh)X{4%p*Z$sXyn$$QX>d`:`^=' );
define( 'SECURE_AUTH_KEY',   'ihgn(shk64[sDkV+2fS!Y.`$2q3m>+HEmz(&[&$k3|HZV/[D%%2&N=5mo52T0WGZ' );
define( 'LOGGED_IN_KEY',     'x]nn&A:TK>[k 6rT@PRR5J*~iy:2j~^ug3{!HDHa-M6 fFLscK8BVH&Cl=RTgC-6' );
define( 'NONCE_KEY',         ',Hmavt`HB_r@DUVB$^piTi5IF^5?+!S4&kcwF.UJ(f]Bd_W+n|WcUfx8*jVB_`.@' );
define( 'AUTH_SALT',         'v:g!UBx%hnLx+V8RyT=Qlxu$E-~H_@sG`v@.#S!2A571)w%KC11d&p&jusU6:8CF' );
define( 'SECURE_AUTH_SALT',  '}.7i<({Myo`5L[p -tK=x)e5qX8>|y(]V~TZTh!cA B(,$W$z,: xsZaL3VMh2hj' );
define( 'LOGGED_IN_SALT',    ';HH`t9v77RXGY7+ZB|6dzaM2u_)m+IVecT69JG||0L&wpKP<i{5$_a;1HfCBNS?D' );
define( 'NONCE_SALT',        '^8OwryHaZd;5w&8E5}}ngjTE:(.o<pyE3sAV?FlmH<T|IH}Phs~$S5!p:zGQJ&o*' );
define( 'WP_CACHE_KEY_SALT', 'm;{#UqJcqdor_{iZR{,2AV*NzR6N{^&KqH{u]&qJ*Q%=MJ>-]#eA#x+D~fo}:N)H' );


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
