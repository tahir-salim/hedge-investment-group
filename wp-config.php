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
define( 'DB_NAME', 'hedge-investment-group' );

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
define( 'AUTH_KEY',         '2qa.<9-I)#de(C:e*Dcxl6@Q/T1#M4e2g4}A] DY;Qlur04~wXK)@I_7I,}Q>;oH' );
define( 'SECURE_AUTH_KEY',  'M3wZm4-G_VqIje+=sZJ5L7XlTAoqi:mOK:omr]zt$+-n#l}k$>mvNZh 4j|OD&Qg' );
define( 'LOGGED_IN_KEY',    'm5!8Y2 Xt.MI2JG$=.#oHK[.v2#7Ude.Dyjuze-`[m98usMk#)qYp_E_(56;NX3z' );
define( 'NONCE_KEY',        'BK0,NX!*G4Vnbri*;cL@Rph0oR3-0@k10zxg[&E3$6lW:%IdWD-AG_^s[:Un@aau' );
define( 'AUTH_SALT',        ')Vy#}xbb>gmd1_XJi0K{XA)V&-;U0V;f>XrPY8b/^&sXJIob tzyeiI95L=,fcVX' );
define( 'SECURE_AUTH_SALT', 'Z/qW7jv0:TWdLXQX}81;,8-l}^(E(jp_nUNJz1ZRe^csML5z^zEO]z)g>^p?km0+' );
define( 'LOGGED_IN_SALT',   'c@SR?kb.F6--6`bwnfJ|$r.6?gxDh:LT=|t@LP0GL^vT!%_-[)cu.B61G3,67aDd' );
define( 'NONCE_SALT',       '.s2z.I@i7xz_o=h.$H&(/.&jg1qlK-+u0Fd]RRPc3sO>B{v#<(CAt&)ZJVhzJ6H1' );

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
