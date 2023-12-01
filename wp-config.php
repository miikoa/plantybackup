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
define( 'DB_NAME', 'plantybackup' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '{IUh:U3&Slw]fLuUkiB`f3C$zb?K()c`iu(PN5C=2c(]JN1(M +#<DTYILs#I67w' );
define( 'SECURE_AUTH_KEY',  '&Q,yazDySxYn}2z|0asCU+EQ`lWMJCUfWhn][}zBOhSp??o.IHU~zMEIJ_ys9Qf~' );
define( 'LOGGED_IN_KEY',    'm(eNf>4PN-n j=ApeselT*,<KgE8{+HK@@3qtwE3Oj#o@Smd)yFYPJ0m=a=b`~*C' );
define( 'NONCE_KEY',        'Ao=4FdwA|^kU,#^Ad+Gh6aQ/=Z2OJuZ:;j=rf}P6Vu-&.bm,)&iJPgLu4)Jp1Kr&' );
define( 'AUTH_SALT',        'j6uHIz#+ag<s=4yc@nUNGIuZ;6;^MN8Ym p#hu0doRrQH!._hL9|7&sA-T H{@@{' );
define( 'SECURE_AUTH_SALT', '/5X YxirKSJ{4 ta0<N9R(NMyKyMrjo@>K~y<@dPaOp))C2oC%tYx>!yr]@h)r]~' );
define( 'LOGGED_IN_SALT',   'F8Y8[HgZnts@nS~#e]Oa/0NSXGpTD`kmri2SxL}9.#EnX{`$klAI9=+ K8@n(|A ' );
define( 'NONCE_SALT',       'HM(#{>ywudk3$Q0>46rue$F1uKWK{C[so)8#Pvxr9fAB9+6E5,.$T{a.fE{1O .U' );

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

@ini_set( 'upload_max_filesize' , '128M' );
@ini_set( 'post_max_size', '128M');
@ini_set( 'memory_limit', '256M' );
@ini_set( 'max_execution_time', '300' );
@ini_set( 'max_input_time', '300' );