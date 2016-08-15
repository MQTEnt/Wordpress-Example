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
define('DB_NAME', 'wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'wXUXhaY7{enq_@C<]97R7#0:nn6:Nq 3Sy~dW]kF@}~>/r;YY$IprE~v${Qi2@`z');
define('SECURE_AUTH_KEY',  '-URkQq <!hVrD_}Pk8jz@9xovvuvyF9LK)^6fn!s):H)4j5>Ed~*IQmT+z+bL&=5');
define('LOGGED_IN_KEY',    '~C<6F*70~%Azb26;nJ-E--3b`Y-fhaKd_X_XJx^Xq@5/ZK#@jhA1t!H+HAt4$Xr3');
define('NONCE_KEY',        'A9v,_hxA{`5[h`a!&2%/{z.d[s|N!2@:qaTO8CD1gQ1:i_RzS)u>;7^7!)vw@hW]');
define('AUTH_SALT',        'k%-7+{kQ2>pidVf+uQJbLvER}gVB7fgY38-P8AukM@xSQ%uA]}TytP|9t.9U+~lq');
define('SECURE_AUTH_SALT', '-_n pwPqC9o-xh<H;O+Hmzy&|]*nd|GH-sweG81jZlHzvn9=|`nI.xA+u,Gc,xN<');
define('LOGGED_IN_SALT',   '7>9f4u>}EmdgPADbGxQWzYu^]X7p>^D+XUx0B=qb]@*Q(bxGSqiUrn[WEVo?|R*h');
define('NONCE_SALT',       '1E,vv5Zhr0TG{F`L[DvVD~MnvNk@:1l42>>s1pl-FxoRuewK}limWqW23%j?/~8W');

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
