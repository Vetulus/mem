<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'mem_db');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '<.<ZNhKhV &c1t}C&a4/#nsbv*%rUW@8w3QJFw@]2Klb6k:)5x@oV2uyphy0?,1z');
define('SECURE_AUTH_KEY', 'T}P.CAmimYBO}CrzHT9K^@>Wf~K)!6:si(Ycz0B0+x=z5{3/>XonEUi3S?-qu(Im');
define('LOGGED_IN_KEY', 'HrY6<w}ee3z}0Rk~AZ%1~tQqOwYhQ&&DjthOcHGK2@e~pKeu9];C %w@{~^}x=hz');
define('NONCE_KEY', '9r<)`(o/x&)4Ni>i 7%MqNoRD)#/ICqxThfX `4Hwp6@Qc}gc&qUKyeg3(tI:!bF');
define('AUTH_SALT', 'zeP U}8cTWV^VnsAgnpNQ_j8(0{b/9KC)YhR,36O THjEOI%`VR(vTM756eKz]`G');
define('SECURE_AUTH_SALT', ']??%^G9N0nQ`z CO)muV+]eq!&_7-5Nt*Sz0kWE@}@!((ma.vyY9%:+Yr 0bS(nn');
define('LOGGED_IN_SALT', ',K<LO;fl5 r;PtRiE*VUfQocqmcz{h3zK]L^^5:a6R<h%>hOiV10=ZAm<,>~?xv;');
define('NONCE_SALT', 'aMHT5g5%.-[_*.m`GpKn8yJ9&!4rwrG%Fms^{6~= GRSb1yr=Jb }aR>#:_Et%Ux');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'mem_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

