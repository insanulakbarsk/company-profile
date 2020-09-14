<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'company_profile' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'XMl=A2y_/C1IN(_w^apUR6xo8 53&641Kl, 7y4Gr[s{q0^sf//;E9S hSaaOC#w' );
define( 'SECURE_AUTH_KEY',  'i c{H{9T=t!UCE8!Gcwed^.#.^BC=1cXWJ=va#1,{L@z[7LbWqh/MmZ0s:BQ<xBE' );
define( 'LOGGED_IN_KEY',    'VBm>S2_13%6:YWrY;nS>_dAkz;pZcLZdA-}h4H[QOG*)Fr$_^c1.K1cM>W(hrd.U' );
define( 'NONCE_KEY',        'K@UHL35;@^JYr]$AvT9_N?V&w&q2iAXWq=b@G`kK)]10^O,{fpQd>1qi!x=zF|Zo' );
define( 'AUTH_SALT',        ',Lsdj)Lj$:R}VobBB]jD?Q%OD36Wdo1;TC`J#4,;,d.MvTHx?+Al6wAa,]2{,sRu' );
define( 'SECURE_AUTH_SALT', '>MA@^i`HC!YXhZ7eR#@*Y7t9W<q?4sz| 7rr,9G%yPz3`4GmvJ/9{94E_Sj&$jaR' );
define( 'LOGGED_IN_SALT',   'Nr5_x?gss~K@wK0`kr8h?2N2s|^Q}s:Lo| :JN`L__%Dd[Y_nSz9qj[8SzPVI(|6' );
define( 'NONCE_SALT',       ']O_,#LuDo,DOP}rNY(pG:reW2ORU?Vckzt~(}3AVH:FUsp`Y6$E,=wHt,k!k%olG' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
