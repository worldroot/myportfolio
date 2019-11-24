<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'db1114678-wordpress2');

/** MySQL database username */
define('DB_USER', 'db1114678-wp2');

/** MySQL database password */
define('DB_PASSWORD', 'lion1998');

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
define('AUTH_KEY',         '8}=9d|VI>$>p(4H[ Uh6&UHzNKOS0STp,11,`X#D=p-DFYrZ8)>pW0*?A>ZUpqXd');
define('SECURE_AUTH_KEY',  'n!E$V!xLDOLRqcEpeTkyFm?1,1u-Erq|#|+5ca74R(-RUiVvzVaW{Hmu&j+@f|.=');
define('LOGGED_IN_KEY',    ' hwR9,1L[ZAh*Xy.r<)gCObo|QX:W9t)#gbfV1iX3FsdSR^st1{@fO+@$05g:x0g');
define('NONCE_KEY',        'q)nFTrt)#]#sYOvKc3Z!fXERR-WNz5s,?-,Q)a@2iNe)%=`gvOm9jo4QGInd+Z6~');
define('AUTH_SALT',        'hMG},uT-~Vw9{ mS{^oiqTZM8`nDOx<Gx<G^Ay/!kL:LdYP].??0vD?18%udp`aR');
define('SECURE_AUTH_SALT', 'IG[~{n9~|!^5ajzOQ/Q^!fLGty|>8oU`{[I}9C!7%i,3@ar=2|]9IJUJ@hq.H(zT');
define('LOGGED_IN_SALT',   'HC|{o J>1*@[XKEwi|ekFx*6J+q|j139GI1Lse;Ddl>>*XHixznLXL/*jBeEb`^>');
define('NONCE_SALT',       '|j0!`[utE>q:]Y7@9_=i-2<[zU`2+jm(C+Wj_3B-f5}d6dO> >{c#([u|6?X4.+k');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
    
define('WP_MEMORY_LIMIT', '256M');
