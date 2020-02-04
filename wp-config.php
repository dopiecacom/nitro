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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', '30574766_nitro' );

/** MySQL database username */
define( 'DB_USER', '30574766_nitro' );

/** MySQL database password */
define( 'DB_PASSWORD', '123123abc' );

/** MySQL hostname */
define( 'DB_HOST', 'serwer1994051.home.pl' );

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
define( 'AUTH_KEY',         'f#vvF+KWHCQAkr9*Dj|1~@!ZU?y[,@N=L{w/[eTcoHbSZB|Dk>r|IMIx;as0O*w ' );
define( 'SECURE_AUTH_KEY',  '[:ABgDyW>//lxs[y&gxd&q.F6)+lq{.6OCA9Dd<t=piGTqa_=7i^vM!KH{x]!E`$' );
define( 'LOGGED_IN_KEY',    'QK@`A.%nR%UTfJ`:z$nxoK/mv>8[>O7h0/6k~?~nJ#Bn2gpV@.fuv^[z-4a0(5I/' );
define( 'NONCE_KEY',        ':E$x?z?COqh$L+F@dG=X#1MfzSDI@CcGquAp(@YtYogtNNIXBt3(YsO*EE^Yj+t,' );
define( 'AUTH_SALT',        'w,8NbuP]pO$^U/f2PUveh^<(f^Wm ^|5^8jT>t+I7:>C<KRlIH.7>PV}mc9?`9dw' );
define( 'SECURE_AUTH_SALT', 'c;c.YwoPJ&3kvTM`SXzf=ugSp&*$4aT046&n_2`pTKWoG|2b,9S2h42_|iI3>bgr' );
define( 'LOGGED_IN_SALT',   ';dy3lm^xx3rRb^?ON>c9/^9OTwzi/OGb %0 G|)#o4`1-3| #k7KAKEunpZY7!j_' );
define( 'NONCE_SALT',       'I+3enP|^]O=f!2BJXMe(Tgl0SYRVLR(8^,ZNab2POxBb/#lWSD~Q+NIS}d#xgtsR' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
