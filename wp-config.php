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
define( 'DB_NAME', 'motusproductions_db' );

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
define( 'AUTH_KEY',         'W]JgB;g+AX-bq~ATluRL4CkZ1PS7A9$gp;4Tzd- $X3@oFjV|7),$lsH;msY_$XU' );
define( 'SECURE_AUTH_KEY',  'fV8vw8p`i)PQw[mX@d2Zz`}(CHyNT_dfFI^5s7L~#pcIQM$U4} |k?.W@w%}{:_A' );
define( 'LOGGED_IN_KEY',    'Q@x<fYhDkz;RL,}&hNgIrl}pzT[%|<8NUcmT~nx7g7a;#|~.%biVU@:d%_+_KOyf' );
define( 'NONCE_KEY',        'y*!+0mq4?8PxWGT<W|{TH@w_d2DLLdXlhG|5FOxf x<4uB: k|xA3RO?F)4V,g5q' );
define( 'AUTH_SALT',        '*PYY,r/ULX9Hu22zar*YAy&7Q6y<[@>N^Ul/ps~au^ME0]C4^4F0WbJ%`u7*6M.O' );
define( 'SECURE_AUTH_SALT', 'a4-Otq^j_;Lda6h>dp)8|O!r8bXS=LzW,&9LRe`<Ysn_Zti.cy2I(n0&qg`>p),y' );
define( 'LOGGED_IN_SALT',   '{TQ`{2cH;1a!}TQVhA%MPWQ>.SDD.+qp5>>Mhx|xe[#>l]J%#$Co+UkgR<}UY:__' );
define( 'NONCE_SALT',       'e:Fv!xE2)MU0:X<g7_PlLU9jmUlR30gn<O8?{TfZ;oKcoWm3sJ54>8hLtat0Sb.}' );

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
