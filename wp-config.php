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
define( 'DB_NAME', 'stickflock' );

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
define( 'AUTH_KEY',         'R_b{.q5~eLtOPy>pO=;L8LRl@&++ed9PvLPYY;Bn YQRvp0~*}H.,{Prwz.XWVD%' );
define( 'SECURE_AUTH_KEY',  '6ma9kb#gX5_C{:1B}P6$f22#SEUE*e8vt<kV41h9dh17p8wI R*YsO;NHyr3rkK0' );
define( 'LOGGED_IN_KEY',    'ZOB?=LR2QS*j>Z=D(]s&=hd>F+8B,3eZge7F.A3 jv^7ICKf)u)J{YvnICH2fcmR' );
define( 'NONCE_KEY',        'HA9;Ub68@C:=yj}@vnJRn!Tak4!1ZIt7w?Y2]:%th=J?K76ulka2p:X-ZX~ `0dr' );
define( 'AUTH_SALT',        'oJ&+mrPAfaG!>oSSD3baxVDrsQ}L=m$*xuHpcq6tNY#UJ|Q+!<+ddG4K;i;Tb_89' );
define( 'SECURE_AUTH_SALT', '(7y5]M@XZVyek^Fs`8.4=A#U|/h%0[[*<FgR7T`r>63_?fd<5VK{Byb>lb{j_|{K' );
define( 'LOGGED_IN_SALT',   'IsTM([z0!QN-+35jf^jn~+g%-wQt9aI@O$v;o,75-8!6&b_^M2Yr{DuV{w!~jJ*U' );
define( 'NONCE_SALT',       'o(NNo6K?D+/c!|+pw-t*A=d_o>fy/GT^$2:in,E8?Hj0]Au:p~e;ee=7U+_khm]7' );

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
