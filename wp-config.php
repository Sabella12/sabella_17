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
define( 'DB_NAME', 'sabella_17' );

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
define( 'AUTH_KEY',         'f~:d..%e$<_0Km_l}wa2]wYv2eQNb|+1rZC{MH]<>F_vAS9 L.!$vjYBr1so*g.)' );
define( 'SECURE_AUTH_KEY',  ']y#.>r{]xx?6QI!pYD,?$}%3u|~m]bsc_!|@^RMB!K3.D]~:_-<XZC!=jTUbT[^n' );
define( 'LOGGED_IN_KEY',    'N#%yF3,C!MJtZaR y,Ouocl VPv3(&(]Qj<%)~J$]8_3u^lUv*}j}$}Vi._Sov&,' );
define( 'NONCE_KEY',        '1EU-2A(R}0-Se2B3cue2)!gU}%0y5q<s_z,^P`R`$P>BgyY{vGMj>)Mi(UVQSPv2' );
define( 'AUTH_SALT',        'm*J_=^ +`h6X-cUQ&k;Ix@G83DH@|zexEP(ZNL@8GoH<c@V75<IUu[xy+W3xee,$' );
define( 'SECURE_AUTH_SALT', '&^1AfoZY#Qho<4hPl,/3/SN;|kxXwq}6gt!$,wF.9KO@9c!Za+3D([iFqX7(S=]q' );
define( 'LOGGED_IN_SALT',   '5~1eg*BWs,tHu1u)u4KdaNXxFE@X?n(YI}-{edV]U`55X^O|p3r[Y<rwwa0Z.lbZ' );
define( 'NONCE_SALT',       'wRRu7W,jn)e(U$*~##>RtDQT[>6REP}ogQHBsMMwTPSG&Gb4XjlwB$${{w6e4ASF' );

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
