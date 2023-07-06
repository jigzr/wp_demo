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
define( 'AUTH_KEY',         'Hf`*v),==A5U[/r234}Dy!?%p{ScAk %,c|McnDZ`^mC.7|s/gqE4.WlK8)FD6O?' );
define( 'SECURE_AUTH_KEY',  'ski}wQ*-{gvkL8>*]$6fjr/|VfRwgxOn(}~AoF$*Rs]|4fT,V`},g*&BTps+O8=`' );
define( 'LOGGED_IN_KEY',    '%:U6>LgrgrJaj$rZdOWHC?[;pre=(2>7ZmWn3%fHv?duX.0`=qTS{N?z80SXHzd|' );
define( 'NONCE_KEY',        'XJK/04St7DvFY cZ&f]K:;-h)=E0b?zCj(&#5]G_&(SIw?x?W`1`UqE_y1?k%VXl' );
define( 'AUTH_SALT',        '=d43SG`e8qa#Wu.Ebml(y*_X!?e+bfr5T~HN>ymP{Uhq@#[X$N;dMa:Z$tB6-4,M' );
define( 'SECURE_AUTH_SALT', 'F,YP`e/n pygm97q^Osjj:k~>c$[q&D8Dj%+ToA|,+w7h?45zzY/1/8*&`~vX#YG' );
define( 'LOGGED_IN_SALT',   '|X#K[8~x&QLhbK^#HM!8;^TMm3aRDp-D9eF{@6.lIx@c>#@E-Xh!W?x33!nMydO`' );
define( 'NONCE_SALT',       'Y#vN?[J**JX]&~]!%19bgyg}Bj_*(%u2^<flHV;<p!cxeha>R6^{J)~y2xnjJi_E' );

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
