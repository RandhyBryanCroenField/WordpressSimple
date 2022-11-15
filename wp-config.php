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
define( 'DB_NAME', 'websimpel' );

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
define( 'AUTH_KEY',         'v!Yr*.~ZQ]YFP `DhX<W$8G/Kw=4h*t,c:NWprYUPjo|2XuE_,ez*;T$bc`<:x7B' );
define( 'SECURE_AUTH_KEY',  ' v:ojw;-k(qUIh^~T,bR<RG8ez~%n8G_VO*T,l{(Sy<|LoSN+{HRa5.DI0^VY{?V' );
define( 'LOGGED_IN_KEY',    'w~RMd=d/)Iky>S>9FcV9s^2Cf=`xu.|]pLxp9>D:Nni*pW(o.tS!~3i7-/_um+b@' );
define( 'NONCE_KEY',        'xG9`buX@KFdep1^Ra,&q$0;gs+NuDDn?`j2mgEA}iQa]UAO.)DM4S@:;syvkr&T_' );
define( 'AUTH_SALT',        '](nz8<RJf ~gg|-xKbh4sY[RBU/oD.Rd/)Vup)j@6@IHWY=,k8jyo8/*H+S49G_.' );
define( 'SECURE_AUTH_SALT', 'u$]7j<!K(silA+GIc+Yt[WvW=^*2EgJs.7Sn1R ?_@h*O/~yi5<#N,,p3KD==Y8k' );
define( 'LOGGED_IN_SALT',   '5^b8xxNB!1k>A~%Fs@mF-iPb7T:/QDi2s||j!(WvJk:7;]CMB2Fg2Rw3[u#O6e (' );
define( 'NONCE_SALT',       'G=:oh6(uH7[REkufwRKGHJSe>NAKnJlDv?^i3^4S/+TB<q@YGeNF;e=t2t25irhK' );

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
