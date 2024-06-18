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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'myportfolio' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'dexqW*sP' );

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
define( 'AUTH_KEY',         'r(f%Pue(Fp+[Nm,i_}+2FA+6Qc-(hJZrl d:9rF!w=.[utko-,w?Ci@2}&}7o3lo' );
define( 'SECURE_AUTH_KEY',  'dqL)s_3>33X#H<1AK$jQ!Z7{^&eRGVxiUKkio9ZK[$FRhEzX6F`.Bv@4RONy@cv^' );
define( 'LOGGED_IN_KEY',    'gzs(~61nJdKXrjVyssXqO$9@d(7:yfRZ`Im;KYGERytwHYE#yfbmMvN=,rD|4xRb' );
define( 'NONCE_KEY',        '~oWb/jbu2!<&a!Aq[YD5%egP>>x$&?FB#G}B9mCha`g_nhx7[1Y4_JDZpd7b5hM*' );
define( 'AUTH_SALT',        'G,-XfP}OS]yHWkM1niJNt7{svwf}u5zR_Y4SglzPr#*t(24g;lcthenVoOhkE80[' );
define( 'SECURE_AUTH_SALT', '@ia*a$A>bUB`T_|U)d!SjSNS[WU&NZs3PsB@F/9h?K[6O=*_0!l3v|3{F)EC>R_P' );
define( 'LOGGED_IN_SALT',   '<W~4{ilx=>3DHVJ[.w7}ubKwO9Y.qbBT-LWk1y.kKmD6psh/F@hcxcKWtK] *Uth' );
define( 'NONCE_SALT',       'a)r8T5WfIg5srrc2;WT8;81<&Dbg(HmBh>0Ra<Zi%F%9Z^{~]]F|5Eo_1c!+aFJ3' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
