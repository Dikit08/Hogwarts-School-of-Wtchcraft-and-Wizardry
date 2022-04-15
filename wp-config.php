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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'Xf!Wva*ji{d/v|L@M]/fwpaYSkkleo>56N8KY3o^&b{}DbJ ~UuSqiK +4Cn1A7z' );
define( 'SECURE_AUTH_KEY',  '7 9Dd4%_SCE58W6#Hk@:P/B$]LlaSdq_b)Lw/#1(wF$+OB;gx_KP.f}c>Gkp1ad/' );
define( 'LOGGED_IN_KEY',    '//F-y)yPVIDUg*bs@?:,!W{>UlB!ghb8X8VP4Pgy%F1sg0aQ&6VZl3G3H$[wiD#}' );
define( 'NONCE_KEY',        'aN{{(H>nnWX-:|Qm7 J.[ho~Ds[3SdM]n!K[;Loc&e^5ytD$R{0i/HaH%qU/f*$3' );
define( 'AUTH_SALT',        '}Q$Dq)=Ym{}vtt`9pvY#j,`d^)8wx:a(6<nsG<4Kw6kleE^]*6Fy!<!7f- <sP_=' );
define( 'SECURE_AUTH_SALT', '!{^on4{R!5|H:ev<DYUJI~<,B4#t3XGyhWfAx$A7$2?xAvMGJ&l?6I>^w)K^&(P[' );
define( 'LOGGED_IN_SALT',   'x5CR=YN,?5aAq;kZ<ijEHYY2`mc?{|4$?Py(Q^_VXilli|*zBE+XNN/AiZ+bq4|k' );
define( 'NONCE_SALT',       'ZX_5c umTBsxtCbcZroN#j4l<u]!X*Km}C/4Qj:IKhn;[4[_$Hpu!rVOF>ouS}p/' );

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
