<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_hdev' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root123' );

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
define( 'AUTH_KEY',         'z2xkW_( =s=1.Q$3Qx<f3DWCz[<(F5L%>/V-_+_{mn~Rw6Tpk*DAggD]<C0^DE$0' );
define( 'SECURE_AUTH_KEY',  '. $[S/&M`W)[_iy2`o;;DwRgGdo5>J-2azI3]dz8$JscKUK,wi {ak)T_F/JoQ3z' );
define( 'LOGGED_IN_KEY',    ';FV[q*CZea-VL#YQnrwQy;c`+W;i7S24{R>isCBS6+uPB(: ,EbZb0}zppB#8 [-' );
define( 'NONCE_KEY',        'x-9fFbGuZ>9}1.Xcuj.UO.C$*?3^#3By.|4bT1ee0?4k~*DYRY^=Id~Cx{P&oa6E' );
define( 'AUTH_SALT',        '_6HYLNk)j_id}eXnJ:A1fparImN&{[3ik5Mz:BG/mLv]t{30%h*+otZcJFtIJ|u@' );
define( 'SECURE_AUTH_SALT', '7@:~SSiEGAWJ3ZWGB Q[M.+pvENetbjK0<aEBy`TV}NV^T:j.D{E=2wDr)_@[wDK' );
define( 'LOGGED_IN_SALT',   'Hv$Cx&8]U|0rwPc} Hdg[b`n>3e(s0^UxC{Uf(!)a8SOQ/;9$.E+=!fPB|yL5`:L' );
define( 'NONCE_SALT',       'FQa_+?|6WRx5b=Oj8`L+C?lE_4f1JZJ Z(>ds2%.$2%#vdY[z<qR}&2hps_#C-/9' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
