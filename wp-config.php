<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'bootstrap2wordpress');

/** MySQL database username */
define('DB_USER', 'bootman');

/** MySQL database password */
define('DB_PASSWORD', '6U6hHv5Er2j8bKVW');

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
 define('AUTH_KEY',         '9^vE|GrI86uQ]7ezXTaay`nToP+(/aG^dKW=[)Q(Cn4|^pTYNzJF{uyiabvYt)@:');
 define('SECURE_AUTH_KEY',  'nP@O@R`[s2|Lt{`s.sGl]]eyC~eA4:bYqG,x~~IZJs3LNAGXNWj[<sc&&Gg=zX_@');
 define('LOGGED_IN_KEY',    'gS~et*|H/m9SGpADcF;#[B+XV1+Ya-mnnm,25s$&RMCk{`,=O%D-GhR1DUgL@ZR5');
 define('NONCE_KEY',        'RJ0C3 |!75io/@3f&YqQ|:*P6}|UKe{39v5<3,%LJ+e:Z/F+/@1x6JILU Gi- mm');
 define('AUTH_SALT',        '9) y,!F4T93Yg5IAf6-2Qkp;9#GdU`<b!r?[/Iz+um3>^&g:sn%`[5{P@/U@5IaL');
 define('SECURE_AUTH_SALT', '&3&$Jd42554!=+2mLi[(-V-HDr2 F-^`1cWuN_1u68x=RSH4#sM?E|=v`YF&${~_');
 define('LOGGED_IN_SALT',   '#Xi*[RkHG}R<vDhCbi /=445Fkfx$zjmL&0|!vaPW-,qQiWAA-%|U32=+k2+@m{_');
 define('NONCE_SALT',       '`=`|9 ti|G6x4]5K(>hE5FQ- _qfLR-,;$[|t5yCTv(P-tc1[uJ>A{4!6(uA<:d`');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dbbs_';
 
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
