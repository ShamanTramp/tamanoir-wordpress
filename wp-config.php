<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'wp_tama');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '3QmZ[43AIJZ!e-;>&iW%u!.a(BRvFa3T-~Sn]Lfr!<Q 96b]G]x:)@.XIG<jb8H{');
define('SECURE_AUTH_KEY',  'j73NtS{Jt-E`b,|}cl|&F)~6-lc376^IP/W:g_$f4LvX&#(u#}h({n9hy{]/zp-2');
define('LOGGED_IN_KEY',    'qr{[!zoB]<YY`8{YpSdCFiFUnJT@IKO:Y`IW]a~W=,^}(H#WhAA}%$^fD?9/Kc>r');
define('NONCE_KEY',        ',)Ijkh6hv;s%-na%{cjR98=r}Lt<60py8ojDP#sZ? gog5dT_eNsHwj%B&p },8c');
define('AUTH_SALT',        'O&>FW|[WsKe-^XiV)qf__e|[<@aEx:`?<Qx_E{&umI{~hK8t.Qj(:]dDt6tfQmr0');
define('SECURE_AUTH_SALT', '(+{m<jouH0AFB@@<~3>TtK*ztd4F2&j|Pz23=i)F6c1M?|W*a5%rcF`8>1$p-b5#');
define('LOGGED_IN_SALT',   'YVCxF[,jEy3:fvVY;!~8+4]t6mNwCrW4|GehVGH!EO,@kU]ca>UJm0DO2Pp~wlr?');
define('NONCE_SALT',       'KP$7~b^Gmn^pQ2K]NAy7$R9tLf^JEAWtUXJpo-e/__}SR^m&}H3@Vk x:*Cj-t~w');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');