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
define( 'DB_NAME', 'store' );

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
define( 'AUTH_KEY',         'kAn3,Qee!zn0p_BC=T!xGpf)^OC?v4Smq}H0wu2U:_yj~w kP]OcL95Ye~iCxY?6' );
define( 'SECURE_AUTH_KEY',  '`$ Nd~uS3VGY9-)[uq=X@Mm/OmTaj3AWrm;b8cOpqY#0r&wy%V4G1O:wZh)l/ZJd' );
define( 'LOGGED_IN_KEY',    'wAneA|4T< >P=Lvp9s6ZH~0/c`WACza!^mk,}hHwscO#nhEZKLr:eO*w[p{Y4380' );
define( 'NONCE_KEY',        ')H_0^]n!Ji_h-m~pa2:q[i8z.uQt=s8)F4glhO+[f%>Un^saHGA:Qdl6qT}KV(I%' );
define( 'AUTH_SALT',        'DL7(7{)ty(nQx>+}*1T_[PgaJSMA$PU^]QF@M>~)1Fv/NusMIsS<1?XJ&S*L,HID' );
define( 'SECURE_AUTH_SALT', 'w+=>m?-:w~?G>}trG=d{;@ 35^|&yg#0J<|]x%]Phj8p3Pu>H|!/$l|T[[=H;ElX' );
define( 'LOGGED_IN_SALT',   '^ut=K-)APT`0eiak.^#OvAi7G8lF|0=QFWU%nn.N=Pyrey1]IxBCah%>;Y$^V{/a' );
define( 'NONCE_SALT',       '@~XY)8vB?._TQ,Oa~>6)6Eh)q2c7<XxJgFSWC?_4KY^469LIjastB#SK3Y$:_ySF' );

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
