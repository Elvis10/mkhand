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
define( 'DB_NAME', 'mkhand' );

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
define( 'AUTH_KEY',         'k,Lks=@u5[Av%iP{Ax7a<L+9:3FExH[Hk6~T#OzS-MJNEE,G^GKpb#ccHQ#%kf8Z' );
define( 'SECURE_AUTH_KEY',  'P>z$n^!qX_fmB=@,o5nbt_v},V_A{.;KZM-{}~p+[}_SY` na.3w!]Q)rbL[C0hA' );
define( 'LOGGED_IN_KEY',    'b524YOCTKkt6hGdCv7uU@n*($]+3MBpplWn`6<~;Bn8y4_&W0s4*pr%I/mPQ2g6%' );
define( 'NONCE_KEY',        '{g=7.}/qndB{dQyU1I)v>Twah+E709zboqV(l8xaDq`,$RQ/HJ+1,k*>_0-[G=>c' );
define( 'AUTH_SALT',        '-AYUPHYIMsipm2@z35ntd1/RXxHqzs`,iT7{ItCUp=7=E]7V3tE-c{RZ@?iN[8bP' );
define( 'SECURE_AUTH_SALT', 'O7-&/}Jo q7`h,x^]I&r.`X<qHF.J{yxjq?G]t$V)|_#mLe>G.?,0l;PB]~BShgN' );
define( 'LOGGED_IN_SALT',   ')lY|BqD?A1qw1XY=#.m18toiiVWSE14j)AIh#;Y%gWO[9rc4#JWxkVEywo~,:JCr' );
define( 'NONCE_SALT',       '=YyBcS+lPWg5amsGPn,}EP(Xo0KIm1G>/QqGjEzpFO#52!e5n2$Xr*_Y|@iWZjB^' );

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
