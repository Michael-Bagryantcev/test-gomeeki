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
define('DB_NAME', 'test_gomeeki');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'f+q|1w3,=zf7}AbepJ@xEKk]6<&4FIIHg.bB<N$wS^ea5N{|;]^K$i]Z2sCIvK%_');
define('SECURE_AUTH_KEY',  '@af#M`=5TpPwJ>g/9;No@&M!9;l[&L0Et_`0qmwd[/mBW$Zu.&|7Dad`v[>u)_K ');
define('LOGGED_IN_KEY',    'mmVkXF9drr5z5sEDp_n_];nA5_=oPvj0:CTi)Ox)Wh8ZbP+rXu#pfr>F.rbTX`Y)');
define('NONCE_KEY',        '!gI=Lwb6A8-`9Tt?&ynPIT2*!{fmCKWB^v_`4.8sb~i:Cd9](:RpJy_5kf=R-#7r');
define('AUTH_SALT',        'M <Sz`u1zAZSa1@,I&V*6o|g}qSR$Rq4C]!J_.5^o70:ET7Q*8Peo^ YMS!#O$=~');
define('SECURE_AUTH_SALT', '.Zyv11o|_ ?D|S5z+V}M_ld4(o-M~gIzTpX@>TuZle3ePhZD%%5dQmYRg:E^tu]%');
define('LOGGED_IN_SALT',   '%9:t_n+:4HL<&c5xsF~W6Z]KN2YU^pW(X6,sAqan-*l*t- ~Q[tR<Dr-!RqKqB2G');
define('NONCE_SALT',       ';-DO~$D9~q}:X<j =VHaV;*xoV`=iSp#cLB*#!qKD=y[t8Q>,v(Fmh*&kBm6UG25');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
