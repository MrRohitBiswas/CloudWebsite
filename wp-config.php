<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'exp' );

/** Database username */
define( 'DB_USER', 'exp' );

/** Database password */
define( 'DB_PASSWORD', 'Pass@2016' );

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
define( 'AUTH_KEY',         'K8A(dpS,mE}n81Y^L9(?L^}Mwp^M{B`7P*-.!N/xo*D(DCs[(:@O4$#3fWmWMny9' );
define( 'SECURE_AUTH_KEY',  '-29XH8dWQbT4(%K$?Cd5^wZ:j@L!XJx?H5^i|$_AwQ*(g0nX^cZZzocQo=gtIMX+' );
define( 'LOGGED_IN_KEY',    '%%@F{H~$J -3cjZ@V?[L-ZZ_<Z{ik4T_f*Mke} nox13#2+x@d*9w!(s2;/pg`E2' );
define( 'NONCE_KEY',        '_Z:j>Pz:bVc7*9]*Im!hvMI[jRn?-5,vZ{5($XsFN[[zI>9#M.C)Lqcwr/W%I9;o' );
define( 'AUTH_SALT',        '4N00@Aud{T)r^.sCI?!vv;n@dN+q>E!J.6oW;fWkq.PR55ZoCeGOCkR%C5pOB?g1' );
define( 'SECURE_AUTH_SALT', 'oOw6~z2tcWyK(1V;}7[(,WG2quFucfx?W>L6=G$4&%L}oFOg!%?Cn(<;%n,@Q[tu' );
define( 'LOGGED_IN_SALT',   'hR]}l0OiDrga59|j,6[qF=8Qw|wXJ/eDk,5/zXQ;c5a]@|xwkQ)&?B55}IjQ33NN' );
define( 'NONCE_SALT',       'a)02=X=M`1vS=!F2jY4IytRqB;C 4[F=Nw5)BFgK[TISgkHX%ukeU(LFt;h^KsA(' );

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
