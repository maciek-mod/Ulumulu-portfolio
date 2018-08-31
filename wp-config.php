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
define('DB_NAME', 'm1129_WP');

/** MySQL database username */
define('DB_USER', 'm1129_ulumulu');

/** MySQL database password */
define('DB_PASSWORD', 'MolZnp8T6zsY9dfWN8zF');

/** MySQL hostname */
define('DB_HOST', 'mysql17.mydevil.net');

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
define('AUTH_KEY',         'Xv23xwks4Te@qx#VhU,bj4iM<<$-~KPn9DR@h{+ac<(Z#Ga*BudUZ6c7_gOyq.57');
define('SECURE_AUTH_KEY',  'ex~SF^lp;]oDfi$yXZmjr B[!(Dcdnvz`o45l_$-_.)H=+/zC{#XmePVsumN*5xR');
define('LOGGED_IN_KEY',    'qvq9pukX}ne3Axn^!#Alm!g8F_68(+]@vS%6n,;(w5kq=nFL%`sI*9<!85tQ)ERz');
define('NONCE_KEY',        'g@<`|~OiJym>(qv2X%9dc}7>LG2u$7b3R3UqD~HlZf-Jgy&L.rx8$R`*TJ=A%&VG');
define('AUTH_SALT',        '<S@DTS&Gwn(VeOz6RDZg*ut?cPu=Am3*5eFu7xJaLS/:5IE67&h(BD<?riFywVNt');
define('SECURE_AUTH_SALT', '>OKpR5$!HooYXUe4*!6d^4ZVky_)JsvT3uKg06KDm%lGWtftz`#{|[ _,3{K_JCz');
define('LOGGED_IN_SALT',   '+ 1g7_1OM0N4F6rGpBL?06)xs#@luR)WLE_{pWULhu~[(KU]9xt=Nwi*LqU;4MOM');
define('NONCE_SALT',       'u.xoP.q4r/$g/N?vuaKc&%2*M}$4[$PD#Vg>eN=S136T%w;=M95135 XcLf@[3# ');

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
