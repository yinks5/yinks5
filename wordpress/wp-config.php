<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         'DC+<yL*:HYxdd}gbMsdE=Q:R5CJxv. ,H$FE>/1L0hiE(~pQm@6i.i0xk%w #%XD' );
define( 'SECURE_AUTH_KEY',  '1o-EXhGF*/J/ov&Y*#LgIbc76@%}PFXfE|fFF#x5wgUnO~_*71$!$X^Fet<QMng}' );
define( 'LOGGED_IN_KEY',    'j*5S(C^g]a9H{M(}/0N1shB__{5kX&f{rhR;o)gi<;[Bs9<gca[a[Masb,eXJs5G' );
define( 'NONCE_KEY',        'eHP-:VTKxR(cO!sS^CFSwE!7jB],o6,!H0hOK`s6kSNPXhF{ala9$*jaV,~j7hkx' );
define( 'AUTH_SALT',        'rDDSa5t2bl1-cKq*.W(&0g&+k[k~P7!xD=I.bA](~HYz> x|f*Y+Y[a9~r[K[#L(' );
define( 'SECURE_AUTH_SALT', '`56L@NH.kxo{iF|zp9Ry`>lnE^mcPvUM$}vDRof46lD9A3T;o+m?x3g=;u}oUyQ.' );
define( 'LOGGED_IN_SALT',   'ya)=2M_JE*}KfTxM/Fc`}?ll)Esa6FWWg1d8.1>.qC];)K@jZ[Tg[RNTWJ!=#]t9' );
define( 'NONCE_SALT',       'Wrjl[4mo~z`6L8q.XN*m4daslFf7-}@%[%9V-+SdO/#9_I]4Fpfk0e=VQn+{rrH$' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
