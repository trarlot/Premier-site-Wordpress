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
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', '' );

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
define( 'AUTH_KEY',         'F@R[^i6gW3w5tbN^d4N&_jrN{c&ogED$YfO%TJ(8{J0-T3,l=G_<BC*0P1Psao{/' );
define( 'SECURE_AUTH_KEY',  ')yuDojAb0%2ZO{|41*5f.oG}5OLy|W){VOLQ;o%ZqMu7rOj-P]B2XFAb~T%iXe)V' );
define( 'LOGGED_IN_KEY',    'WQ/rz(,#$IiA|l$Ye$sX=bhTbzr.g p%nm MDi3@P76Z@;Dn#qp!TaK]DfFA^FM*' );
define( 'NONCE_KEY',        '@W`!Lwwl?QH-sujPJn*TKqRbR05mxC-zAOR01qJ#Sl;* g3B&rtu?nPB+9Evv7ty' );
define( 'AUTH_SALT',        '{{saiDugFB,1hd``]rjC2{#]LHkLX~eC%2pQ`Znt8v_eISoB!N9on]cY $][iN7#' );
define( 'SECURE_AUTH_SALT', '185l$]#@hV!3 ZYCSo0&+l 2Pq]PbKdAbE`<+i5wW{*HQ$vsN8p*}01stQm1b2[^' );
define( 'LOGGED_IN_SALT',   'mv{6XIldZ dM= Qp;AMw3a`r#rY}!D+Qf4z2L*6A:~I(8lai<{X@hb[|,l{Tch#@' );
define( 'NONCE_SALT',       '0%Wx}[q*8IT?y$6U&8j![wRU:$=}1o )b+W^@$?wMj-35v8aS{WcCEt4mGLncK:h' );
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
