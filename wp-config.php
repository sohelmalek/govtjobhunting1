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
define( 'DB_NAME', 'jobnewsblog' );

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
define( 'AUTH_KEY',         '5KizE=J>CoB=oM18L0tV_ReUuLtg+0VcHo2[}#_8oxRJqaaf(z]]4J8#%2~[JHd;' );
define( 'SECURE_AUTH_KEY',  'V=^~bTQ?-E|_O9^mG8~5JZyy}<i0P-b[3rx+:ClRpd#fs9p$12<*vNR)o-gd<%|d' );
define( 'LOGGED_IN_KEY',    '~L?!UNCx2$0|pTma2y~&`s~5g2wuJg%UM*^mFe-8L]O)8hFbiF85FF&fd;Zo3agz' );
define( 'NONCE_KEY',        '`KF!(0!qA&:7G]@->#5pp$(R[#mNptP_ER83(K{h@#Qihm,)Z3oOg6A:m^!QM8wQ' );
define( 'AUTH_SALT',        'G7|0(EYqarFH^Mw;ON)^QmL<;spV+><G{>E<UsA&G#@gs#Q8D?W1BX6X5*I$77! ' );
define( 'SECURE_AUTH_SALT', 'j7N(~|~>^N1-7B=bO,[GTB=*3+BY<sL{%Y]!1[;qodGHC~[kavpg>mD_O$F`yrK@' );
define( 'LOGGED_IN_SALT',   'N@Wj)RZ)W~3}x^GqX{U.EFa?I =;d-X3XgKv(oM=oN/P.u+}@d2SMo/z{scSP0~A' );
define( 'NONCE_SALT',       '%$R,ajYGR:D2D[N<#I`Qu@_~/Z*SrYZUnJ`g3Cx:/~+cuzMrMVm}QxdP|M!aZzf,' );

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
