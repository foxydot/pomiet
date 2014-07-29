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
define('DB_NAME', 'ss_pomiet');

/** MySQL database username */
define('DB_USER', 'ss_pomiet');

/** MySQL database password */
define('DB_PASSWORD', 'ss_pomiet');

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
define('AUTH_KEY',         'z%_-Ce5`c6[o/=eA_DL#va(%U*pdoh&.3@1F~`y#mfss|~YfZLiRvs3 .L}`$W,-');
define('SECURE_AUTH_KEY',  '}lD=9R&0TM?|a7O-5Yd#n9XVb=XCPZxyT_q+#0(Bn:P:v($RU2F6QJHHdm19[F$p');
define('LOGGED_IN_KEY',    '96sQ+}4c#->Rsp?2Hn0|XK:Rdg,l(-ShntqL8EDSd2]l+T.+# G2$0f(eKfIFsEQ');
define('NONCE_KEY',        'x&iq*RwU[)bKch-ZG<9f_p7Z_q.?@-^5E|5u|Qq`g^-E-_PeAZ[cL0/N= 0SnGU+');
define('AUTH_SALT',        '0[Ns,)BW=*=vddNCUR(OzhH7,ygC^Vlt5]F]3o~68]Dd/yFzqyc_Ddq,OTDd?IbV');
define('SECURE_AUTH_SALT', '[>1z3Fzy*Bgo9Vu@U^!J]Q<1|- R ekh4(w%k}o5BM)xWk}Hy}nDcHs]-wmuWop%');
define('LOGGED_IN_SALT',   'Lne|h~j_(6r0H/b2hR>^wLHN4v-m]+)t,Uj1t/W7KRQ~.pu@bFh?[+ U22a1JOd3');
define('NONCE_SALT',       'yd8Le>7mBOgl=YINw7@+!z^keQ5gG-pI]ml*%]v];@@r*@uHc$w+M9sy~J3=o*1d');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'pom_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
