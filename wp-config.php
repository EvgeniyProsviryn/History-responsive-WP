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
define('DB_NAME', 'wp_database');

/** MySQL database username */
define('DB_USER', 'vroot');

/** MySQL database password */
define('DB_PASSWORD', 'vroot');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'D]83Gs$^,&+_|%-I;QcSJ^HH14o6fA[]gz)HFDk<o@R+S#tA%i8O#@gKc-+L_|Ry');
define('SECURE_AUTH_KEY',  '-F87KVT-+<K ={5VPu@D6Daaa6M%dBy@JL,Ac,yMrZ;fj^oL[-[dta?khFSsQTY0');
define('LOGGED_IN_KEY',    '^-Kn8?`Ku[x#v7%,= uT;M0~Pghn-YyC. [en8`U%I5ZE2&C_qve- uf3?8{qBk5');
define('NONCE_KEY',        'NA+<ahc JW+MO4o+Z`]+ (~Lcn`=Fv3frU~H{{x.9S*xFpfAKKA2K-,)tNF/z#;4');
define('AUTH_SALT',        'E1Dc2%g@nI,O-w zhtX-WI^;/&wWSiBV|UPRdlD8V7IZ;n+7EX|yp1aUKFFHHdGg');
define('SECURE_AUTH_SALT', 'mA;D`:i+lHCz$-ZR<)3XX%NrC yID a0U;|tBkm9ZEBZQ-{zcPybl+R7:.&m.X-@');
define('LOGGED_IN_SALT',   'Pr0`IHrs]Q+h* A?+Y4iS.33Ry*Tl$3]R<-_oI)bp{:!;bCI}v+77*})xpZYv]W,');
define('NONCE_SALT',       'UHA`(aP/[`I|Bjcl?h0a(>ZJizd6V>9Vl?5ha?`TPF2E2Htz+`WhWn3B4;FGng?5');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
