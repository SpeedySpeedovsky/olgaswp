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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'd5imgp1a9m28f5' );

/** MySQL database username */
define( 'DB_USER', 'swfdqzwudfxsyh' );

/** MySQL database password */
define( 'DB_PASSWORD', '3dc2f239a1bf770be8cedf21b695ee26b572cd21d79b4963118b2b5c6ce7cea5' );

/** MySQL hostname */
define( 'DB_HOST', 'ec2-54-235-90-200.compute-1.amazonaws.com' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '4dNB@ScV6oCvk-!lFCAX?#RmuB0Q`wJvUs*OF*KiijLa=NLh/N<o]kV}BXKQVT+6' );
define( 'SECURE_AUTH_KEY',  'eSzbYw0,|YM;g)YGf;Qe([^-Zj7C7`J-qk0P{?dZyFo?0)}P%!jzjJr)*uG-OggT' );
define( 'LOGGED_IN_KEY',    ')3WYZ{q1{0R]/,$nHC!Z]d>C00eQ8QzaoM?OO14yU<Hsz-}?4],yS#i!}}nu.sb$' );
define( 'NONCE_KEY',        'N/zy*+KDv0HJRN^5aLK/.~5QO`wNkBRE!Vb$iw v`y2KMn)@;W9s;B!vo}?:OB7.' );
define( 'AUTH_SALT',        'P!gN-sXTD+j.<Yuk_(%IJ+J :(Se@ !.QeL#?f(ba7yAE( Ag|9nJizU`b{!kdKj' );
define( 'SECURE_AUTH_SALT', ';${wOAH}N$Crm FKOV0WFcPN-zZ%.7I1kr%52xi%>B}EI^^Ay4F(b>lJIMPL,b0z' );
define( 'LOGGED_IN_SALT',   'r+jvN<Y+R3mxT=Iz*$K@Hw{~i,BUlD2>|R&Kvfuzxpz}l2P>cQS1`ODEy<^zfZZ/' );
define( 'NONCE_SALT',       '`a|!,~+bLZK~35^LG6Ms&}:-k)Io?v?cS/QPIJqMlh>{dNm&VT_pdzS=Gz_! dU}' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
