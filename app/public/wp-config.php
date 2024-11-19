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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'u9PM]6nx%.urH;3+ZRi7K>U!R&hXOCNT&Ulb>6oJlV @Pv$kDLvLvl6<Yy<(|C}|' );
define( 'SECURE_AUTH_KEY',   ')qhNvqmgZ+77e NB=z,h$W2XN*w;1r&yx1[X)2lXcCD)hH9218omin21iQdtfVW+' );
define( 'LOGGED_IN_KEY',     'S-j]-]Y1R?r(:}RNTi!}sd)]6tTqu)WnHi{)F`]9~uk4Y,~P:t`&F^FFo rl9 {8' );
define( 'NONCE_KEY',         'V*|>TJ~v/LEqYGCp7;HD1~dzl[69zFz:|sQ1RF@qPyOCB6oa,o4tTu!e(K=PBk-7' );
define( 'AUTH_SALT',         't:#,nVf6{K/!n)f7&p6$G~m-P$8u;u7vM5k{fnhHZdc#U3}td+ =IJL~qJtE=/QC' );
define( 'SECURE_AUTH_SALT',  '~_agL;6s-P7Nl@[y$TJ@j0)P]#LS$d188.GhR@|ZLtSaM^;j%LINR>>/<+y@ 9nI' );
define( 'LOGGED_IN_SALT',    '08e~4A*v0<R15y{W1/A+KD95ii0`D4g+BL,1|3,mNf~kTn[+.=)9kSh8n2Pp!/=;' );
define( 'NONCE_SALT',        '54L&y:D9P||V/f%<m[;4pNroxdAUMg_]JBC;pF]X8mSqHZF*VL! w83]*!r)1RnD' );
define( 'WP_CACHE_KEY_SALT', 'o@4.tqd#_[z{RWjYt#KM&L%9Jsj*Xv+@H]Z%df|:xq:,xy%Be9#_mw&i,4DGAO9W' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
