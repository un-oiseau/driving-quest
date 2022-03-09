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
define( 'DB_NAME', 'driving_quest' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         '899k(E.F+qg[Sx+e7Q245)t@/p?^-+Op<lamn>,UqbT0Vg{b~VMmo|2awVt+;X`;' );
define( 'SECURE_AUTH_KEY',  'df)w(z*rVcYaR?Y;C.XGHAb?fzRn-$/aR@gcB3aCT0*wdGb/Oi]ds;MBe])R8#S_' );
define( 'LOGGED_IN_KEY',    'S%-$;4T(xp`g!S*A@LXMi!<M:0Ln*VjUL64)IYkQfkoZ}?<7/qlvJaYkw!;Sq,7X' );
define( 'NONCE_KEY',        '[C%(hq0oIF,|NJ rx%.6q tKa_w>*7(-0qUO8a^cpJJ7hVN6px*i1EUD%;JQ~Q_-' );
define( 'AUTH_SALT',        'dnH>f(:KNJwn2p4IVbUD88lQ5.t_jM2/C|0{K(+:Cgi( Ao>`k1r9y-okb ^d C[' );
define( 'SECURE_AUTH_SALT', '_v,{-=rM`#imMrCj!3>vSUBb1oyfbbhWe!GUaPj6xFC(J:>_p,w_Q$*.#-_p{C86' );
define( 'LOGGED_IN_SALT',   'W_1kR%WNrS`>%T]~Sj@[f{[C&l,PM<)I&*+R{|H!zfTDpeUlHMx(*&mad>s%q*y2' );
define( 'NONCE_SALT',       '4X+)kWj8#64`.&I&UxhA>NT[KgB@di/_9!f6I9XoMS|jn_0Yo<cq;!hQ0pVqxfs@' );

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
define( 'WP_DEBUG', true );

// Access to web server
define( 'FS_METHOD', 'direct' );


/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
