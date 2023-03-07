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
define( 'DB_NAME', 'db_wp' );

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
define( 'AUTH_KEY',         ']c8EHt!~`ILELoDbFa]mI#aq_/s%|0yyK6~:B;[`.&1}_j5I+~Cmv1,<S};~d~QE' );
define( 'SECURE_AUTH_KEY',  'd0bO%*ff4$T2.Ju@L=b+OJnT/Mho^X|#n/E`<eG mtMs|PYIEb:!hK3>~t/uB#mN' );
define( 'LOGGED_IN_KEY',    '*xQE,?`ITf% -A?<c~Xj:<t3Fnh<Gc5zN[}Fg9d79da5.T_u[u>d}Sl787 CFZB1' );
define( 'NONCE_KEY',        'e$[; n5Wpc%HMCsqQEX~>#|- #4QvfCSzyeq+sRG[|PEHxh}R/^~+^z>TNDq87%v' );
define( 'AUTH_SALT',        'AsQyjq<w26U`K|<`;Ppk}bk?@=eW)Vguxj,M!Gh_{u%_dsRyU2YPmQy9.O(XD5P=' );
define( 'SECURE_AUTH_SALT', ';J?JP(oSt%mc#^B>A}=Gn!!v};<K>b63_<Vn[/sfSu;^w#y^&}AgbWlZ68CNg:},' );
define( 'LOGGED_IN_SALT',   'P!/=vW]RW^%x2N2cs&H#A?Vbn!2c,c%s>Tqx]iS0^[l11Xa*u+<._Bj1mO(@NBo)' );
define( 'NONCE_SALT',       '1PJ(3z:,w].t~~>2JuB.P85?=|t)=5?Y%<(]=I,6y@UJuVYQTk_QFX(/!8-AWF*T' );
define( 'GRAPHQL_JWT_AUTH_SECRET_KEY', '0qf1aaFf`489q,V?/b!YZ1r@e:#zr-Sd4g!(/sq3o5&[s44rz)y.4s~h03czQ%1f' );
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
