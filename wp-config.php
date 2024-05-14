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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
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
define( 'AUTH_KEY',         'wFeCL j.h.-*$eC%oK<gC,Kfk=jvB/f$3%FR<E33@E2`jW|4cU_c{o?I=3?:$1Z ' );
define( 'SECURE_AUTH_KEY',  '/c7g=z>cYJ9ef/J{JwEFOl)4|;Nu~IVji_![*k!xh<_yLZX95&lrb=nq][*>V%X|' );
define( 'LOGGED_IN_KEY',    'wIwRIvdt,v=9{)|cnFqjf=LQv4dq[jH7wtp<}df l~n+T:DVDaE|&qSH;rH{nB?(' );
define( 'NONCE_KEY',        'M66MzrSnlfY&q9s!x:N1/m<ZwR5C*= sY[J0+ENT$^c7<y+]E*6-{}`(:w?+Y~eg' );
define( 'AUTH_SALT',        '}>oI9^x_@M;`W+wo3U#.6aPB%r)gS:$zX(ZxIUw3;X@C5gwl~|7RkJlL7-7`DbpG' );
define( 'SECURE_AUTH_SALT', 'Egr@uGlh`4%=*X!!D+Nf&eIa{Cl^w&P3N|KxN)Fc+2Y@ JNg-;C-0.``9ksa1e+h' );
define( 'LOGGED_IN_SALT',   'D_w5Lz7B?w?&Ch@*K8V[D6U{e)HxaxWN`fPp%I`4d#9nC](ID$L.Bh^3u3wEZJ[*' );
define( 'NONCE_SALT',       'PXhw!to]#JSzax932d6*gT]Fq:6+S93_4M.%gK&d(.! w@yyON]{~fzo^YK0t6#`' );

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
