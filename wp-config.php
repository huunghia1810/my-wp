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
define( 'DB_NAME', 'mywp' );

/** Database username */
define( 'DB_USER', 'nghianh' );

/** Database password */
define( 'DB_PASSWORD', 'nghianh' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1:32556' );

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
define( 'AUTH_KEY',         'E9_JN<socy,qO0GPKfA.`__GE07exexB>+=k9?.oCb4!^mB#PTee!epp_QW`?o04' );
define( 'SECURE_AUTH_KEY',  'm _K$3M1]K+c^Cosp49$)aw4pdol;kI$t,sHT#l_=iz!EUN =|ISKnQLvfVffjkj' );
define( 'LOGGED_IN_KEY',    '}R8<X=)-]$URrktkH/2`kpM!F~|qtX{[28jMq9rI=0Df9[Ru5m%+4fz-$O1TBR2/' );
define( 'NONCE_KEY',        '}.w?$gw770riQL`.@-,{hucTi$ekaX$1Hd}7-(~H{X8M@^kl:bGrYP$|>!8)V0W}' );
define( 'AUTH_SALT',        'Vs_W}K ?g,uXx9pJ!y{}q~]F*{Va`e)&QWR^,oKA6All &?T8Os*rV*~##b%,#E)' );
define( 'SECURE_AUTH_SALT', '$} hQGOb11E{VUU;317YG )Q3X~YIInxr&T40mi$OMg[>=>&X&EhG;`<WKBx6@v_' );
define( 'LOGGED_IN_SALT',   'UI$u2#kUH!|C%CF@)C3nnS;dFb-_W &~1G]~}(#ggE$6.,6FFLZpGu6yKa,/uO`{' );
define( 'NONCE_SALT',       'Kkj^6P{sFP|*q^~gQBi&}2zqu2N52.fYrtGuzo^U~:7=0#t7i@@(WB4Xb-7xL47p' );

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
define( 'WP_DEBUG', true );
define( 'WP_DISABLE_FATAL_ERROR_HANDLER', true );
/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

define( 'UPLOADS', 'wp-content/uploads' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
