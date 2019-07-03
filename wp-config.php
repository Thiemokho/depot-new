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
define( 'DB_NAME', 'behome' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'thiemokho' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '-Penda92' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'k)#}g(%0eHhX]WuYtM{r;]o&Q9H;nqDv8+Bu)W}Mr-}=2dP !@O*0+5Jg1sE{&X+' );
define( 'SECURE_AUTH_KEY',  ':V:J0q|^nH@h0Q1_dw=I%Cu8Os6{kgBq&n@ug-%tV?G1;|q?gumpc~P:WF~=:2Ng' );
define( 'LOGGED_IN_KEY',    'Zic[/gZHAzel&G|nx&a$Fi3DVa7yikyR;LPh|[QonOwz##f$]2-Tjor$c;E<=m;o' );
define( 'NONCE_KEY',        ',J=V~82=/MDnPZOe>tT^>a_F:jZ^1oVY=B~=#[z|n~Y:&W81v;lQ 1Zt~q}{~]5#' );
define( 'AUTH_SALT',        '1TkALqqjBar{>=Ae=Rz#i%7?=1j::CtaKw/O}KM+4cgm<opAr15f]P</$IRF~2bs' );
define( 'SECURE_AUTH_SALT', 'RJXMp;sx<Wr`e,Bj/ew*Q$|jiupM`kz)w~tJFe3)@5E]Er~>&[bT 9q>w@sc/}*_' );
define( 'LOGGED_IN_SALT',   '!f:sc6gQhaEkvm7j(s}HK.qM^DV<eF?Z)PfU5?FNnE`N|=&$pG`Q*72yBTOPWwUO' );
define( 'NONCE_SALT',       'PAi~8w(ABdn}EOj~&-e%k:qUj&D)JmjAf]D$X!a>6vIrgVWm3z; eA|vwzsjj-Jt' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

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

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
define('FS_METHOD', 'direct');
define('WP_MEMORY_LIMIT', '128');
