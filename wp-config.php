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
define( 'DB_NAME', 'khione' );

/** MySQL database username */
define( 'DB_USER', 'khione' );

/** MySQL database password */
define( 'DB_PASSWORD', 'LOhvXwXe5bpx4Uji' );

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
define( 'AUTH_KEY',         '&e-S7D901V)p4U,n@W51#L$!Z*0.X_a/R-?eu,O xK5f=UdnXt^GhF.{!2pX<xHm' );
define( 'SECURE_AUTH_KEY',  'YBLNjG{sgVgclGcSFusrV6VCvX Oac{B6J]lnL[lO;w>x;7/|,uLXzs_#2#EX)W8' );
define( 'LOGGED_IN_KEY',    '(q&CI>7.Wf%vd1Mx(G>yK(6@2QYCY{j[6-s()$#n|~,p8S?2XPBuL+j:Keat/Bs8' );
define( 'NONCE_KEY',        '/[lWGTfhl)]Eq%9yVoCHe=Rhr?`?_MD=7hh$Nqw%Nu91}Hc:gz+KP+^R Fa*X8,N' );
define( 'AUTH_SALT',        '$Y/P0*.73.<25).#,IaDAd#9d`h]WD!=__DAvqlcjhvo?-#j07*N?3p?9skfX),y' );
define( 'SECURE_AUTH_SALT', '><i^{5ov>E(wualR $~Hz_gzF^h?y}/u_@O>m0D00%:+8J>lgbojl}/o DWy;;KJ' );
define( 'LOGGED_IN_SALT',   '^L4wKFWxq%@(9N=sZI68gy]RC{)wFpi`AJsiae8[mZNvP1}G~7|V>|V&3a|`|2Q!' );
define( 'NONCE_SALT',       'Ba+VRvQY1yIGVbv1Xd?qG_I>/wE?O|%=y?/aAr+|:85XK5P%w1Z8!h{:l2J~N|=w' );

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
