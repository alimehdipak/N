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
define( 'DB_NAME', 'nemobase' );

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
define( 'AUTH_KEY',         'Q}`V/pKvMj=B<0I(rK#>)4wA6@)4q:%PIaxw4mtL@{$R{.z}`P1PB}gVz1]!DZ:U' );
define( 'SECURE_AUTH_KEY',  'q^O}b]kc}`Q3Sv-zHYmbpVo^X/S`T0X,2@-MCxz@9GCDdhI,1V:?.$mC^-<|5=>y' );
define( 'LOGGED_IN_KEY',    'EH-%W/xGPK)Un)5daTb3-9z^%OnbL/KB<(WH/o9_:+DD?Rq=~?i[V?InQ}7`Sswi' );
define( 'NONCE_KEY',        'w+7S=XU$SmTAttX$w}[LY<)UnKM,[bO<E;N:7:!RgGMgrOaB[fgAjC3cKT;93,%H' );
define( 'AUTH_SALT',        'HX6tAf!$c&>)JGiJ<-i|*V0+ExqF.lYGW&,WX=8ApN|aJ;LG73X&[-r3A*UEuOUZ' );
define( 'SECURE_AUTH_SALT', '1&Cmzi$`n;hM#l, .d>O4$z9I=i0KmZMC,HW1SwV<Z9|ysf!Kl9)6qz H5#f.^|C' );
define( 'LOGGED_IN_SALT',   'f_~^BVLL$AdK?`[Xz?(OdTl<ThB[bL4:IO35,}ETBZ/Iy)n2LSxksAu85QSNF<e-' );
define( 'NONCE_SALT',       'w]Ir8A-&]2Q%{r2aOV?1|xHmKqiA+Q*Cz;(:6bp]lEktwk!;Z$Uwao1~IQ#P~cyz' );

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
