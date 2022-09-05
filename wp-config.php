<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */
// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/homepages/3/d830092383/htdocs/www/sitewordpress/manchester/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', "dbs7891450" );
/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', "dbu1510035" );
/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', "Coralie08090+" );
/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', "db5009310569.hosting-data.io" );
/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );
/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );
/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '/O$fRJ,iMP2M+op1_ffk+q5?WfB$-2@OYqGeJs5G}_Z|4I667JSQ~d0;#S#f&7%6' );
define( 'SECURE_AUTH_KEY',  '9/j%Zf>>xh pNv51(dm{pHC^6Z7~(;Qn7er~,7%OV`5MR_mve7axcwlqx%X`XnM0' );
define( 'LOGGED_IN_KEY',    '.l]MW04#-Yf@It?sPNSZ53@25,7zXb;Q5F%MWHF5u;q$;qK%7c|5B%o=`KIR7#j.' );
define( 'NONCE_KEY',        '8!1nZ8auQ0Yg~DBca!w`v^*WI;mi{68yDw!Wf.yG{Ogt3&uH)q1d5TZ9%>([=-4{' );
define( 'AUTH_SALT',        '&Lvlm&[w[+aT-Z8}<o<`}rdW.,gWLFlI}i;u:x.8(pCAOBlLXLE7Tb+YoLFb$~+H' );
define( 'SECURE_AUTH_SALT', '*|hdx3G,h4 xi~eO-Bnm)*QGNY T_j!yC]HJ~rOxV<H.-o,S!p0B^oudc<>Tc{h0' );
define( 'LOGGED_IN_SALT',   'd;KBHA.k!B~FTXGNqdakRsw{ZQuvrmd-rpB<|0cnV}qo}5C8>/NNzu*BHRTQyUoa' );
define( 'NONCE_SALT',       'o-LH|oIZN>6B[D~*B%A:ALv8Z^lk&6L?i..*$/w.cFe0s0>h%Ml&3`aA475|hoQ{' );
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
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );
/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */
/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );
/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );