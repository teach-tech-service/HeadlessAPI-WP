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
define( 'DB_NAME', 'wordpress-react' );

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
define( 'AUTH_KEY',         'aCgWG%4Hb}(|kQ<Kg*-ZXs(&P<4HLCpYQbz7_!%[E)<abLd(7?C@C6|<D-<|`?*s' );
define( 'SECURE_AUTH_KEY',  'y|>#J ZH:nA6Y*4hS8r<a:6*Y?+~pw[G7M0UM<b!`K1k5L7wRew@(y,Nah:2v,Cv' );
define( 'LOGGED_IN_KEY',    'XmWS aUP! a8xB(.`OJ8*fLz=~u7bZwB93)yA9gzwhOrQ9Nes4R4K4MBy$wgFg[5' );
define( 'NONCE_KEY',        'eMNJ12h@i/prt~r@O-78TL@KHvF_p.N)CGEjr;#+sv;IjI~w[Ya`S>/a;A%!eBNS' );
define( 'AUTH_SALT',        'B2T&sQ|WRyMzSv4LU Fw(SV>}Bj4fA_}ihUuRW&4k.4qZ!Cp@sDTLwL|[(V]yK&]' );
define( 'SECURE_AUTH_SALT', '0UIy8+bw2a@!c==3mELAUu&Wk-Z36m$?jyw(Lat.-;>@95u0VzThcNK JRAyW<*,' );
define( 'LOGGED_IN_SALT',   '/Y/R):bNs185^Hmc~2Ml8E?!jln}w1iTo?jFBLxDcO:/aj~OsAA@}Y2 f+9yv%ud' );
define( 'NONCE_SALT',       'im!J8lfl4Sc~ITL4W1kHwBS=1)3^ANui12#ho:Mtcv_Ftr|.9?#([TZOJr[Yjb=r' );

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
