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
define( 'DB_NAME', 'wordpress_db' );

/** Database username */
define( 'DB_USER', 'wordpressuser' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         'LpLv6]]C(7=$~X[qdTje`mbBGOoB(?rZ(v<KeiwP3%_q%xV3_gbI_@gmY-1<,@AU' );
define( 'SECURE_AUTH_KEY',  '`2^-Ar#0*T &p/=|NLx`7-%uRzUZ/S>u(m#!CI;Yd6<yRhU?)DX+eq_8&C1#=~o~' );
define( 'LOGGED_IN_KEY',    'Q<QSDArK(qO)H3:Oi|}d^,+G/A)_xf`ESK>5hP>y!@sp:l`j]$zQnI81Ej4>Qm]z' );
define( 'NONCE_KEY',        'Sw*4_=Nbku+O,c{%Ql^Eap?a%FezwD-j>EdyYokkY>AMwZW/YMl@[#(qQz^O5z;}' );
define( 'AUTH_SALT',        '_tyq`LAGPK`5qrWFQb*_-]UAt?nkiQE=nI]%tjg_d6hLiborwin}/,e*eJ`F%?=b' );
define( 'SECURE_AUTH_SALT', '~*)AC#p{l[B8co=8+!QwgF)[ j)Falii>5O&GBqp+~;>NNz3Fo koFJymRaC9Qm.' );
define( 'LOGGED_IN_SALT',   'Zw/8Y2d=4??<W6* *)g?OZrT8cZUl%ibVuV2i*|d%O9el0H!A(h:+T2po*mf~&yw' );
define( 'NONCE_SALT',       '.M+/wZnf:tT/rXEe4&7KEMKO#@og6vVzrCH:u(O(of$6_Q,&tA?T.`jMGK!YRKCF' );

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
