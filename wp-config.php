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
define( 'DB_NAME', 'siteweb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         ',do_pbMSZre[ub^k6YaTG/PeEU2.A*%{L,AGcN1 ki*!PY>H</)eMOy2@F_O:PV&' );
define( 'SECURE_AUTH_KEY',  'ThLb-Q7gVIq&_ak?r14w*lRv[7I>cTu:ka  6kN2Ba{sEXkb[$m);7zU>=]^PHiU' );
define( 'LOGGED_IN_KEY',    'Th/-ISCg EQ>nmUVV_)6B7AfbcbEVox$?j!K)wMF+t35J8Im[5eL6$D{C5S>eo5y' );
define( 'NONCE_KEY',        'f4Sq67RHadZBB0+W:.(UY<h`;?4W-51lC!;k7x(b 6qm?Xg^j=Y/}&wO*-p$Je &' );
define( 'AUTH_SALT',        'i2SE8SPRNSbL)&w[hUWIG+jv0b-@Eh8hi*zq&a3_p)KgcZLaj%(hk]j<C76,M?9X' );
define( 'SECURE_AUTH_SALT', '^r`UX0gs=hCZ@;v.LRscpd,@b>GO=6uIS;]&`]N(pSou?!i:QUZ=eiV@hr!+(Y>!' );
define( 'LOGGED_IN_SALT',   '4K |P#uf 1-+!{9!p%4lzYvV3uD|VZ(jeIy;H|:K)%kpS@JldzvS9>.@|E8PpU K' );
define( 'NONCE_SALT',       'VEterb&$QEbJLdOU@2*neRpeAgEC@KUoP07.q>%oV|xwegEsb0b!>LQ,~!f>$H~s' );

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
