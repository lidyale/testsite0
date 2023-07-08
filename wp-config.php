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
define( 'DB_NAME', 'testsite0' );

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
define( 'AUTH_KEY',         'p^F]r}pt<a/bZPkMG7O4`T4ydKO<9BfMU*|&[NBU{Fk>aK9xmr~Y(B,.|i,iuX/,' );
define( 'SECURE_AUTH_KEY',  '[5FNm<.(6]$,#H@hmZc-QxRz:^7gbJ/j^}XpeV/9WdWS( L@{+;X]/QR2bA`CbTR' );
define( 'LOGGED_IN_KEY',    'kQs-&YQfrBV{N07=Y8+TJ(RvP|,J`uxO<B@V:Q2_?/d`x?ThbKPy3l(W=H>VjG%(' );
define( 'NONCE_KEY',        '5d32rb`1zkZ9!}tq.tXPgVpYD1wiZ:bf1r3,^C%SA5=zke@PB-6ij(93lOLilt02' );
define( 'AUTH_SALT',        '#T_hmX $tqF+2 Z+FNkhjB9tyt7C`t)3ZWxNj{&?EX<r#*t0sIN]lFf6;7^aM@uK' );
define( 'SECURE_AUTH_SALT', 'mOj;r0r.A7z?9HP.07p0To!d:1O{2?XqJ5F]}qfZ;-WdV|l3LQbt~a_(Zq%Z?oj1' );
define( 'LOGGED_IN_SALT',   'qLAs28<J#)sNWrxs/boky8tK#G?GLM4&g`T)^1)f|0X)6{*%RFUixa#6xyxW_OJ{' );
define( 'NONCE_SALT',       'U.2QJvZDM9.n`foK1eXLxr pESm:V,^k(*u0hSe8:vdL/G)_QB<9-X!o4vSF<2eI' );

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
