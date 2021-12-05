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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bdtr7' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '3}nk((M{l=oGnkRFmxLInYGfGaw(`jKY+hPv:Z4N*P -lACc{SuG-![Y`&/s2{Hj' );
define( 'SECURE_AUTH_KEY',  '0TF/k,3lwF)#ZM-{=uD!FX#fTVv_1VagX;ABLv!/0=iy3TAI]Z3>}Ro|14:C~ed]' );
define( 'LOGGED_IN_KEY',    'Usw]U.R@e.z#76f[zT1MO;G?$7Fce:6a1BoK`oqCz^!EH#%cCWQ(}U9n1W<#MdD{' );
define( 'NONCE_KEY',        'Qqdxl+3*yQ^Q6MX/s!Bd^LV,I2#b0Tr7t[Rdlg,3hWS5CHobr^d)-Fv)NOO,nlri' );
define( 'AUTH_SALT',        ' x[3nseZBPskl-0`}dMyVRC#J-fxd#(Yz#G/|WqbyABU:~YQ:m_7vh3gV2sj3Js9' );
define( 'SECURE_AUTH_SALT', '1(_kG4$J^)!:kpBqQuNL==`Q8BMyY?y_$>JW__j)YHNN+?BaF=]%]r!3b;,y(0Q$' );
define( 'LOGGED_IN_SALT',   'e[$QkIee&p{!`*t**pG+4* PIPREdO3+KFOp{rhm4H/VWq4*7BV3NkGBn5M.y}W%' );
define( 'NONCE_SALT',       'X7~:I[<S>A{uF~eBp_65(drWl9alg[cm>:p)iG,=xl%^N^%E:<d^P9~}3,Th/GGb' );

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
