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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'deb64800n2_wp' );

/** MySQL database username */
define( 'DB_USER', 'deb64800n2_wp' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'Z_d$DnXXIik4at]~xG1+]O0QaTqDGYST?mPeA3z}A2vuF[Xz+y%*gx;Uk{zh+a[+');
define('SECURE_AUTH_KEY',  'X~9WZg}+.3yuH%3RSFO5y)T</7?S{iij4K?u9^t+4t/jxAqd8eZwDlN`/2mQbKpC');
define('LOGGED_IN_KEY',    '0-UtBK_;n#2EYs&-lL/!wqKDut<t=xc%P{)tN#x=J%4binYdQW4W09`Cw!KRI=D0');
define('NONCE_KEY',        'a%1wk8 ~+v+?}j_Nh:l2GK }maivMgL%-d[d1Ds;Hx!lsD:|hkUKByylHl2a_+n5');
define('AUTH_SALT',        'nlOw|6&73)v-pj B5KtypT[n+tnDmOAfB2E~Z0}Z7,~V)[k:T<u@a&lN?+2G#e|l');
define('SECURE_AUTH_SALT', 'SY-$TeCb*l1X)N--FuK56A;{3Hhj*AJPd+I(7!~RNE0CtCJ^IF9kG_e@|_K3pf.V');
define('LOGGED_IN_SALT',   'J>@~qjgC`b0E*n-7[I-je N_JY|E@s(wWc]d%a,m+US +k2U;(w~CQ$)Cx|ppOc*');
define('NONCE_SALT',       '}-IGku^ev6|;3UHJa=K76Q(&#I(>uF09?/Gg][9Qb|Q=>$?g-G-{6W{+h!w3z$fv');


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'xyz77_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
