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
define( 'DB_NAME', 'sendigitourDB' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Fooly@1251' );

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
define( 'AUTH_KEY',         'C@$tyc,M#MyRjy?ILNdah7=[GW?s|r,yO~(O6<sC$b8+:xY]z^4C~J%weVz<z(/l' );
define( 'SECURE_AUTH_KEY',  'sck4u<lX1YiFfcFH]E>o@vsu|Al(vs]~pxp9J@=WQO3<$ CmUl/:c2g:4Q8veKl8' );
define( 'LOGGED_IN_KEY',    'gNK;q&lcoFu*OD[O^]nVq.~fkhb?:4{e{WQ#tqI*1W+}Ga_, ^S]xwu0cBsZiI`G' );
define( 'NONCE_KEY',        'n[qNFG3|esnXW;.#^MTRK8BDk$Bbm^5U<LE&V]gWwzv86]C+LEMHqQ,VSx{o9?]L' );
define( 'AUTH_SALT',        'hbvUM3I`5y1jOz.|b)n% r gl1s.u2T,CY.2QO|r$[mB_6fKpU}Yb;3zc5jtBu`5' );
define( 'SECURE_AUTH_SALT', 'drX6_^iE9Mc<4n<`wM?%w#hNbnRFZ<%xR7+o^xIQSzgkM:)hz$qt&?G]pQ>p[GPC' );
define( 'LOGGED_IN_SALT',   ':5{+xiob[e!^E;J/rqXY[e=wpWxdWt;>&7{$J7*#.L1Z7q$X!evCmK`Z2rOR/ErZ' );
define( 'NONCE_SALT',       'wn!c%lMXAIVL-776?|}wBQH){RZAy=/BWpn%Z#s4kK+OF!12s$)t[Z9G?J{Bd9Jn' );

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
