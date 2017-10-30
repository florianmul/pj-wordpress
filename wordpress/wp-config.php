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
define('DB_NAME', 'wordpress-formation');

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
define('AUTH_KEY',         '/`$/r5YVVMo81N%@kXr:6rd~x7~[D?6L2s8=-2[aTbc<MaUH{8bD0an=9uQXq!YV');
define('SECURE_AUTH_KEY',  'K_+/mq!znWZ7@Ui{7!L6H;5~nC@l|mn(/<mD~{r=pm1M3+[He<(]iKunuT}fxGoe');
define('LOGGED_IN_KEY',    'i|fby$f4snK>nFTumH((Ll?%RV)7}3qLzwJT%wvMO)B6=(J43ORo69Wl;Sh`1e<y');
define('NONCE_KEY',        'lb=.|M[yd{1}&i)2L1r()2H#5XB]N>;ba/#(MxHRT=L3/9D8Q:Ym@:XT`E_0KmCF');
define('AUTH_SALT',        'FzjT~r0mo[~-d7]T:Pis80i@/)Au:]eBd>{R25:S,z*Ys8kt1F<c2 9qDW}-T)d ');
define('SECURE_AUTH_SALT', 'X(V9e=;w2/YC>76DhzPZ-#~1cj#86[m(IO27y,Psa.Yt>+k_n7wQo92dYoH*yh#_');
define('LOGGED_IN_SALT',   '~,1Lx}s@2&Nq]WHL?.<<$ANn2>Cdt4s2zP},0~cUR2b~!2OGDAk`1B=-+7:Jj;$4');
define('NONCE_SALT',       '.az.I^T+3`X9]O~h#*&*J} WVP;@)HsNFy]i%C2dgr9&nRYl2$RKB1Y9+J[bNiIF');
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