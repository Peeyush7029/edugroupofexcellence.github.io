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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '$%x|&e]Xs.^M2;v=@=ts#[K8oR*0GIsM4kj7:~ iTO>{+*QdVI3;lo#0QjRf,-G2' );
define( 'SECURE_AUTH_KEY',  'NiL<L_L5V${BN..q&Z^D2T5Br`qf{g:}W6HAb|G%&&XX>X_:PrJuP?dD*|G#O$`z' );
define( 'LOGGED_IN_KEY',    'gh*#[a+l)!KzHWu$xT*=B+1w#VUT1o v$:BH-RCaZ!AC[YuU?VqE4qmRAuGMN/34' );
define( 'NONCE_KEY',        'TRSELIG9]l*,%sl8L }a])l5bX(lw<$k6SE0AxEPV/m)gWm7ENpM=TtM;K&LOHQ1' );
define( 'AUTH_SALT',        '+}@NkLYFqOsG>`&T/V[]p~]KRoYsK5m0KpfyMQV}Z9W]wPec;Qk:#qiG#dM]PLu ' );
define( 'SECURE_AUTH_SALT', ':j?DXA<uGVe,?L.#GyJr^c4yH&UYe!l~!Pxq9gjkY@Kr(N*[l!c^@H?N>Rk{%]9F' );
define( 'LOGGED_IN_SALT',   '.:k|KA@6f/[?gE.%M@HiFf8/J#As^>+$0(HP(+{Z`6y*4(fH~.# 0yG`H)3}4Wx:' );
define( 'NONCE_SALT',       'qUnb?n}9^[As1tjSX IEPC=5!FSRNF(Ebf%Ee9u%s! q@9akhNs.>7Z-d0@{N.Ve' );

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
