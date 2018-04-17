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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'FZSU<-N8V^#oM2WSd}d@zgXqE}lf]jYwaVNcMtARn_l*zn+Ir`V-}o=P>+?;oRWq');
define('SECURE_AUTH_KEY',  'Xm2-re!|g9d=:h$PvDXxWQL<w-OVle|b Z,Z<IV0)Hm^S{yA!-2H.lX3}`r&#3)Q');
define('LOGGED_IN_KEY',    'vWrCw#O!:kuo|?ViuPOl#c)ZfWM,^D0~@w{Cup>_b3YBf9:GdZ+wtRw2G=B@uZ~w');
define('NONCE_KEY',        ' N?pMUgH`0x}/q}-?c}c7G~v:i#k=;&>-?e+nDaO#Ylimtn<W*a@2yQG2H}n&{r&');
define('AUTH_SALT',        '>vn/@Ocg-M3nU`5r4+{.+38s]GL+Zyn^O6-3q@Wv)$RK.DyI{%H<eJ6%FPtjHXxY');
define('SECURE_AUTH_SALT', ':P!g8[|R%)tIATP.dts0o!SqoS>[*_tZ[<o2x:3,yRb@$IL/7]PA<i0#ySS+*ax3');
define('LOGGED_IN_SALT',   'QVM&pAikiq]3Mm0v.0aF=]m01 $xPo3LS~4thJgVSyLDT{hRpfSk4N4sMDVvMEc$');
define('NONCE_SALT',       'Z9}YMCYdC:~GM<Z&>3[Mge}}^8%&.R{z^$7NQ3L#7R1wIrOn,jQ<OAx#jL2h`{A#');

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
