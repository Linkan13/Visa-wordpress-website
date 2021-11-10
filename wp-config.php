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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'databaseproject' );

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
define( 'AUTH_KEY',         'CN?F}?HNOjio7/A/G|ncAt7$tuT%P:B@~g851du+3DteV>+7<<G62BiUJH7yP.U7' );
define( 'SECURE_AUTH_KEY',  '?m!EBJ{zxeb8N6D&kO$C%Xl0Wke6VNlQQ+9|2$K``>zL:#s~GX0$l%{EoLH7J;*i' );
define( 'LOGGED_IN_KEY',    '+<IR/[BVxATe5V`/Y69PFIv67APj-VyAm@wRbSW>`2t[x)dT_s0Aw7kY~5?ykFy*' );
define( 'NONCE_KEY',        'm;Q]TOz-h4YtSj&B78DlC#y,4C&z*x!oYdM7+:$&h>hdN3kxL>E(H3A=`I*~W&lv' );
define( 'AUTH_SALT',        '>sW.BQxisi)mQ7M@[muw`ZEnG&-k!__hrk%(zA_O^@W2Tmw$`*-AGkW>d#Ut,3t%' );
define( 'SECURE_AUTH_SALT', '6Q(%W8+G5IA`bd=9+OAl|DRg(T_z+~<1Ndl_F~>,pWG,h(r++D=wruvhfD7mz;6(' );
define( 'LOGGED_IN_SALT',   'J!IkqA?qn#ex_U13/4Nj9U}{S1U?/w@jX>:%VMXv_1SV6J~|O&omA(F$D.?u8Np ' );
define( 'NONCE_SALT',       '(UjT~o2.x+eK1ZVE+lhl<LQ1#Q1hW0dM`C*]A;FA/LgX0H:yvr![;C3Lj[R5~,{G' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
