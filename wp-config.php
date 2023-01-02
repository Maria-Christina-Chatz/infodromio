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
define( 'DB_NAME', 'infodromio' );

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
define( 'AUTH_KEY',         ':3eIA%6c>`CSXnpm X)geC[(p8&4k_NhvYi>]0o|MjH/MP{qHF:UOzCi.0AC{*}9' );
define( 'SECURE_AUTH_KEY',  '+h+EtE/#G{!eM5!ulE;Z}!lx6_NAVHPKNr=ava,%oS/v6(Skb:{P*hU[keea XB&' );
define( 'LOGGED_IN_KEY',    'aUbDzEvxrWA#.kb6kzxP1[ZB*QjZ S)^HB/WxE.&-vX*6+#{^e6S17k(V@?`Or<|' );
define( 'NONCE_KEY',        'c-o-6%.GCpO]tW5JT#(_PMmQ09*FcCB(yUJWG2_Lw,pAp,L}mO{$r@74!soDHAR|' );
define( 'AUTH_SALT',        'Vy0$~uPMae0$~&nL~Zakd5wM4}Xby|t1U`SQXS[|zh:pz6`x,trCMuWS4)I8$vd!' );
define( 'SECURE_AUTH_SALT', 'qMtvrgWwltbJPt+ca(vDa-:Gqj4W5({o(d_(9yJk|N^:(&`{!n8>hDY)]-vWLtB.' );
define( 'LOGGED_IN_SALT',   '5D<[n+U;K!2bECs~Lt)[lE<jNiwm,,sQ*UF<q{dvp.BKAJcYHFGaw)vK5{:uX&&Q' );
define( 'NONCE_SALT',       'a$.+%PhV^h]09A7Ir,m/WCM=R!V~)vokf[%+RNHErV[W_z[Ladw!j;4:TL(9f,S4' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'infodromio';

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
